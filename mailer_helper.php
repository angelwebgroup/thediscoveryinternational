<?php
/**
 * =========================================================================
 * Mailer Helper - The Discovery International School (Prithla, Palwal)
 * =========================================================================
 * Provides:
 *  1. Authenticated Direct Socket SMTP Sender (TLS / STARTTLS / SSL)
 *  2. DMARC-Compliant PHP mail() fallback with proper domain envelope headers
 *  3. Multi-recipient dispatcher with detailed delivery logs
 */

if (!function_exists('send_smtp_socket')) {
    /**
     * Direct Authenticated Socket SMTP Sender (Zero Composer Dependencies)
     */
    function send_smtp_socket($to, $subject, $bodyText, $school) {
        $smtp = $school['smtp'] ?? [];
        $host = $smtp['host'] ?? '';
        $port = $smtp['port'] ?? 587;
        $user = $smtp['username'] ?? '';
        $pass = $smtp['password'] ?? '';
        $fromEmail = $smtp['from_email'] ?? $school['email'];
        $fromName = $smtp['from_name'] ?? $school['name'];
        $encryption = strtolower($smtp['encryption'] ?? 'tls');

        if (empty($host) || empty($user) || empty($pass)) {
            throw new Exception("SMTP settings incomplete: host, username, or password missing in config.php");
        }

        $remoteHost = ($encryption === 'ssl' || $port == 465) ? "ssl://{$host}:{$port}" : "tcp://{$host}:{$port}";
        $timeout = 10;
        $context = stream_context_create([
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            ]
        ]);
        $socket = @stream_socket_client($remoteHost, $errno, $errstr, $timeout, STREAM_CLIENT_CONNECT, $context);
        if (!$socket) {
            throw new Exception("Could not connect to SMTP server {$host}:{$port} - {$errstr} ({$errno})");
        }

        $read = function() use ($socket) {
            $data = '';
            while ($str = fgets($socket, 515)) {
                $data .= $str;
                if (substr($str, 3, 1) === ' ') break;
            }
            return $data;
        };

        $send = function($cmd) use ($socket) {
            fputs($socket, $cmd . "\r\n");
        };

        // Greeting
        $read();

        // EHLO
        $send("EHLO " . ($_SERVER['SERVER_NAME'] ?? 'localhost'));
        $read();

        // STARTTLS if port 587 or tls
        if ($encryption === 'tls' || $port == 587) {
            $send("STARTTLS");
            $tls_res = $read();
            if (substr($tls_res, 0, 3) !== '220') {
                throw new Exception("STARTTLS negotiation failed: " . trim($tls_res));
            }

            if (!@stream_socket_enable_crypto($socket, true, STREAM_CRYPTO_METHOD_TLS_CLIENT)) {
                throw new Exception("TLS encryption handshake failed");
            }

            $send("EHLO " . ($_SERVER['SERVER_NAME'] ?? 'localhost'));
            $read();
        }

        // AUTH LOGIN
        $send("AUTH LOGIN");
        $auth_res = $read();
        if (substr($auth_res, 0, 3) !== '334') {
            throw new Exception("AUTH LOGIN rejected: " . trim($auth_res));
        }

        $send(base64_encode($user));
        $user_res = $read();
        if (substr($user_res, 0, 3) !== '334') {
            throw new Exception("SMTP username rejected: " . trim($user_res));
        }

        $send(base64_encode($pass));
        $pass_res = $read();
        if (substr($pass_res, 0, 3) !== '235') {
            throw new Exception("SMTP authentication password rejected: " . trim($pass_res));
        }

        // MAIL FROM
        $send("MAIL FROM: <{$fromEmail}>");
        $mail_from_res = $read();
        if (substr($mail_from_res, 0, 3) !== '250') {
            throw new Exception("MAIL FROM rejected: " . trim($mail_from_res));
        }

        // RCPT TO
        $send("RCPT TO: <{$to}>");
        $rcpt_to_res = $read();
        if (substr($rcpt_to_res, 0, 3) !== '250') {
            throw new Exception("RCPT TO rejected for {$to}: " . trim($rcpt_to_res));
        }

        // DATA
        $send("DATA");
        $data_res = $read();
        if (substr($data_res, 0, 3) !== '354') {
            throw new Exception("DATA command rejected: " . trim($data_res));
        }

        // Headers & Content
        $headers = [
            "MIME-Version: 1.0",
            "From: =?UTF-8?B?" . base64_encode($fromName) . "?= <{$fromEmail}>",
            "To: <{$to}>",
            "Subject: =?UTF-8?B?" . base64_encode($subject) . "?=",
            "Content-Type: text/plain; charset=UTF-8",
            "Date: " . date('r'),
            "X-Mailer: The-Discovery-International-Mailer"
        ];

        $content = implode("\r\n", $headers) . "\r\n\r\n" . $bodyText . "\r\n.\r\n";
        fputs($socket, $content);
        $send_res = $read();

        $send("QUIT");
        fclose($socket);

        return (substr($send_res, 0, 3) === '250');
    }
}

