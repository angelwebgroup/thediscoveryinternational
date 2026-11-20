<?php 
if (session_status() === PHP_SESSION_NONE && !headers_sent()) {
    @session_start();
}
require_once __DIR__ . '/config.php';
include 'header.php'; 
?>

<main id="content" class="site-main">

    <!-- Standardized SEO-Optimized Page Header Banner -->
    <?php render_page_banner(); ?>

    <!-- Page Content Container -->
    <div class="container page-container">
        <div class="content-box">
            
            <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 40px; align-items: start;">
                
                <!-- Left: Modern Admission Registration Form -->
                <div>
                    <span class="section-tag section-tag-crimson"><i class="fas fa-user-graduate"></i> Academic Session <?php echo htmlspecialchars($school['session']); ?></span>
                    <h2 style="font-size: 2.1rem; color: var(--navy-950); margin-bottom: 8px;">Student Admission Registration Form</h2>
                    <p style="color: var(--slate-600); margin-bottom: 24px;">Please complete the official registration form below. Our admissions office will verify details and reach out with your registration reference number.</p>

                    <!-- Alert Notifications -->
                    <?php if (isset($_SESSION['form_success'])): ?>
                        <div style="background: #ecfdf5; border: 1px solid #10b981; color: #065f46; padding: 14px 18px; border-radius: var(--radius-md); margin-bottom: 24px; font-weight: 600;">
                            <i class="fas fa-circle-check" style="margin-right: 6px;"></i> <?php echo htmlspecialchars($_SESSION['form_success']); unset($_SESSION['form_success']); ?>
                        </div>
                    <?php endif; ?>

                    <?php if (isset($_SESSION['form_error'])): ?>
                        <div style="background: #fef2f2; border: 1px solid #ef4444; color: #991b1b; padding: 14px 18px; border-radius: var(--radius-md); margin-bottom: 24px; font-weight: 600;">
                            <i class="fas fa-circle-exclamation" style="margin-right: 6px;"></i> <?php echo htmlspecialchars($_SESSION['form_error']); unset($_SESSION['form_error']); ?>
                        </div>
                    <?php endif; ?>

                    <form action="send_form_email.php?form=admission" method="POST">
                        <input type="hidden" name="form_type" value="admission">

                        <!-- Student Name -->
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 18px;">
                            <div>
                                <label for="first_name" style="display: block; margin-bottom: 6px; font-weight: 700; font-size: 0.92rem; color: var(--navy-950);">Student First Name *</label>
                                <input type="text" id="first_name" name="first_name" required placeholder="First name" style="width: 100%; padding: 12px 14px; border: 1px solid var(--slate-300); border-radius: var(--radius-md); font-size: 0.95rem; outline: none;">
                            </div>
                            <div>
                                <label for="last_name" style="display: block; margin-bottom: 6px; font-weight: 700; font-size: 0.92rem; color: var(--navy-950);">Student Last Name</label>
                                <input type="text" id="last_name" name="last_name" placeholder="Last name" style="width: 100%; padding: 12px 14px; border: 1px solid var(--slate-300); border-radius: var(--radius-md); font-size: 0.95rem; outline: none;">
                            </div>
                        </div>

                        <!-- Aadhaar & Father Name -->
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 18px;">
                            <div>
                                <label for="aadhar_no" style="display: block; margin-bottom: 6px; font-weight: 700; font-size: 0.92rem; color: var(--navy-950);">Student Aadhaar Number *</label>
                                <input type="text" id="aadhar_no" name="aadhar_no" required placeholder="12-digit Aadhaar No" style="width: 100%; padding: 12px 14px; border: 1px solid var(--slate-300); border-radius: var(--radius-md); font-size: 0.95rem; outline: none;">
                            </div>
                            <div>
                                <label for="father_name" style="display: block; margin-bottom: 6px; font-weight: 700; font-size: 0.92rem; color: var(--navy-950);">Father's / Guardian's Name *</label>
                                <input type="text" id="father_name" name="father_name" required placeholder="Full name of Father" style="width: 100%; padding: 12px 14px; border: 1px solid var(--slate-300); border-radius: var(--radius-md); font-size: 0.95rem; outline: none;">
                            </div>
                        </div>

                        <!-- Class & Previous School -->
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 18px;">
                            <div>
                                <label for="class" style="display: block; margin-bottom: 6px; font-weight: 700; font-size: 0.92rem; color: var(--navy-950);">Class Applying For *</label>
                                <select id="class" name="class" required style="width: 100%; padding: 12px 14px; border: 1px solid var(--slate-300); border-radius: var(--radius-md); font-size: 0.95rem; outline: none; background: #fff;">
                                    <option value="">-- Select Class --</option>
                                    <option value="Nursery">Nursery</option>
                                    <option value="KG">KG</option>
                                    <option value="UKG">UKG</option>
                                    <option value="Class 1">Class 1</option>
                                    <option value="Class 2">Class 2</option>
                                    <option value="Class 3">Class 3</option>
                                    <option value="Class 4">Class 4</option>
                                    <option value="Class 5">Class 5</option>
                                    <option value="Class 6">Class 6</option>
                                    <option value="Class 7">Class 7</option>
                                    <option value="Class 8">Class 8</option>
                                    <option value="Class 9">Class 9</option>
                                    <option value="Class 10">Class 10</option>
                                    <option value="Class 11 (Science)">Class 11 (Science)</option>
                                    <option value="Class 11 (Commerce)">Class 11 (Commerce)</option>
                                    <option value="Class 11 (Humanities/Arts)">Class 11 (Humanities/Arts)</option>
                                    <option value="Class 12 (Science)">Class 12 (Science)</option>
                                    <option value="Class 12 (Commerce)">Class 12 (Commerce)</option>
                                    <option value="Class 12 (Humanities/Arts)">Class 12 (Humanities/Arts)</option>
                                </select>
                            </div>
                            <div>
                                <label for="prev_school" style="display: block; margin-bottom: 6px; font-weight: 700; font-size: 0.92rem; color: var(--navy-950);">Previous School Name</label>
                                <input type="text" id="prev_school" name="prev_school" placeholder="Last attended school" style="width: 100%; padding: 12px 14px; border: 1px solid var(--slate-300); border-radius: var(--radius-md); font-size: 0.95rem; outline: none;">
                            </div>
                        </div>

                        <!-- WhatsApp & Contact Phone -->
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 18px;">
                            <div>
                                <label for="whatsapp" style="display: block; margin-bottom: 6px; font-weight: 700; font-size: 0.92rem; color: var(--navy-950);">WhatsApp Contact *</label>
                                <input type="tel" id="whatsapp" name="whatsapp" required placeholder="09350170199" style="width: 100%; padding: 12px 14px; border: 1px solid var(--slate-300); border-radius: var(--radius-md); font-size: 0.95rem; outline: none;">
                            </div>
                            <div>
                                <label for="contact_no" style="display: block; margin-bottom: 6px; font-weight: 700; font-size: 0.92rem; color: var(--navy-950);">Calling Phone Number *</label>
                                <input type="tel" id="contact_no" name="contact_no" required placeholder="09350170199" style="width: 100%; padding: 12px 14px; border: 1px solid var(--slate-300); border-radius: var(--radius-md); font-size: 0.95rem; outline: none;">
                            </div>
                        </div>

                        <!-- Email -->
                        <div style="margin-bottom: 18px;">
                            <label for="email" style="display: block; margin-bottom: 6px; font-weight: 700; font-size: 0.92rem; color: var(--navy-950);">Parent Email Address</label>
                            <input type="email" id="email" name="email" placeholder="name@example.com" style="width: 100%; padding: 12px 14px; border: 1px solid var(--slate-300); border-radius: var(--radius-md); font-size: 0.95rem; outline: none;">
                        </div>

                        <!-- Residential Address -->
                        <div style="margin-bottom: 18px;">
                            <label for="address" style="display: block; margin-bottom: 6px; font-weight: 700; font-size: 0.92rem; color: var(--navy-950);">Residential Address *</label>
                            <input type="text" id="address" name="address" required placeholder="House No, Village / Ward, Street" style="width: 100%; padding: 12px 14px; border: 1px solid var(--slate-300); border-radius: var(--radius-md); font-size: 0.95rem; outline: none; margin-bottom: 10px;">
                            
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                                <input type="text" id="city" name="city" required placeholder="City / District (e.g. Palwal, Prithla)" style="width: 100%; padding: 12px 14px; border: 1px solid var(--slate-300); border-radius: var(--radius-md); font-size: 0.95rem; outline: none;">
                                <input type="text" id="state" name="state" required value="Haryana" style="width: 100%; padding: 12px 14px; border: 1px solid var(--slate-300); border-radius: var(--radius-md); font-size: 0.95rem; outline: none;">
                            </div>
                        </div>

                        <!-- Message -->
                        <div style="margin-bottom: 24px;">
                            <label for="message" style="display: block; margin-bottom: 6px; font-weight: 700; font-size: 0.92rem; color: var(--navy-950);">Special Remarks / Transport Queries (Optional)</label>
                            <textarea id="message" name="message" rows="3" placeholder="Any queries regarding school bus pickup, subjects, or medical needs..." style="width: 100%; padding: 12px 14px; border: 1px solid var(--slate-300); border-radius: var(--radius-md); font-size: 0.95rem; outline: none;"></textarea>
                        </div>

                        <button type="submit" class="btn btn-hero-primary" style="width: 100%; padding: 14px; font-size: 1.05rem;">
                            <i class="fas fa-paper-plane"></i> Submit Admission Registration Form
                        </button>
                    </form>
                </div>

                <!-- Right: Admission Guidelines & Help Card -->
                <div>
                    <div style="background: var(--slate-50); border: 1px solid var(--slate-200); border-radius: var(--radius-lg); padding: 24px; border-top: 4px solid var(--crimson-700);">
                        <h3 style="font-size: 1.2rem; color: var(--navy-950); margin-bottom: 12px;"><i class="fas fa-file-invoice"></i> Important Links</h3>
                        <ul style="list-style: none; padding: 0; margin-bottom: 20px;">
                            <li style="margin-bottom: 12px;">
                                <a href="admission-process.php" style="display: flex; align-items: center; gap: 8px; font-weight: 700; font-size: 0.92rem; color: var(--navy-900);">
                                    <i class="fas fa-clipboard-check" style="color: var(--accent);"></i> Admission Procedure &rarr;
                                </a>
                            </li>
                            <li style="margin-bottom: 12px;">
                                <a href="documents-required.php" style="display: flex; align-items: center; gap: 8px; font-weight: 700; font-size: 0.92rem; color: var(--navy-900);">
                                    <i class="fas fa-id-card" style="color: var(--accent);"></i> 13 Documents Required &rarr;
                                </a>
                            </li>
                            <li style="margin-bottom: 12px;">
                                <a href="fee-structure.php" style="display: flex; align-items: center; gap: 8px; font-weight: 700; font-size: 0.92rem; color: var(--navy-900);">
                                    <i class="fas fa-file-pdf" style="color: var(--accent);"></i> Fee Structure Schedule &rarr;
                                </a>
                            </li>
                            <li style="margin-bottom: 12px;">
                                <a href="transport-routes.php" style="display: flex; align-items: center; gap: 8px; font-weight: 700; font-size: 0.92rem; color: var(--navy-900);">
                                    <i class="fas fa-bus-alt" style="color: var(--accent);"></i> Bus Transport Routes &rarr;
                                </a>
                            </li>
                        </ul>

                        <div class="callout callout-gold" style="margin-top: 14px; padding: 16px;">
                            <h4 style="font-size: 0.94rem; margin-bottom: 4px; color: var(--navy-950);"><i class="fas fa-phone-alt" style="color: var(--accent);"></i> Admission Helpline</h4>
                            <p style="font-size: 0.84rem; margin-bottom: 6px; color: var(--slate-600);">Talk to our admission counselor:</p>
                            <a href="tel:<?php echo htmlspecialchars($school['phone1']); ?>" style="font-weight: 800; color: var(--navy-900); font-size: 1.05rem;"><?php echo htmlspecialchars($school['phone1']); ?></a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</main>

<?php include 'footer.php'; ?>
