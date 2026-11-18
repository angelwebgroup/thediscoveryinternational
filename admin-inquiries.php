<?php
/**
 * Inquiries & Registrations Dashboard Viewer
 * The Discovery International School (Prithla, Palwal)
 * Securely protected by session-based administrator passcode.
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ . '/config.php';

$adminPassword = $school['admin_inquiries_password'] ?? 'Discovery@2026';

// 1. Handle Logout
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    $_SESSION['admin_auth'] = false;
    unset($_SESSION['admin_auth']);
    header('Location: admin-inquiries.php');
    exit;
}

// 2. Handle Login Submission
$loginError = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login_passcode'])) {
    $entered = trim((string)$_POST['login_passcode']);
    if ($entered !== '' && hash_equals($adminPassword, $entered)) {
        $_SESSION['admin_auth'] = true;
        header('Location: admin-inquiries.php');
        exit;
    } else {
        $loginError = 'Invalid administrator passcode. Please try again.';
    }
}

$isAuthenticated = !empty($_SESSION['admin_auth']);

// 3. If Not Logged In, Render Password Gate Screen
if (!$isAuthenticated) {
    // Block CSV Export if not logged in
    if (isset($_GET['export'])) {
        http_response_code(403);
        exit('Access Denied: Please log in first.');
    }

    include 'header.php';
    ?>
    <main id="content" class="site-main" style="background: #f1f5f9; min-height: 70vh; display: flex; align-items: center; justify-content: center; padding: 60px 15px;">
        <div style="width: 100%; max-width: 440px; background: #ffffff; border-radius: var(--radius-lg); box-shadow: var(--shadow-xl); border: 1px solid var(--slate-200); overflow: hidden;">
            
            <div style="background: var(--navy-950); color: #ffffff; padding: 26px 24px; text-align: center; border-bottom: 3px solid var(--accent);">
                <div style="width: 52px; height: 52px; border-radius: 50%; background: rgba(245, 158, 11, 0.15); color: var(--gold-400); display: inline-flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 10px;">
                    <i class="fas fa-shield-halved"></i>
                </div>
                <h2 style="font-size: 1.35rem; margin: 0 0 4px; color: #ffffff;">Admin Access Required</h2>
                <p style="margin: 0; font-size: 0.84rem; color: #cbd5e1;">Inquiry &amp; Registration Portal</p>
            </div>

            <div style="padding: 28px 24px;">
                <?php if (!empty($loginError)): ?>
                    <div style="background: #fef2f2; border: 1px solid #ef4444; color: #991b1b; padding: 10px 14px; border-radius: var(--radius-md); margin-bottom: 18px; font-size: 0.88rem; font-weight: 600;">
                        <i class="fas fa-triangle-exclamation" style="margin-right: 4px;"></i> <?php echo htmlspecialchars($loginError); ?>
                    </div>
                <?php endif; ?>

                <p style="font-size: 0.9rem; color: var(--slate-600); margin-top: 0; margin-bottom: 18px; line-height: 1.5;">
                    This section contains private student and parent admission inquiries. Please enter the administrator passcode to proceed.
                </p>

                <form method="POST" action="admin-inquiries.php">
                    <div style="margin-bottom: 20px;">
                        <label for="login_passcode" style="display: block; font-weight: 700; font-size: 0.88rem; color: var(--navy-950); margin-bottom: 6px;">
                            Administrator Passcode:
                        </label>
                        <div style="position: relative;">
                            <input type="password" id="login_passcode" name="login_passcode" required autofocus placeholder="Enter passcode"
                                   style="width: 100%; padding: 12px 14px; border: 1px solid var(--slate-300); border-radius: var(--radius-md); font-size: 0.95rem; outline: none; box-sizing: border-box;">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-hero-primary" style="width: 100%; padding: 12px; font-size: 0.95rem; border-radius: var(--radius-md);">
                        <i class="fas fa-lock-open" style="margin-right: 6px;"></i> Unlock Dashboard
                    </button>
                </form>

                <div style="margin-top: 20px; padding-top: 16px; border-top: 1px solid var(--slate-200); text-align: center;">
                    <a href="index.php" style="color: var(--slate-500); font-size: 0.82rem; text-decoration: none;">
                        <i class="fas fa-arrow-left"></i> Return to Homepage
                    </a>
                </div>
            </div>

        </div>
    </main>
    <?php
    include 'footer.php';
    exit;
}

// 4. Authenticated: Load Inquiries from data/inquiries.json
$jsonFile = __DIR__ . '/data/inquiries.json';
$inquiries = [];
if (file_exists($jsonFile)) {
    $content = @file_get_contents($jsonFile);
    if (!empty($content)) {
        $inquiries = json_decode($content, true) ?: [];
    }
}

// Handle CSV Export
if (isset($_GET['export']) && $_GET['export'] === 'csv') {
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=inquiries_' . date('Y-m-d_His') . '.csv');
    $output = fopen('php://output', 'w');
    
    // CSV Header
    fputcsv($output, ['Inquiry ID', 'Date & Time', 'Form Type', 'Name', 'Phone / WhatsApp', 'Email', 'Class', 'Father Name', 'Aadhaar', 'Address', 'Message', 'Recipients']);
    
    foreach ($inquiries as $inq) {
        $d = $inq['data'] ?? [];
        $name = $d['student_full_name'] ?? $d['name'] ?? 'N/A';
        $phone = $d['contact_number'] ?? $d['phone'] ?? $d['whatsapp'] ?? 'N/A';
        $email = $d['email'] ?? 'N/A';
        $class = $d['class_applied'] ?? $d['class_interest'] ?? 'N/A';
        $father = $d['father_name'] ?? 'N/A';
        $aadhar = $d['aadhar_number'] ?? 'N/A';
        $address = isset($d['address']) ? trim("{$d['address']}, " . ($d['city'] ?? '') . ", " . ($d['state'] ?? '')) : 'N/A';
        $msg = $d['message'] ?? '';
        $recipients = implode(', ', $inq['delivery']['target_recipients'] ?? []);
        
        fputcsv($output, [
            $inq['id'] ?? 'N/A',
            $inq['timestamp'] ?? 'N/A',
            $inq['form_title'] ?? $inq['form_type'] ?? 'N/A',
            $name,
            $phone,
            $email,
            $class,
            $father,
            $aadhar,
            $address,
            $msg,
            $recipients
        ]);
    }
    fclose($output);
    exit;
}

// Filter counts
$totalCount = count($inquiries);
$admissionCount = count(array_filter($inquiries, fn($i) => ($i['form_type'] ?? '') === 'admission'));
$contactCount = count(array_filter($inquiries, fn($i) => ($i['form_type'] ?? '') === 'contact'));

$currentFilter = $_GET['type'] ?? 'all';
$filteredInquiries = $inquiries;
if ($currentFilter === 'admission') {
    $filteredInquiries = array_filter($inquiries, fn($i) => ($i['form_type'] ?? '') === 'admission');
} elseif ($currentFilter === 'contact') {
    $filteredInquiries = array_filter($inquiries, fn($i) => ($i['form_type'] ?? '') === 'contact');
}

require_once __DIR__ . '/mailer_helper.php';

// Handle Diagnostic Test Email Dispatch
$testMailResult = null;
if ($isAuthenticated && $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'send_test_email') {
    $raw_emails = $school['admin_emails'] ?? ['thediscoveryinternational@gmail.com'];
    if (!is_array($raw_emails)) $raw_emails = [$raw_emails];
    $recipients = array_values(array_filter(array_map('trim', $raw_emails), fn($e) => !empty($e) && filter_var($e, FILTER_VALIDATE_EMAIL)));
    
    $testId = 'TEST-' . date('Ymd-His');
    $testSubject = "Diagnostic Test Email: The Discovery International School [{$testId}]";
    $testBody  = "=======================================================\n";
    $testBody .= "DIAGNOSTIC TEST NOTIFICATION EMAIL\n";
    $testBody .= "The Discovery International School, Prithla, Palwal\n";
    $testBody .= "=======================================================\n\n";
    $testBody .= "Test ID:        {$testId}\n";
    $testBody .= "Server Host:    " . ($_SERVER['SERVER_NAME'] ?? 'thediscoveryinternational.com') . "\n";
    $testBody .= "Date/Time:      " . date('d-M-Y H:i:s T') . "\n";
    $testBody .= "SMTP Mode:      " . (!empty($school['smtp']['enabled']) ? 'YES (' . ($school['smtp']['host'] ?? '') . ':' . ($school['smtp']['port'] ?? 587) . ')' : 'NO (PHP mail() fallback)') . "\n\n";
    $testBody .= "If this email is visible in your inbox, your email notification configuration is active!\n";
    $testBody .= "=======================================================\n";

    $testMailResult = dispatch_notification_email($recipients, $testSubject, $testBody, $school['email'], $school, $testId);
}

include 'header.php';
?>

<main id="content" class="site-main" style="background: #f8fafc; padding: 40px 0 60px;">
    <div class="container">
        
        <!-- Header Banner with Logout -->
        <div style="background: var(--navy-950); color: #ffffff; border-radius: var(--radius-lg); padding: 26px 30px; margin-bottom: 28px; box-shadow: var(--shadow-md); border-top: 4px solid var(--accent); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;">
            <div>
                <span class="hero-badge-tag" style="background: rgba(245, 158, 11, 0.2); color: var(--gold-400); border: 1px solid var(--gold-400); margin-bottom: 8px;">
                    <i class="fas fa-lock"></i> Protected Admin Session
                </span>
                <h1 style="font-size: 1.85rem; margin: 4px 0 6px; color: #ffffff;">Inquiry &amp; Registration Records</h1>
                <p style="color: #cbd5e1; font-size: 0.92rem; margin: 0;">
                    Permanent JSON log file: <code style="background: rgba(255,255,255,0.1); color: var(--gold-300); padding: 2px 8px; border-radius: 4px; font-size: 0.86rem;">data/inquiries.json</code>
                </p>
            </div>
            
            <div style="display: flex; gap: 10px; align-items: center; flex-wrap: wrap;">
                <a href="admin-inquiries.php?export=csv" class="btn btn-hero-primary" style="padding: 9px 18px; font-size: 0.88rem;">
                    <i class="fas fa-file-csv"></i> Download CSV
                </a>
                <a href="admin-inquiries.php?action=logout" class="btn btn-hero-outline" style="padding: 9px 18px; font-size: 0.88rem; background: rgba(239, 68, 68, 0.15); border-color: #ef4444; color: #fca5a5;">
                    <i class="fas fa-right-from-bracket"></i> Log Out
                </a>
            </div>
        </div>

        <!-- Diagnostic Test Email Result Alert -->
        <?php if ($testMailResult !== null): ?>
            <?php 
            $hasSuccess = !empty($testMailResult['sent']);
            $hasFailure = !empty($testMailResult['failed']);
            $alertBg = $hasSuccess && !$hasFailure ? '#f0fdf4' : ($hasSuccess ? '#fffbeb' : '#fef2f2');
            $alertBorder = $hasSuccess && !$hasFailure ? '#86efac' : ($hasSuccess ? '#fde68a' : '#fca5a5');
            $alertText = $hasSuccess && !$hasFailure ? '#166534' : ($hasSuccess ? '#92400e' : '#991b1b');
            ?>
            <div style="background: <?php echo $alertBg; ?>; border: 1px solid <?php echo $alertBorder; ?>; color: <?php echo $alertText; ?>; border-radius: var(--radius-lg); padding: 18px 22px; margin-bottom: 24px; box-shadow: var(--shadow-sm);">
                <div style="display: flex; align-items: flex-start; gap: 12px;">
                    <i class="fas <?php echo $hasSuccess && !$hasFailure ? 'fa-circle-check' : 'fa-triangle-exclamation'; ?>" style="font-size: 1.3rem; margin-top: 2px;"></i>
                    <div style="flex: 1;">
                        <strong style="font-size: 0.98rem; display: block; margin-bottom: 4px;">
                            <?php 
                            if ($hasSuccess && !$hasFailure) {
                                echo "Diagnostic Test Email Dispatched Successfully!";
                            } elseif ($hasSuccess) {
                                echo "Partial Success: Sent to some recipients, but others failed.";
                            } else {
                                echo "Test Email Dispatch Failed!";
                            }
                            ?>
                        </strong>
                        <div style="font-size: 0.86rem; line-height: 1.5;">
                            <?php if (!empty($testMailResult['sent'])): ?>
                                <div><i class="fas fa-check" style="color: #16a34a;"></i> <strong>Delivered to:</strong> <?php echo htmlspecialchars(implode(', ', $testMailResult['sent'])); ?></div>
                            <?php endif; ?>
                            <?php if (!empty($testMailResult['failed'])): ?>
                                <div style="margin-top: 4px;"><i class="fas fa-xmark" style="color: #dc2626;"></i> <strong>Failed for:</strong> <?php echo htmlspecialchars(implode(', ', $testMailResult['failed'])); ?></div>
                            <?php endif; ?>
                            <?php if (!empty($testMailResult['logs'])): ?>
                                <div style="margin-top: 8px; font-family: monospace; font-size: 0.8rem; background: rgba(0,0,0,0.04); padding: 8px 12px; border-radius: 4px;">
                                    <?php foreach ($testMailResult['logs'] as $em => $l): ?>
                                        <div><strong><?php echo htmlspecialchars($em); ?>:</strong> <?php echo htmlspecialchars($l); ?></div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <!-- Notification Recipients & Mail Diagnostic Card -->
        <div style="background: #ffffff; border: 1px solid var(--slate-200); border-radius: var(--radius-lg); padding: 18px 24px; margin-bottom: 24px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 16px;">
            <div style="display: flex; align-items: center; gap: 14px; flex: 1; min-width: 280px;">
                <div style="width: 44px; height: 44px; border-radius: 50%; background: var(--navy-50); color: var(--navy-900); display: flex; align-items: center; justify-content: center; font-size: 1.15rem; flex-shrink: 0;">
                    <i class="fas fa-envelope-open-text"></i>
                </div>
                <div>
                    <strong style="color: var(--navy-950); font-size: 0.95rem; display: block;">Active Notification Email Recipients:</strong>
                    <div style="display: flex; gap: 8px; flex-wrap: wrap; margin-top: 4px; align-items: center;">
                        <?php 
                        $adminEmails = $school['admin_emails'] ?? ['thediscoveryinternational@gmail.com'];
                        foreach ($adminEmails as $idx => $adminEm): 
                        ?>
                            <span style="background: #eff6ff; color: #1e40af; border: 1px solid #bfdbfe; font-size: 0.8rem; font-weight: 700; padding: 2px 10px; border-radius: var(--radius-full); display: inline-flex; align-items: center; gap: 5px;">
                                <i class="fas fa-check-circle" style="color: #3b82f6; font-size: 0.75rem;"></i> <?php echo htmlspecialchars($adminEm); ?>
                            </span>
                        <?php endforeach; ?>

                        <?php if (!empty($school['smtp']['enabled'])): ?>
                            <span style="background: #ecfdf5; color: #065f46; border: 1px solid #a7f3d0; font-size: 0.74rem; font-weight: 700; padding: 2px 8px; border-radius: 4px;">
                                <i class="fas fa-shield-halved"></i> SMTP Enabled (<?php echo htmlspecialchars($school['smtp']['host'] ?? ''); ?>)
                            </span>
                        <?php else: ?>
                            <span style="background: #fef3c7; color: #92400e; border: 1px solid #fde68a; font-size: 0.74rem; font-weight: 700; padding: 2px 8px; border-radius: 4px;">
                                <i class="fas fa-paper-plane"></i> PHP mail() Mode (SMTP disabled)
                            </span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Send Test Email Button -->
            <form method="POST" action="admin-inquiries.php" style="margin: 0;">
                <input type="hidden" name="action" value="send_test_email">
                <button type="submit" class="btn btn-hero-primary" style="padding: 9px 18px; font-size: 0.85rem; border-radius: var(--radius-md); display: inline-flex; align-items: center; gap: 6px;">
                    <i class="fas fa-paper-plane"></i> Send Test Email Now
                </button>
            </form>
        </div>

        <!-- Metric Cards -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 18px; margin-bottom: 28px;">
            <a href="admin-inquiries.php?type=all" style="text-decoration: none;">
                <div style="background: #ffffff; border: 2px solid <?php echo $currentFilter === 'all' ? 'var(--navy-900)' : 'var(--slate-200)'; ?>; border-radius: var(--radius-lg); padding: 18px 22px; transition: var(--transition-fast);">
                    <span style="font-size: 0.82rem; color: var(--slate-500); font-weight: 700; text-transform: uppercase;">Total Inquiries</span>
                    <h3 style="font-size: 2rem; color: var(--navy-950); margin: 6px 0 0;"><?php echo $totalCount; ?></h3>
                </div>
            </a>
            
            <a href="admin-inquiries.php?type=admission" style="text-decoration: none;">
                <div style="background: #ffffff; border: 2px solid <?php echo $currentFilter === 'admission' ? 'var(--secondary)' : 'var(--slate-200)'; ?>; border-radius: var(--radius-lg); padding: 18px 22px; transition: var(--transition-fast);">
                    <span style="font-size: 0.82rem; color: var(--crimson-700); font-weight: 700; text-transform: uppercase;">Admissions Registrations</span>
                    <h3 style="font-size: 2rem; color: var(--secondary); margin: 6px 0 0;"><?php echo $admissionCount; ?></h3>
                </div>
            </a>
            
            <a href="admin-inquiries.php?type=contact" style="text-decoration: none;">
                <div style="background: #ffffff; border: 2px solid <?php echo $currentFilter === 'contact' ? 'var(--gold-600)' : 'var(--slate-200)'; ?>; border-radius: var(--radius-lg); padding: 18px 22px; transition: var(--transition-fast);">
                    <span style="font-size: 0.82rem; color: var(--gold-700); font-weight: 700; text-transform: uppercase;">General Contact Inquiries</span>
                    <h3 style="font-size: 2rem; color: var(--navy-950); margin: 6px 0 0;"><?php echo $contactCount; ?></h3>
                </div>
            </a>
        </div>

        <!-- Inquiries Table Card -->
        <div style="background: #ffffff; border: 1px solid var(--slate-200); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); overflow: hidden;">
            <div style="padding: 16px 24px; border-bottom: 1px solid var(--slate-200); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 10px;">
                <h3 style="margin: 0; font-size: 1.2rem; color: var(--navy-950);">
                    <?php 
                    if ($currentFilter === 'admission') echo 'Online Admission Registrations';
                    elseif ($currentFilter === 'contact') echo 'General Contact Us Inquiries';
                    else echo 'All Inquiries &amp; Registrations';
                    ?>
                    <span style="font-size: 0.88rem; color: var(--slate-500); font-weight: 500;">(<?php echo count($filteredInquiries); ?> entries)</span>
                </h3>

                <div style="display: flex; gap: 8px;">
                    <a href="admin-inquiries.php?type=all" class="btn" style="padding: 5px 12px; font-size: 0.78rem; border-radius: 4px; background: <?php echo $currentFilter === 'all' ? 'var(--navy-900)' : '#f1f5f9'; ?>; color: <?php echo $currentFilter === 'all' ? '#fff' : 'var(--slate-700)'; ?>;">All</a>
                    <a href="admin-inquiries.php?type=admission" class="btn" style="padding: 5px 12px; font-size: 0.78rem; border-radius: 4px; background: <?php echo $currentFilter === 'admission' ? 'var(--secondary)' : '#f1f5f9'; ?>; color: <?php echo $currentFilter === 'admission' ? '#fff' : 'var(--slate-700)'; ?>;">Admissions</a>
                    <a href="admin-inquiries.php?type=contact" class="btn" style="padding: 5px 12px; font-size: 0.78rem; border-radius: 4px; background: <?php echo $currentFilter === 'contact' ? 'var(--gold-600)' : '#f1f5f9'; ?>; color: <?php echo $currentFilter === 'contact' ? '#fff' : 'var(--slate-700)'; ?>;">Contact</a>
                </div>
            </div>

            <?php if (empty($filteredInquiries)): ?>
                <div style="padding: 50px 20px; text-align: center; color: var(--slate-500);">
                    <i class="fas fa-inbox" style="font-size: 2.5rem; color: var(--slate-300); margin-bottom: 12px;"></i>
                    <p style="font-size: 1rem; margin: 0;">No inquiries found matching this filter.</p>
                </div>
            <?php else: ?>
                <div style="overflow-x: auto;">
                    <table style="width: 100%; border-collapse: collapse; font-size: 0.88rem; text-align: left;">
                        <thead>
                            <tr style="background: var(--navy-900); color: #ffffff;">
                                <th style="padding: 12px 16px;">Ref ID &amp; Date</th>
                                <th style="padding: 12px 16px;">Type</th>
                                <th style="padding: 12px 16px;">Name &amp; Father</th>
                                <th style="padding: 12px 16px;">Contact Phone</th>
                                <th style="padding: 12px 16px;">Class</th>
                                <th style="padding: 12px 16px;">Email</th>
                                <th style="padding: 12px 16px;">Delivery</th>
                                <th style="padding: 12px 16px; width: 22%;">Message / Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($filteredInquiries as $idx => $item): 
                                $d = $item['data'] ?? [];
                                $isAdmission = ($item['form_type'] ?? '') === 'admission';
                                $name = $d['student_full_name'] ?? $d['name'] ?? 'N/A';
                                $phone = $d['contact_number'] ?? $d['phone'] ?? $d['whatsapp'] ?? 'N/A';
                                $class = $d['class_applied'] ?? $d['class_interest'] ?? 'N/A';
                                $father = $d['father_name'] ?? '';
                                $email = $d['email'] ?? '';
                                $address = isset($d['address']) ? trim("{$d['address']}, " . ($d['city'] ?? '') . ", " . ($d['state'] ?? '')) : '';
                                $msg = $d['message'] ?? '';
                                $bgColor = ($idx % 2 === 0) ? '#ffffff' : '#f8fafc';
                            ?>
                                <tr style="background: <?php echo $bgColor; ?>; border-bottom: 1px solid var(--slate-200);">
                                    <td style="padding: 14px 16px; vertical-align: top;">
                                        <strong style="color: var(--navy-950); font-family: monospace; font-size: 0.9rem; display: block;"><?php echo htmlspecialchars($item['id'] ?? 'N/A'); ?></strong>
                                        <span style="font-size: 0.78rem; color: var(--slate-500);"><?php echo htmlspecialchars($item['timestamp'] ?? ''); ?></span>
                                    </td>
                                    
                                    <td style="padding: 14px 16px; vertical-align: top;">
                                        <?php if ($isAdmission): ?>
                                            <span style="background: #fdf2f8; color: #9d174d; border: 1px solid #fbcfe8; font-size: 0.74rem; font-weight: 800; padding: 2px 8px; border-radius: 4px; display: inline-block;">
                                                <i class="fas fa-graduation-cap"></i> Admission
                                            </span>
                                        <?php else: ?>
                                            <span style="background: #f0fdf4; color: #166534; border: 1px solid #bbf7d0; font-size: 0.74rem; font-weight: 800; padding: 2px 8px; border-radius: 4px; display: inline-block;">
                                                <i class="fas fa-comment-dots"></i> Contact
                                            </span>
                                        <?php endif; ?>
                                    </td>

                                    <td style="padding: 14px 16px; vertical-align: top;">
                                        <strong style="color: var(--navy-900); font-size: 0.92rem; display: block;"><?php echo htmlspecialchars($name); ?></strong>
                                        <?php if (!empty($father)): ?>
                                            <span style="font-size: 0.78rem; color: var(--slate-600);">Father: <?php echo htmlspecialchars($father); ?></span>
                                        <?php endif; ?>
                                        <?php if (!empty($d['aadhar_number'])): ?>
                                            <div style="font-size: 0.75rem; color: var(--slate-500);">Aadhaar: <?php echo htmlspecialchars($d['aadhar_number']); ?></div>
                                        <?php endif; ?>
                                    </td>

                                    <td style="padding: 14px 16px; vertical-align: top;">
                                        <a href="tel:<?php echo htmlspecialchars($phone); ?>" style="color: var(--navy-900); font-weight: 700; text-decoration: none;">
                                            <i class="fas fa-phone" style="font-size: 0.75rem; color: var(--gold-600);"></i> <?php echo htmlspecialchars($phone); ?>
                                        </a>
                                        <?php if (!empty($d['whatsapp']) && $d['whatsapp'] !== $phone): ?>
                                            <div style="font-size: 0.78rem; color: var(--whatsapp); margin-top: 2px;">
                                                <i class="fab fa-whatsapp"></i> <?php echo htmlspecialchars($d['whatsapp']); ?>
                                            </div>
                                        <?php endif; ?>
                                    </td>

                                    <td style="padding: 14px 16px; vertical-align: top;">
                                        <span style="background: #fef3c7; color: #92400e; font-weight: 700; padding: 2px 8px; border-radius: 4px; font-size: 0.8rem; border: 1px solid #fde68a;">
                                            <?php echo htmlspecialchars($class); ?>
                                        </span>
                                    </td>

                                    <td style="padding: 14px 16px; vertical-align: top;">
                                        <?php if (!empty($email)): ?>
                                            <a href="mailto:<?php echo htmlspecialchars($email); ?>" style="color: var(--navy-900); text-decoration: underline; font-size: 0.85rem;">
                                                <?php echo htmlspecialchars($email); ?>
                                            </a>
                                        <?php else: ?>
                                            <span style="color: var(--slate-400); font-style: italic;">Not provided</span>
                                        <?php endif; ?>
                                    </td>

                                    <td style="padding: 14px 16px; vertical-align: top;">
                                        <?php
                                        $del = $item['delivery'] ?? [];
                                        $sentList = $del['sent_to'] ?? [];
                                        if (!empty($sentList)):
                                        ?>
                                            <span style="background: #ecfdf5; color: #065f46; border: 1px solid #a7f3d0; font-size: 0.72rem; font-weight: 700; padding: 2px 7px; border-radius: 4px; display: inline-flex; align-items: center; gap: 4px;" title="<?php echo htmlspecialchars(implode(' | ', $del['logs'] ?? [])); ?>">
                                                <i class="fas fa-circle-check" style="color: #10b981;"></i> Sent
                                            </span>
                                        <?php else: ?>
                                            <span style="background: #fef3c7; color: #92400e; border: 1px solid #fde68a; font-size: 0.72rem; font-weight: 700; padding: 2px 7px; border-radius: 4px; display: inline-flex; align-items: center; gap: 4px;" title="Stored safely in data/inquiries.json">
                                                <i class="fas fa-database" style="color: #f59e0b;"></i> Logged
                                            </span>
                                        <?php endif; ?>
                                    </td>

                                    <td style="padding: 14px 16px; vertical-align: top;">
                                        <?php if (!empty($msg)): ?>
                                            <div style="color: var(--slate-700); line-height: 1.45; margin-bottom: 6px;"><?php echo nl2br(htmlspecialchars($msg)); ?></div>
                                        <?php endif; ?>
                                        <?php if (!empty($address)): ?>
                                            <div style="font-size: 0.78rem; color: var(--slate-500);">
                                                <i class="fas fa-location-dot" style="color: var(--crimson-700);"></i> <?php echo htmlspecialchars($address); ?>
                                            </div>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </div>

    </div>
</main>

<?php include 'footer.php'; ?>
