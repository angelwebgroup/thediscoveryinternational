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
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 40px; margin-bottom: 3rem;">
                
                <!-- Left: Contact Form -->
                <div>
                    <span class="section-tag section-tag-crimson"><i class="fas fa-paper-plane"></i> Get in Touch</span>
                    <h2 style="font-size: 2.1rem; color: var(--navy-950); margin-bottom: 8px;">Send Us an Inquiry</h2>
                    <p style="color: var(--slate-600); margin-bottom: 24px;">Have questions regarding admissions, fee schedules, transport coverage, or campus appointments? Submit your message below:</p>

                    <?php if (isset($_SESSION['form_success'])): ?>
                        <div style="background: #ecfdf5; border: 1px solid #10b981; color: #065f46; padding: 14px 18px; border-radius: var(--radius-md); margin-bottom: 20px; font-weight: 600;">
                            <i class="fas fa-circle-check"></i> <?php echo htmlspecialchars($_SESSION['form_success']); unset($_SESSION['form_success']); ?>
                        </div>
                    <?php endif; ?>

                    <?php if (isset($_SESSION['form_error'])): ?>
                        <div style="background: #fef2f2; border: 1px solid #ef4444; color: #991b1b; padding: 14px 18px; border-radius: var(--radius-md); margin-bottom: 20px; font-weight: 600;">
                            <i class="fas fa-circle-exclamation"></i> <?php echo htmlspecialchars($_SESSION['form_error']); unset($_SESSION['form_error']); ?>
                        </div>
                    <?php endif; ?>

                    <form action="send_form_email.php" method="POST">
                        <div style="margin-bottom: 16px;">
                            <label for="name" style="display: block; margin-bottom: 6px; font-weight: 700; font-size: 0.92rem; color: var(--navy-950);">Student / Parent Name *</label>
                            <input type="text" id="name" name="name" required placeholder="Enter your full name" style="width: 100%; padding: 12px 14px; border: 1px solid var(--slate-300); border-radius: var(--radius-md); font-size: 0.95rem; outline: none;">
                        </div>

                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
                            <div>
                                <label for="email" style="display: block; margin-bottom: 6px; font-weight: 700; font-size: 0.92rem; color: var(--navy-950);">Email Address *</label>
                                <input type="email" id="email" name="email" required placeholder="youremail@mail.com" style="width: 100%; padding: 12px 14px; border: 1px solid var(--slate-300); border-radius: var(--radius-md); font-size: 0.95rem; outline: none;">
                            </div>
                            <div>
                                <label for="phone" style="display: block; margin-bottom: 6px; font-weight: 700; font-size: 0.92rem; color: var(--navy-950);">Phone Number *</label>
                                <input type="tel" id="phone" name="phone" required placeholder="09350170199" style="width: 100%; padding: 12px 14px; border: 1px solid var(--slate-300); border-radius: var(--radius-md); font-size: 0.95rem; outline: none;">
                            </div>
                        </div>

                        <div style="margin-bottom: 16px;">
                            <label for="class_interest" style="display: block; margin-bottom: 6px; font-weight: 700; font-size: 0.92rem; color: var(--navy-950);">Class Seeking Admission For</label>
                            <select id="class_interest" name="class_interest" style="width: 100%; padding: 12px 14px; border: 1px solid var(--slate-300); border-radius: var(--radius-md); font-size: 0.95rem; outline: none; background: #ffffff;">
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
                                <option value="Class 11 Science">Class 11 (Science)</option>
                                <option value="Class 11 Commerce">Class 11 (Commerce)</option>
                                <option value="Class 11 Humanities">Class 11 (Humanities/Arts)</option>
                                <option value="Class 12">Class 12</option>
                            </select>
                        </div>

                        <div style="margin-bottom: 20px;">
                            <label for="message" style="display: block; margin-bottom: 6px; font-weight: 700; font-size: 0.92rem; color: var(--navy-950);">Message / Specific Inquiry *</label>
                            <textarea id="message" name="message" rows="4" required placeholder="How can our administration assist you?" style="width: 100%; padding: 12px 14px; border: 1px solid var(--slate-300); border-radius: var(--radius-md); font-size: 0.95rem; outline: none;"></textarea>
                        </div>

                        <button type="submit" class="btn btn-hero-primary" style="padding: 12px 28px; font-size: 1rem; width: 100%;">
                            <i class="fas fa-paper-plane"></i> Submit Inquiry
                        </button>
                    </form>
                </div>

                <!-- Right: Official Contact Directory -->
                <div>
                    <span class="section-tag section-tag-gold"><i class="fas fa-building-circle-check"></i> Campus Directory</span>
                    <h2 style="font-size: 2.1rem; color: var(--navy-950); margin-bottom: 8px;">Official Information</h2>
                    
                    <div style="background: var(--slate-50); border: 1px solid var(--slate-200); border-radius: var(--radius-lg); padding: 28px; margin-top: 20px; border-top: 4px solid var(--secondary);">
                        <h4 style="color: var(--navy-950); font-size: 1.3rem; margin-bottom: 4px;"><?php echo htmlspecialchars($school['name']); ?></h4>
                        <p style="font-size: 0.88rem; color: var(--crimson-700); font-weight: 700; margin-bottom: 20px;">
                            CBSE Affiliation No: <?php echo htmlspecialchars($school['affiliation_no']); ?>
                        </p>

                        <div class="footer-contact-item" style="color: var(--slate-700); margin-bottom: 18px;">
                            <i class="fas fa-location-dot" style="color: var(--crimson-700); font-size: 1.25rem;"></i>
                            <div>
                                <strong style="color: var(--navy-950);">Campus Location:</strong>
                                <p style="margin: 0; font-size: 0.92rem;"><?php echo htmlspecialchars($school['address']); ?></p>
                                <span style="font-size: 0.82rem; color: var(--slate-500);"><?php echo htmlspecialchars($school['full_address']); ?></span>
                            </div>
                        </div>

                        <div class="footer-contact-item" style="color: var(--slate-700); margin-bottom: 18px;">
                            <i class="fas fa-phone-volume" style="color: var(--crimson-700); font-size: 1.25rem;"></i>
                            <div>
                                <strong style="color: var(--navy-950);">Telephone &amp; Admission Helpline:</strong>
                                <p style="margin: 0; font-size: 0.95rem;">
                                    <a href="tel:<?php echo htmlspecialchars($school['phone1']); ?>" style="color: var(--navy-900); font-weight: 800;"><?php echo htmlspecialchars($school['phone1']); ?></a>, 
                                    <a href="tel:<?php echo htmlspecialchars($school['phone2']); ?>" style="color: var(--navy-900); font-weight: 800;"><?php echo htmlspecialchars($school['phone2']); ?></a>
                                </p>
                            </div>
                        </div>

                        <div class="footer-contact-item" style="color: var(--slate-700); margin-bottom: 18px;">
                            <i class="fas fa-envelope-open" style="color: var(--crimson-700); font-size: 1.25rem;"></i>
                            <div>
                                <strong style="color: var(--navy-950);">Email Desk:</strong>
                                <p style="margin: 0; font-size: 0.92rem;">
                                    <a href="mailto:<?php echo htmlspecialchars($school['email']); ?>" style="color: var(--navy-900); font-weight: 700;"><?php echo htmlspecialchars($school['email']); ?></a>
                                </p>
                            </div>
                        </div>

                        <div class="footer-contact-item" style="color: var(--slate-700); margin-bottom: 18px;">
                            <i class="far fa-clock" style="color: var(--crimson-700); font-size: 1.25rem;"></i>
                            <div>
                                <strong style="color: var(--navy-950);">Office Visiting Hours:</strong>
                                <p style="margin: 0; font-size: 0.92rem;"><?php echo htmlspecialchars($school['office_hours']); ?></p>
                            </div>
                        </div>

                        <div style="border-top: 1px solid var(--slate-200); padding-top: 16px; margin-top: 16px; display: flex; gap: 10px; flex-wrap: wrap;">
                            <a href="<?php echo htmlspecialchars($school['facebook']); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary" style="font-size: 0.82rem; padding: 7px 14px;">
                                <i class="fab fa-facebook-f"></i> Facebook
                            </a>
                            <a href="<?php echo htmlspecialchars($school['google_map']); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-crimson" style="font-size: 0.82rem; padding: 7px 14px;">
                                <i class="fas fa-map-location-dot"></i> Google Map
                            </a>
                            <a href="<?php echo htmlspecialchars($school['whatsapp']); ?>" target="_blank" rel="noopener noreferrer" class="btn" style="background: var(--whatsapp); color: #ffffff; font-size: 0.82rem; padding: 7px 14px;">
                                <i class="fab fa-whatsapp"></i> WhatsApp
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Full Width Embedded Google Map -->
            <div style="border-radius: var(--radius-xl); overflow: hidden; box-shadow: var(--shadow-lg); border: 1px solid var(--slate-200); height: 420px;">
                <iframe 
                    src="https://maps.google.com/maps?q=The+Discovery+International+School+Prithla+Palwal+Haryana&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade" 
                    title="The Discovery International School Google Map Location">
                </iframe>
            </div>

        </div>
    </div>

</main>

<?php include 'footer.php'; ?>
