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
            
            <div style="display: flex; gap: 40px; align-items: center; flex-wrap: wrap; margin-bottom: 2.5rem;">
                <div style="flex: 1 1 500px;">
                    <span class="section-tag section-tag-crimson"><i class="fas fa-landmark"></i> Dedicated to Academic Excellence</span>
                    <h2 style="font-size: 2.2rem; color: var(--navy-950); margin-bottom: 14px;">Our Mission &amp; Educational Commitment</h2>
                    <p style="font-size: 1.02rem; color: var(--slate-700); line-height: 1.8; margin-bottom: 14px;">
                        At <strong>The Discovery International School</strong>, operating under the patronage of <strong>Beer Bati Education Society</strong>, our purpose is to nurture young minds with the perfect blend of academic excellence, moral values, and global perspective.
                    </p>
                    <p style="font-size: 1.02rem; color: var(--slate-700); line-height: 1.8; margin-bottom: 14px;">
                        Situated strategically at <strong>Prithla – Sehrala Rd, Village Prithla, Palwal (Haryana)</strong>, we are a proud CBSE-affiliated senior secondary school offering holistic education from Pre-Primary up to Senior Secondary levels (CBSE Affiliation No: <strong><?php echo htmlspecialchars($school['affiliation_no']); ?></strong>).
                    </p>
                    <p style="font-size: 1.02rem; color: var(--slate-700); line-height: 1.8;">
                        Our student-centered pedagogy is guided by the National Education Policy (NEP-2020), ensuring experiential learning, analytical reasoning, and character foundation so our pupils thrive in today's fast-changing global society.
                    </p>
                </div>
                <div style="flex: 1 1 400px; text-align: center;">
                    <div style="border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-lg); border: 4px solid #ffffff; outline: 1px solid var(--slate-200);">
                        <img src="images/school-building.jpg" alt="<?php echo htmlspecialchars($school['name']); ?> Campus" style="width: 100%; height: auto;">
                    </div>
                    <span style="display: block; font-size: 0.85rem; color: var(--slate-500); margin-top: 10px; font-weight: 600;">
                        Campus Building at Prithla – Sehrala Road, Palwal, Haryana
                    </span>
                </div>
            </div>

            <hr style="border: 0; border-top: 1px solid var(--slate-200); margin: 2.5rem 0;">

            <!-- Core Pillars of Learning -->
            <div style="margin-bottom: 3rem;">
                <div class="text-center" style="margin-bottom: 2rem;">
                    <span class="section-tag section-tag-gold"><i class="fas fa-cubes-stacked"></i> Foundational Pillars</span>
                    <h3 style="font-size: 1.8rem; color: var(--navy-950);">What Sets Us Apart</h3>
                </div>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px;">
                    <div style="background: var(--slate-50); border: 1px solid var(--slate-200); border-radius: var(--radius-lg); padding: 24px; border-top: 4px solid var(--navy-900);">
                        <div style="width: 48px; height: 48px; border-radius: 50%; background: var(--navy-50); color: var(--navy-800); display: flex; align-items: center; justify-content: center; font-size: 1.3rem; margin-bottom: 14px;">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h4 style="font-size: 1.15rem; color: var(--navy-950); margin-bottom: 8px;">CBSE Curriculum &amp; NEP-2020</h4>
                        <p style="font-size: 0.92rem; color: var(--slate-600); margin: 0; line-height: 1.65;">
                            Structured pedagogical curriculum from Nursery to Class XII (Science, Commerce, Arts) with multi-disciplinary vocational skill subjects.
                        </p>
                    </div>

                    <div style="background: var(--slate-50); border: 1px solid var(--slate-200); border-radius: var(--radius-lg); padding: 24px; border-top: 4px solid var(--accent);">
                        <div style="width: 48px; height: 48px; border-radius: 50%; background: var(--gold-100); color: var(--gold-700); display: flex; align-items: center; justify-content: center; font-size: 1.3rem; margin-bottom: 14px;">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h4 style="font-size: 1.15rem; color: var(--navy-950); margin-bottom: 8px;">Values &amp; Character Building</h4>
                        <p style="font-size: 0.92rem; color: var(--slate-600); margin: 0; line-height: 1.65;">
                            Fostering integrity, empathy, teamwork, and responsible citizenship alongside intellectual growth and competitive exam preparation.
                        </p>
                    </div>

                    <div style="background: var(--slate-50); border: 1px solid var(--slate-200); border-radius: var(--radius-lg); padding: 24px; border-top: 4px solid var(--crimson-700);">
                        <div style="width: 48px; height: 48px; border-radius: 50%; background: var(--crimson-50); color: var(--crimson-700); display: flex; align-items: center; justify-content: center; font-size: 1.3rem; margin-bottom: 14px;">
                            <i class="fas fa-hands-holding"></i>
                        </div>
                        <h4 style="font-size: 1.15rem; color: var(--navy-950); margin-bottom: 8px;">Safe &amp; Inclusive Campus</h4>
                        <p style="font-size: 0.92rem; color: var(--slate-600); margin: 0; line-height: 1.65;">
                            Sprawling 6,070 sq. mtr. eco-friendly grounds, 100% CCTV coverage, ramp access, first-aid infirmary, and GPS-enabled school bus transportation.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Society Information Callout -->
            <div class="callout callout-navy" style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 16px;">
                <div>
                    <h4 style="color: var(--navy-950); font-size: 1.15rem; margin-bottom: 4px;"><i class="fas fa-building-columns" style="color: var(--navy-800);"></i> Beer Bati Education Society</h4>
                    <p style="color: var(--slate-700); margin: 0; font-size: 0.92rem;">Registered non-profit educational body dedicated to expanding quality schooling across Haryana.</p>
                </div>
                <div style="display: flex; gap: 12px; flex-wrap: wrap;">
                    <a href="principals-desk.php" class="btn btn-primary" style="font-size: 0.86rem; padding: 8px 18px;"><i class="fas fa-user-tie"></i> Principal's Desk</a>
                    <a href="chairmans-desk.php" class="btn btn-crimson" style="font-size: 0.86rem; padding: 8px 18px;"><i class="fas fa-award"></i> Chairman's Desk</a>
                </div>
            </div>

        </div>
    </div>

</main>

<?php include 'footer.php'; ?>
