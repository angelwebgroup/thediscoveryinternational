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
            
            <div style="margin-bottom: 2rem;">
                <span class="section-tag section-tag-gold"><i class="fas fa-trophy"></i> Academic Glory</span>
                <h2 style="font-size: 2.1rem; color: var(--navy-950); margin-bottom: 12px;">Outstanding Performance in CBSE Board Examinations</h2>
                <p style="font-size: 1.05rem; color: var(--slate-700); line-height: 1.8;">
                    <strong><?php echo htmlspecialchars($school['name']); ?></strong> (CBSE Affiliation No: <strong><?php echo htmlspecialchars($school['affiliation_no']); ?></strong>) continues its tradition of academic brilliance, with students delivering commendable results in the Central Board of Secondary Education examinations.
                </p>
            </div>

            <!-- Result Highlights Grid -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px; margin-bottom: 2.5rem;">
                <div style="background: var(--navy-50); border: 1px solid #bfdbfe; border-radius: var(--radius-md); padding: 22px; text-align: center;">
                    <div style="font-size: 2.2rem; font-weight: 900; color: var(--navy-900);">100%</div>
                    <span style="font-size: 0.88rem; font-weight: 700; color: var(--slate-700);">Pass Percentage</span>
                </div>
                <div style="background: var(--gold-50); border: 1px solid #fde68a; border-radius: var(--radius-md); padding: 22px; text-align: center;">
                    <div style="font-size: 2.2rem; font-weight: 900; color: var(--gold-700);">96.4%</div>
                    <span style="font-size: 0.88rem; font-weight: 700; color: var(--slate-700);">Top Score Achieved</span>
                </div>
                <div style="background: var(--crimson-50); border: 1px solid #fecdd3; border-radius: var(--radius-md); padding: 22px; text-align: center;">
                    <div style="font-size: 2.2rem; font-weight: 900; color: var(--crimson-700);">90%+</div>
                    <span style="font-size: 0.88rem; font-weight: 700; color: var(--slate-700);">Distinction Honors</span>
                </div>
                <div style="background: #ecfdf5; border: 1px solid #a7f3d0; border-radius: var(--radius-md); padding: 22px; text-align: center;">
                    <div style="font-size: 2.2rem; font-weight: 900; color: #059669;">100 / 100</div>
                    <span style="font-size: 0.88rem; font-weight: 700; color: var(--slate-700);">Centum in Languages &amp; Math</span>
                </div>
            </div>

            <div style="background: var(--slate-50); border: 1px solid var(--slate-200); border-radius: var(--radius-lg); padding: 28px; line-height: 1.8; color: var(--slate-700); font-size: 0.98rem; margin-bottom: 2rem;">
                <p>
                    Students demonstrated exceptional intellectual capability across English, Science, Mathematics, Social Sciences, Hindi, and Computer Applications. The consistent guidance of dedicated teachers, combined with regular mock testing and personalized feedback sessions, enabled our scholars to achieve stellar marks.
                </p>
                <p style="margin: 0;">
                    On this occasion, Principal <strong><?php echo htmlspecialchars($school['principal_name']); ?></strong> and the management of <strong>Beer Bati Education Society</strong> applauded the students, parents, and faculty mentors for their relentless hard work and commitment to academic excellence.
                </p>
            </div>

            <div class="callout callout-gold" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 14px;">
                <div>
                    <h4 style="margin: 0 0 4px; color: var(--navy-950);">Join Our Community of High Achievers</h4>
                    <p style="margin: 0; font-size: 0.9rem; color: var(--slate-600);">Admissions open for Pre-Primary to Class XII for Session <?php echo htmlspecialchars($school['session']); ?>.</p>
                </div>
                <a href="online-admission.php" class="btn btn-hero-primary"><i class="fas fa-user-graduate"></i> Apply Online Today</a>
            </div>

        </div>
    </div>

</main>

<?php include 'footer.php'; ?>
