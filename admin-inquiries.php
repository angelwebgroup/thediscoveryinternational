<?php
/**
 * Inquiries & Registrations Dashboard Viewer
 * The Discovery International School (Prithla, Palwal)
 * Displays all inquiries logged in data/inquiries.json
 */

require_once __DIR__ . '/config.php';

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

include 'header.php';
?>

<main id="content" class="site-main" style="background: #f8fafc; padding: 40px 0 60px;">
    <div class="container">
        
        <!-- Header Banner -->
        <div style="background: var(--navy-950); color: #ffffff; border-radius: var(--radius-lg); padding: 26px 30px; margin-bottom: 28px; box-shadow: var(--shadow-md); border-top: 4px solid var(--accent); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;">
            <div>
                <span class="hero-badge-tag" style="background: rgba(245, 158, 11, 0.2); color: var(--gold-400); border: 1px solid var(--gold-400); margin-bottom: 8px;">
                    <i class="fas fa-database"></i> JSON Inquiry Log Viewer
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
                <a href="data/inquiries.json" target="_blank" class="btn btn-hero-outline" style="padding: 9px 18px; font-size: 0.88rem; background: rgba(255,255,255,0.08);">
                    <i class="fas fa-code"></i> View Raw JSON
                </a>
            </div>
        </div>

        <!-- Notification Recipients Card -->
        <div style="background: #ffffff; border: 1px solid var(--slate-200); border-radius: var(--radius-lg); padding: 18px 24px; margin-bottom: 24px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 14px;">
            <div style="display: flex; align-items: center; gap: 12px;">
                <div style="width: 44px; height: 44px; border-radius: 50%; background: var(--navy-50); color: var(--navy-900); display: flex; align-items: center; justify-content: center; font-size: 1.15rem;">
                    <i class="fas fa-envelope-open-text"></i>
                </div>
                <div>
                    <strong style="color: var(--navy-950); font-size: 0.95rem; display: block;">Active Notification Email Recipients (admin_emails in config.php):</strong>
                    <div style="display: flex; gap: 8px; flex-wrap: wrap; margin-top: 4px;">
                        <?php 
                        $adminEmails = $school['admin_emails'] ?? ['thediscoveryinternational@gmail.com'];
                        foreach ($adminEmails as $idx => $adminEm): 
                        ?>
                            <span style="background: #eff6ff; color: #1e40af; border: 1px solid #bfdbfe; font-size: 0.8rem; font-weight: 700; padding: 2px 10px; border-radius: var(--radius-full); display: inline-flex; align-items: center; gap: 5px;">
                                <i class="fas fa-check-circle" style="color: #3b82f6; font-size: 0.75rem;"></i> <?php echo htmlspecialchars($adminEm); ?>
                            </span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <span style="font-size: 0.82rem; color: var(--slate-500); font-style: italic;">
                Configure in <code>config.php</code> &rarr; <code>$school['admin_emails']</code>
            </span>
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
                                <th style="padding: 12px 16px; width: 25%;">Message / Details</th>
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

