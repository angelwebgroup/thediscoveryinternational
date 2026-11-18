<?php 
require_once __DIR__ . '/config.php';
include 'header.php'; 
?>

<main id="content" class="site-main">

    <!-- Page Header -->
    <div class="page-header">
        <div class="container page-header-content">
            <h1>Fee Payment Details</h1>
            <ul class="breadcrumbs">
                <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                <li><span class="separator"><i class="fas fa-chevron-right"></i></span></li>
                <li><a href="admission-process.php">Admission</a></li>
                <li><span class="separator"><i class="fas fa-chevron-right"></i></span></li>
                <li><span>Fee Payment Details</span></li>
            </ul>
        </div>
    </div>

    <!-- Page Content Container -->
    <div class="container page-container">
        <div class="content-box">
            
            <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px; margin-bottom: 2rem;">
                <div>
                    <span class="section-tag section-tag-gold"><i class="fas fa-building-columns"></i> Official Remittance</span>
                    <h2 style="font-size: 2.1rem; color: var(--navy-950); margin-bottom: 4px;">School Fee Payment Options</h2>
                    <p style="color: var(--slate-600); margin: 0;">Authorized modes of fee remittance for <?php echo htmlspecialchars($school['name']); ?>.</p>
                </div>
                <div>
                    <a href="fee-structure.php" class="btn btn-primary"><i class="fas fa-file-invoice"></i> Fee Schedule</a>
                </div>
            </div>

            <!-- Important Notice Callout -->
            <div class="callout callout-gold" style="margin-bottom: 30px;">
                <p style="margin: 0; font-size: 0.96rem; color: var(--navy-950);">
                    <strong>Important Notice:</strong> Parents may deposit school fees either at the school accounts counter on campus or electronically via Net Banking / UPI / NEFT. Please retain your transaction slip or reference number for official receipt issuance.
                </p>
            </div>

            <!-- Payment Options Grid -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 24px; margin-bottom: 35px;">
                
                <!-- Option 1: School Accounts Counter -->
                <div style="background: var(--slate-50); border: 1px solid var(--slate-200); border-radius: var(--radius-lg); padding: 26px; border-top: 4px solid var(--navy-900);">
                    <div style="width: 48px; height: 48px; border-radius: 50%; background: var(--navy-50); color: var(--navy-800); display: flex; align-items: center; justify-content: center; font-size: 1.3rem; margin-bottom: 14px;">
                        <i class="fas fa-school"></i>
                    </div>
                    <h3 style="font-size: 1.25rem; color: var(--navy-950); margin-bottom: 8px;">Campus Fee Counter</h3>
                    <p style="font-size: 0.92rem; color: var(--slate-700); line-height: 1.65; margin-bottom: 14px;">
                        Visit the school administrative office during operational visiting hours to deposit cash, cheque, or POS card payments directly.
                    </p>
                    <ul class="clean-bullet-list" style="margin: 0;">
                        <li><strong>Timings:</strong> Monday to Saturday (8:00 AM – 2:30 PM)</li>
                        <li><strong>Instant Receipt:</strong> Official printed school fee receipt</li>
                    </ul>
                </div>

                <!-- Option 2: Digital Remittance & Direct Bank Transfer -->
                <div style="background: var(--slate-50); border: 1px solid var(--slate-200); border-radius: var(--radius-lg); padding: 26px; border-top: 4px solid var(--crimson-700);">
                    <div style="width: 48px; height: 48px; border-radius: 50%; background: var(--crimson-50); color: var(--crimson-700); display: flex; align-items: center; justify-content: center; font-size: 1.3rem; margin-bottom: 14px;">
                        <i class="fas fa-money-bill-transfer"></i>
                    </div>
                    <h3 style="font-size: 1.25rem; color: var(--navy-950); margin-bottom: 8px;">Online &amp; Bank Remittance</h3>
                    <p style="font-size: 0.92rem; color: var(--slate-700); line-height: 1.65; margin-bottom: 14px;">
                        To request the official school bank account details or UPI QR code for fee payment, please connect with the accounts department:
                    </p>
                    <ul class="clean-bullet-list" style="margin: 0;">
                        <li><strong>Account Name:</strong> The Discovery International School</li>
                        <li><strong>Helpline:</strong> <a href="tel:<?php echo htmlspecialchars($school['phone1']); ?>" style="color: var(--navy-900); font-weight: 700;"><?php echo htmlspecialchars($school['phone1']); ?></a></li>
                        <li><strong>Email:</strong> <a href="mailto:<?php echo htmlspecialchars($school['email']); ?>" style="color: var(--navy-900); font-weight: 700;"><?php echo htmlspecialchars($school['email']); ?></a></li>
                    </ul>
                </div>

            </div>

            <!-- After Payment Instructions -->
            <div style="background: #ffffff; border: 1px solid var(--slate-200); border-radius: var(--radius-lg); padding: 28px; box-shadow: var(--shadow-sm);">
                <h3 style="font-size: 1.25rem; color: var(--navy-950); margin-bottom: 14px; display: flex; align-items: center; gap: 8px;">
                    <i class="fas fa-clipboard-check" style="color: var(--accent);"></i> Post-Payment Verification Steps
                </h3>
                <ol style="padding-left: 20px; line-height: 1.8; color: var(--slate-700); font-size: 0.95rem;">
                    <li>Complete payment and capture a clear screenshot of the transaction reference / UTR ID.</li>
                    <li>Forward the payment proof along with <strong>Student Name, Class, Admission No, and Father's Name</strong> via WhatsApp to <a href="<?php echo htmlspecialchars($school['whatsapp']); ?>" target="_blank" style="color: #16a34a; font-weight: 700;"><?php echo htmlspecialchars($school['phone1']); ?></a> or by email to <a href="mailto:<?php echo htmlspecialchars($school['email']); ?>" style="color: var(--navy-900); font-weight: 700;"><?php echo htmlspecialchars($school['email']); ?></a>.</li>
                    <li>The accounts office will verify the remittance and share your official receipt within 24 working hours.</li>
                </ol>
            </div>

        </div>
    </div>

</main>

<?php include 'footer.php'; ?>
