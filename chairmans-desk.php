<?php 
require_once __DIR__ . '/config.php';
include 'header.php'; 
?>

<main id="content" class="site-main">

    <!-- Standardized SEO-Optimized Page Header Banner -->
    <?php render_page_banner(); ?>

    <!-- Page Content Container -->
    <div class="container page-container">
        <div class="content-box">
            
            <div style="display: flex; gap: 48px; align-items: flex-start; flex-wrap: wrap;">
                
                <!-- Chairman Crest / Society Badge -->
                <div style="flex: 0 0 320px; text-align: center; margin: 0 auto;">
                    <div style="background: #ffffff; border-radius: var(--radius-xl); padding: 30px 20px; box-shadow: var(--shadow-lg); border: 1px solid var(--slate-200); border-top: 5px solid var(--navy-900);">
                        <div style="width: 110px; height: 110px; border-radius: 50%; background: var(--navy-50); color: var(--navy-800); display: flex; align-items: center; justify-content: center; font-size: 3rem; margin: 0 auto 16px; border: 2px solid var(--accent);">
                            <i class="fas fa-landmark-dome"></i>
                        </div>
                        <h3 style="font-size: 1.25rem; font-weight: 800; color: var(--navy-950); margin-bottom: 4px;">Office of the Chairman</h3>
                        <span style="display: block; font-size: 0.88rem; font-weight: 700; color: var(--crimson-700);">Beer Bati Education Society</span>
                        <span style="display: block; font-size: 0.82rem; color: var(--slate-500); margin-top: 4px;"><?php echo htmlspecialchars($school['name']); ?></span>
                    </div>

                    <div class="callout callout-gold" style="margin-top: 24px; text-align: left;">
                        <h4 style="font-size: 0.96rem; font-weight: 800; color: var(--navy-950); margin-bottom: 6px;"><i class="fas fa-bullseye" style="color: var(--accent);"></i> Our Founding Vision</h4>
                        <p style="font-size: 0.86rem; color: var(--slate-600); margin: 0;">
                            To nurture future-ready scholars with strong ethics, critical intellect, and universal human empathy.
                        </p>
                    </div>
                </div>

                <!-- Message Content (Exact from Image 3) -->
                <div style="flex: 1 1 500px;">
                    <span class="section-tag section-tag-gold"><i class="fas fa-award"></i> Leadership Vision</span>
                    <h2 style="font-size: 2.1rem; color: var(--navy-950); margin-bottom: 20px;">From the Desk of the Chairman</h2>

                    <div style="font-size: 1.05rem; font-weight: 700; color: var(--navy-800); margin-bottom: 18px; line-height: 1.5;">
                        Dear Students, Parents, and Staff,
                    </div>

                    <p style="font-size: 1.02rem; color: var(--slate-700); line-height: 1.8; margin-bottom: 18px;">
                        It is my profound honor to welcome you to The Discovery International—where education transcends conventional learning and empowers every young mind to discover their full potential.
                    </p>

                    <p style="font-size: 1.02rem; color: var(--slate-700); line-height: 1.8; margin-bottom: 18px;">
                        At our core, we are driven by a bold vision: to cultivate a vibrant, inclusive environment that champions academic excellence, fosters strong moral character, and ignites a lifelong passion for exploration and innovation. We recognize that each student is unique, and it is our responsibility to nurture their talents, build their confidence, and guide them toward a future of possibility and purpose.
                    </p>

                    <p style="font-size: 1.02rem; color: var(--slate-700); line-height: 1.8; margin-bottom: 18px;">
                        The growth and success of The Discovery International are made possible through the unwavering dedication of our faculty, the trust and support of our parents, and the curiosity and ambition of our students. Together, we have built a school community grounded in values, inspired by creativity, and rich with opportunity.
                    </p>

                    <p style="font-size: 1.02rem; color: var(--slate-700); line-height: 1.8; margin-bottom: 24px;">
                        As we look ahead, let us reaffirm our shared commitment—to educate with heart, lead with integrity, and prepare our students to become responsible, compassionate global citizens.
                    </p>

                    <div style="border-top: 2px solid var(--slate-200); padding-top: 18px; margin-top: 24px;">
                        <h4 style="font-size: 1.15rem; color: var(--navy-950); margin-bottom: 2px;">Chairman</h4>
                        <span style="font-size: 0.95rem; font-weight: 700; color: var(--navy-800);">The Discovery International</span>
                    </div>

                    <div style="margin-top: 30px; display: flex; gap: 14px; flex-wrap: wrap;">
                        <a href="about.php" class="btn btn-primary"><i class="fas fa-university"></i> About Society &amp; School</a>
                        <a href="online-admission.php" class="btn btn-crimson"><i class="fas fa-user-graduate"></i> Enroll for Session 2026-27</a>
                    </div>
                </div>

            </div>

        </div>
    </div>

</main>

<?php include 'footer.php'; ?>
