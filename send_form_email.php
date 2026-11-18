<?php
/**
 * Form Email Dispatcher & JSON Inquiry Logger
 * The Discovery International School (Prithla, Palwal)
 * Handles:
 *  1. General Contact Inquiries (contact-us.php)
 *  2. Online Admission Registrations (online-admission.php)
 * Automatically logs every inquiry into data/inquiries.json and emails all admin_emails.
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ . '/config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $referer  = $_SERVER['HTTP_REFERER'] ?? 'index.php';
    $formType = $_GET['form'] ?? $_POST['form_type'] ?? 'contact';

    // 1. Resolve and Validate Recipient Emails from centralized config
    $raw_emails = $school['admin_emails'] ?? ['thediscoveryinternational@gmail.com'];
    if (!is_array($raw_emails)) {
        $raw_emails = [$raw_emails];
    }
    
    $recipients = [];
    foreach ($raw_emails as $em) {
        $cleanEmail = trim((string)$em);
        if (!empty($cleanEmail) && filter_var($cleanEmail, FILTER_VALIDATE_EMAIL)) {
            $recipients[] = $cleanEmail;
        }
    }
    if (empty($recipients)) {
        $recipients = ['thediscoveryinternational@gmail.com'];
    }

    // Generate unique inquiry ID (e.g. INQ-20261118-9F3C1)
    $inquiryId = 'INQ-' . date('Ymd') . '-' . strtoupper(substr(bin2hex(random_bytes(3)), 0, 5));
    $timestamp = date('Y-m-d H:i:s');
    $clientIp  = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
    $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';

    $inquiryPayload = [];
    $subject        = '';
    $body           = '';
    $senderEmail    = '';

    // 2. Process Form Types
    if ($formType === 'admission') {
        // Online Admission Form
        $studentFirst = htmlspecialchars(trim($_POST['first_name'] ?? ''));
        $studentLast  = htmlspecialchars(trim($_POST['last_name'] ?? ''));
        $studentName  = trim("$studentFirst $studentLast");
        $aadharNo     = htmlspecialchars(trim($_POST['aadhar_no'] ?? ''));
        $fatherName   = htmlspecialchars(trim($_POST['father_name'] ?? ''));
        $classApplied = htmlspecialchars(trim($_POST['class'] ?? ''));
        $prevSchool   = htmlspecialchars(trim($_POST['prev_school'] ?? ''));
        $whatsapp     = htmlspecialchars(trim($_POST['whatsapp'] ?? ''));
        $contactNo    = htmlspecialchars(trim($_POST['contact_no'] ?? ''));
        $email        = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
        $address      = htmlspecialchars(trim($_POST['address'] ?? ''));
        $city         = htmlspecialchars(trim($_POST['city'] ?? ''));
        $state        = htmlspecialchars(trim($_POST['state'] ?? ''));
        $message      = htmlspecialchars(trim($_POST['message'] ?? ''));

        if (empty($studentFirst) || empty($fatherName) || empty($contactNo) || empty($classApplied)) {
            $_SESSION['form_error'] = "Please fill in all required fields marked with *.";
            header("Location: " . $referer);
            exit;
        }

        $senderEmail = !empty($email) ? $email : $school['email'];
        $subject     = "New Online Admission Registration: {$studentName} ({$classApplied}) - [{$inquiryId}]";

        // Structured payload for JSON storage
        $inquiryPayload = [
            'id'          => $inquiryId,
            'timestamp'   => $timestamp,
            'form_type'   => 'admission',
            'form_title'  => 'Online Admission Registration',
            'session'     => $school['session'] ?? '2026-27',
            'data'        => [
                'student_first_name' => $studentFirst,
                'student_last_name'  => $studentLast,
                'student_full_name'  => $studentName,
                'aadhar_number'      => $aadharNo,
                'father_name'        => $fatherName,
                'class_applied'      => $classApplied,
                'previous_school'    => $prevSchool,
                'whatsapp'           => $whatsapp,
                'contact_number'     => $contactNo,
                'email'              => $email,
                'address'            => $address,
                'city'               => $city,
                'state'              => $state,
                'message'            => $message,
            ],
            'meta'        => [
                'ip_address' => $clientIp,
                'user_agent' => $userAgent
            ]
        ];

        // Format Email Body
        $body  = "=======================================================\n";
        $body .= "NEW ONLINE ADMISSION REGISTRATION - {$inquiryId}\n";
        $body .= "The Discovery International School, Prithla (Session {$school['session']})\n";
        $body .= "=======================================================\n\n";
        $body .= "Inquiry ID:          $inquiryId\n";
        $body .= "Student Name:        $studentName\n";
        $body .= "Student Aadhaar No:  $aadharNo\n";
        $body .= "Father's Name:       $fatherName\n";
        $body .= "Class Applying For:  $classApplied\n";
        $body .= "Previous School:     " . ($prevSchool ?: 'N/A') . "\n";
        $body .= "WhatsApp Number:     $whatsapp\n";
        $body .= "Calling Phone No:    $contactNo\n";
        $body .= "Parent Email:        " . ($email ?: 'N/A') . "\n";
        $body .= "Residential Address: $address, $city, $state\n";
        $body .= "Additional Message:  " . ($message ?: 'None') . "\n\n";
        $body .= "Submission Date/Time: " . date('d-M-Y H:i:s T') . "\n";
        $body .= "Client IP Address:    " . $clientIp . "\n";
        $body .= "=======================================================\n";

    } else {
        // General Contact Form
        $name          = htmlspecialchars(trim($_POST['name'] ?? ''));
        $email         = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
        $phone         = htmlspecialchars(trim($_POST['phone'] ?? ''));
        $classInterest = htmlspecialchars(trim($_POST['class_interest'] ?? ''));
        $message       = htmlspecialchars(trim($_POST['message'] ?? ''));

        if (empty($name) || empty($phone) || empty($message)) {
            $_SESSION['form_error'] = "Please fill in all required fields (Name, Phone, and Message).";
            header("Location: " . $referer);
            exit;
        }

        $senderEmail = !empty($email) ? $email : $school['email'];
        $subject     = "New Contact Inquiry from {$name}" . ($classInterest ? " ({$classInterest})" : "") . " - [{$inquiryId}]";

        // Structured payload for JSON storage
        $inquiryPayload = [
            'id'          => $inquiryId,
            'timestamp'   => $timestamp,
            'form_type'   => 'contact',
            'form_title'  => 'General Contact Us Inquiry',
            'session'     => $school['session'] ?? '2026-27',
            'data'        => [
                'name'           => $name,
                'email'          => $email,
                'phone'          => $phone,
                'class_interest' => $classInterest,
                'message'        => $message,
            ],
            'meta'        => [
                'ip_address' => $clientIp,
                'user_agent' => $userAgent
            ]
        ];

        // Format Email Body
        $body  = "=======================================================\n";
        $body .= "NEW CONTACT US INQUIRY - {$inquiryId}\n";
        $body .= "The Discovery International School, Prithla\n";
        $body .= "=======================================================\n\n";
        $body .= "Inquiry ID:          $inquiryId\n";
        $body .= "Name:                $name\n";
        $body .= "Email:               " . ($email ?: 'N/A') . "\n";
        $body .= "Phone Number:        $phone\n";
        $body .= "Class of Interest:   " . ($classInterest ?: 'General Inquiry') . "\n";
        $body .= "Message:\n$message\n\n";
        $body .= "Submission Date/Time: " . date('d-M-Y H:i:s T') . "\n";
        $body .= "Client IP Address:    " . $clientIp . "\n";
        $body .= "=======================================================\n";
    }

    // 3. Dispatch Emails to ALL Admin Recipients
    $mailHeaders  = "MIME-Version: 1.0\r\n";
    $mailHeaders .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $mailHeaders .= "From: The Discovery International School <" . ($school['email']) . ">\r\n";
    if (!empty($senderEmail) && filter_var($senderEmail, FILTER_VALIDATE_EMAIL)) {
        $mailHeaders .= "Reply-To: $senderEmail\r\n";
    }
    $mailHeaders .= "X-Inquiry-ID: $inquiryId\r\n";
    $mailHeaders .= "X-Mailer: PHP/" . phpversion();

    $sentRecipients   = [];
    $failedRecipients = [];
    $deliveryLogs     = [];

    foreach ($recipients as $recipientEmail) {
        $isSent = false;

        // Try Authenticated SMTP first if enabled in config.php
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

        // Fallback to PHP mail() if SMTP disabled or failed
        if (!$isSent) {
            $isSent = @mail($recipientEmail, $subject, $body, $mailHeaders);
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

    // Record email delivery details in the inquiry payload
    $inquiryPayload['delivery'] = [
        'target_recipients' => $recipients,
        'sent_to'           => $sentRecipients,
        'failed'            => $failedRecipients,
        'logs'              => $deliveryLogs,
        'status'            => !empty($sentRecipients) ? 'sent' : 'logged_locally'
    ];

    // 4. Save into JSON Log File (data/inquiries.json) with File Locking
    $dataDir  = __DIR__ . '/data';
    $jsonFile = $dataDir . '/inquiries.json';

    if (!is_dir($dataDir)) {
        @mkdir($dataDir, 0755, true);
    }

    // Read existing logs safely
    $allInquiries = [];
    if (file_exists($jsonFile)) {
        $fileContent = @file_get_contents($jsonFile);
        if (!empty($fileContent)) {
            $decoded = json_decode($fileContent, true);
            if (is_array($decoded)) {
                $allInquiries = $decoded;
            }
        }
    }

    // Prepend new inquiry to the top (newest first)
    array_unshift($allInquiries, $inquiryPayload);

    // Save with exclusive lock
    @file_put_contents($jsonFile, json_encode($allInquiries, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE), LOCK_EX);

    // 5. Success Feedback to Visitor
    $_SESSION['form_success'] = "Thank you! Your information has been registered successfully (Inquiry Ref: <strong>{$inquiryId}</strong>). Our admissions administration will contact you shortly.";
    header("Location: " . $referer);
    exit;

} else {
    header("Location: index.php");
    exit;
}

/**
 * Direct Authenticated Socket SMTP Sender (TLS / STARTTLS / SSL)
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
        throw new Exception("SMTP settings incomplete (host, username, or password missing)");
    }

    $remoteHost = ($encryption === 'ssl' || $port == 465) ? "ssl://{$host}:{$port}" : "tcp://{$host}:{$port}";
    $timeout = 8;
    $socket = @stream_socket_client($remoteHost, $errno, $errstr, $timeout);
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
        throw new Exception("SMTP password rejected: " . trim($pass_res));
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
        throw new Exception("DATA rejected: " . trim($data_res));
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