if (!function_exists('dispatch_notification_email')) {
    /**
     * Dispatch notification to array of admin emails
     */
    function dispatch_notification_email($recipients, $subject, $body, $senderEmail, $school, $inquiryId = '') {
        $serverHost = $_SERVER['SERVER_NAME'] ?? 'thediscoveryinternational.com';
        $serverHost = preg_replace('/^www\./i', '', $serverHost);
        if ($serverHost === 'localhost' || $serverHost === '127.0.0.1' || empty($serverHost)) {
            $serverHost = 'thediscoveryinternational.com';
        }
        $noreplySender = "no-reply@" . $serverHost;

        $mailHeaders  = "MIME-Version: 1.0\r\n";
        $mailHeaders .= "Content-Type: text/plain; charset=UTF-8\r\n";
        $mailHeaders .= "From: The Discovery International School <" . $noreplySender . ">\r\n";
        if (!empty($senderEmail) && filter_var($senderEmail, FILTER_VALIDATE_EMAIL)) {
            $mailHeaders .= "Reply-To: $senderEmail\r\n";
        } else {
            $mailHeaders .= "Reply-To: " . ($school['email']) . "\r\n";
        }
        $mailHeaders .= "Return-Path: <" . $noreplySender . ">\r\n";
        if (!empty($inquiryId)) {
            $mailHeaders .= "X-Inquiry-ID: $inquiryId\r\n";
        }
        $mailHeaders .= "X-Mailer: PHP/" . phpversion();

        $sentRecipients   = [];
        $failedRecipients = [];
        $deliveryLogs     = [];

        foreach ($recipients as $recipientEmail) {
            $isSent = false;

            // 1. Try Authenticated SMTP if enabled in config.php
            if (!empty($school['smtp']['enabled'])) {
                try {
                    $isSent = send_smtp_socket($recipientEmail, $subject, $body, $school);
                    if ($isSent) {
                        $deliveryLogs[$recipientEmail] = 'Sent via Authenticated SMTP';
                    }
                } catch (Exception $e) {
                    $deliveryLogs[$recipientEmail] = 'SMTP Error: ' . $e->getMessage() . '. Fallback to mail()...';
                }
            }

            // 2. Fallback to PHP mail()
            if (!$isSent) {
                $extraParams = "-f" . $noreplySender;
                $isSent = @mail($recipientEmail, $subject, $body, $mailHeaders, $extraParams);
                if (!$isSent) {
                    $isSent = @mail($recipientEmail, $subject, $body, $mailHeaders);
                }

                if ($isSent) {
                    $deliveryLogs[$recipientEmail] = ($deliveryLogs[$recipientEmail] ?? '') . ' Sent via PHP mail()';
                } else {
                    $deliveryLogs[$recipientEmail] = ($deliveryLogs[$recipientEmail] ?? '') . ' Failed via PHP mail()';
                }
            }

            if ($isSent) {
                $sentRecipients[] = $recipientEmail;
            } else {
                $failedRecipients[] = $recipientEmail;
            }
        }

        return [
            'sent'   => $sentRecipients,
            'failed' => $failedRecipients,
            'logs'   => $deliveryLogs
        ];
    }
}

