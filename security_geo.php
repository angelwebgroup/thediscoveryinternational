<?php
// Geo-restriction disabled - Allow all visitors globally
return;

// Bypass for CLI execution
if (php_sapi_name() === 'cli') {
    return;
}

// Function to resolve the real visitor IP address
function tdis_get_client_ip() {
    $ip_headers = [
        'HTTP_CF_CONNECTING_IP',
        'HTTP_X_FORWARDED_FOR',
        'HTTP_X_REAL_IP',
        'REMOTE_ADDR'
    ];
    foreach ($ip_headers as $header) {
        if (!empty($_SERVER[$header])) {
            $ip_list = explode(',', $_SERVER[$header]);
            $ip = trim($ip_list[0]);
            if (filter_var($ip, FILTER_VALIDATE_IP)) {
                return $ip;
            }
        }
    }
    return $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1';
}

$client_ip = tdis_get_client_ip();

// Whitelist Localhost & Local Subnets for development
$is_whitelisted = false;
$server_name = $_SERVER['SERVER_NAME'] ?? '';

if (
    $client_ip === '127.0.0.1' || 
    $client_ip === '::1' || 
    substr($client_ip, 0, 3) === '10.' || 
    substr($client_ip, 0, 8) === '192.168.' ||
    preg_match('/^172\.(1[6-9]|2[0-9]|3[0-1])\./', $client_ip) ||
    $server_name === 'localhost' ||
    $server_name === '127.0.0.1'
) {
    // Allow simulation header to test country-blocking on localhost
    if (empty($_SERVER['HTTP_X_SIMULATE_COUNTRY']) && empty($_SERVER['HTTP_CF_IPCOUNTRY'])) {
        $is_whitelisted = true;
    }
}

if (!$is_whitelisted) {
    $detected_country = '';

    // 1. Simulation header (useful for testing)
    if (!empty($_SERVER['HTTP_X_SIMULATE_COUNTRY'])) {
        $detected_country = strtoupper(trim($_SERVER['HTTP_X_SIMULATE_COUNTRY']));
    }
    // 2. Cloudflare Country header
    elseif (!empty($_SERVER['HTTP_CF_IPCOUNTRY'])) {
        $detected_country = strtoupper(trim($_SERVER['HTTP_CF_IPCOUNTRY']));
    }
    // 3. Apache mod_geoip / cPanel environment variable
    elseif (!empty($_SERVER['GEOIP_COUNTRY_CODE'])) {
        $detected_country = strtoupper(trim($_SERVER['GEOIP_COUNTRY_CODE']));
    }
    // 4. Standard reverse proxy country header
    elseif (!empty($_SERVER['HTTP_X_COUNTRY_CODE'])) {
        $detected_country = strtoupper(trim($_SERVER['HTTP_X_COUNTRY_CODE']));
    }
    // 5. Fallback: Fast IP Geolocation Lookup with session cache
    else {
        if (session_status() === PHP_SESSION_NONE && !headers_sent()) {
            @session_start();
        }
        if (!empty($_SESSION['tdis_geo_country']) && !empty($_SESSION['tdis_geo_ip']) && $_SESSION['tdis_geo_ip'] === $client_ip) {
            $detected_country = $_SESSION['tdis_geo_country'];
        } else {
            $context = stream_context_create([
                'http' => [
                    'timeout' => 1.5,
                    'user_agent' => 'TDIS-GeoSecurity/1.0'
                ]
            ]);
            $api_url = "http://ip-api.com/json/{$client_ip}?fields=status,countryCode";
            $response = @file_get_contents($api_url, false, $context);
            if ($response) {
                $geo_data = json_decode($response, true);
                if (!empty($geo_data['status']) && $geo_data['status'] === 'success' && !empty($geo_data['countryCode'])) {
                    $detected_country = strtoupper($geo_data['countryCode']);
                    $_SESSION['tdis_geo_country'] = $detected_country;
                    $_SESSION['tdis_geo_ip'] = $client_ip;
                }
            }
        }
    }

    // If country is determined and NOT India (IN), block access
    if (!empty($detected_country) && $detected_country !== 'IN') {
        http_response_code(403);
        header('Content-Type: text/html; charset=utf-8');
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 - Access Denied | The Discovery International School</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Outfit', sans-serif; }
        body {
            background: #f8fafc;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            color: #0f172a;
        }
        .geo-card {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 20px 45px rgba(0,0,0,0.08);
            border: 1px solid #e2e8f0;
            border-top: 6px solid #881337;
            max-width: 520px;
            width: 100%;
            padding: 40px 32px;
            text-align: center;
        }
        .geo-icon {
            width: 68px;
            height: 68px;
            background: #fdf2f4;
            color: #881337;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            margin-bottom: 20px;
        }
        h1 { font-size: 1.55rem; font-weight: 800; color: #1e293b; margin-bottom: 12px; }
        p { font-size: 0.98rem; color: #64748b; line-height: 1.65; margin-bottom: 24px; }
        .badge-country {
            display: inline-block;
            background: #f1f5f9;
            color: #475569;
            font-size: 0.82rem;
            font-weight: 700;
            padding: 6px 14px;
            border-radius: 20px;
            margin-bottom: 16px;
        }
        .contact-info {
            font-size: 0.88rem;
            color: #475569;
            margin-bottom: 20px;
            padding: 12px;
            background: #f8fafc;
            border-radius: 8px;
        }
        .contact-info a {
            color: #881337;
            text-decoration: none;
            font-weight: 700;
        }
        .footer-note {
            font-size: 0.82rem;
            color: #94a3b8;
            border-top: 1px solid #f1f5f9;
            padding-top: 16px;
        }
    </style>
</head>
<body>
    <div class="geo-card">
        <div class="geo-icon">🚫</div>
        <div class="badge-country">Geographical Access Restriction</div>
        <h1>Access Restricted</h1>
        <p>Access to <strong>The Discovery International School</strong> website is strictly restricted to visitors connecting from within <strong>India (IN)</strong>.<br>Connections from other regions are currently denied.</p>
        
        <div class="contact-info">
            For admissions and inquiries from outside India, please contact us via email at: 
            <a href="mailto:thediscoveryinternational@gmail.com">thediscoveryinternational@gmail.com</a>
        </div>

        <div class="footer-note">
            The Discovery International School &bull; Prithla, Palwal, Haryana
        </div>
    </div>
</body>
</html>
        <?php
        exit;
    }
}
