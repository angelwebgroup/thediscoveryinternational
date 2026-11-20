<?php 
require_once __DIR__ . '/config.php';
include 'header.php'; 
?>

<main id="content" class="site-main">

    <!-- Standardized SEO-Optimized Page Header Banner -->
    <?php render_page_banner(); ?>

    <!-- Page Content Container -->
    <div class="container page-container">
        
        <!-- Header Banner -->
        <div class="content-box" style="margin-bottom: 2rem;">
            <span class="section-tag">Academic Calendar</span>
            <h2 style="margin: 0.25rem 0 0.5rem; color: var(--slate-900);">Examination Schedule &amp; Datesheets</h2>
            <p style="margin: 0; color: var(--slate-600); font-size: 0.96rem;">
                Official datesheets, periodic test schedules, and CBSE board examination circulars for Session <?php echo htmlspecialchars($school['session']); ?>.
            </p>
        </div>

        <!-- Examination Schedule Table -->
        <div class="content-box" style="margin-bottom: 2rem;">
            <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 0.5rem; margin-bottom: 1.25rem; border-bottom: 2px solid var(--slate-100); padding-bottom: 0.75rem;">
                <div>
                    <h3 style="margin: 0; color: var(--primary); font-size: 1.25rem; display: flex; align-items: center; gap: 10px;">
                        <i class="fas fa-calendar-alt"></i> Annual Examination &amp; Periodic Assessment Schedule
                    </h3>
                    <span style="color: var(--text-muted); font-size: 0.88rem;">Session <?php echo htmlspecialchars($school['session']); ?> Assessments</span>
                </div>
            </div>

            <div class="table-responsive">
                <table class="data-table" style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="background: var(--slate-100); text-align: left;">
                            <th style="padding: 12px 14px; font-size: 0.86rem; color: var(--slate-700); font-weight: 700;">EXAMINATION / TEST</th>
                            <th style="padding: 12px 14px; font-size: 0.86rem; color: var(--slate-700); font-weight: 700;">APPLICABLE CLASSES</th>
                            <th style="padding: 12px 14px; font-size: 0.86rem; color: var(--slate-700); font-weight: 700;">TENTATIVE TIMELINE</th>
                            <th style="padding: 12px 14px; font-size: 0.86rem; color: var(--slate-700); font-weight: 700;">CIRCULAR / STATUS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Periodic Assessment - I (PA-I)</strong></td>
                            <td>Grades 1 to 12</td>
                            <td>July 2026</td>
                            <td><span class="badge" style="background: #DCFCE7; color: #166534; font-weight: 700; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem;">Concluded</span></td>
                        </tr>
                        <tr style="background: var(--slate-50);">
                            <td><strong>Mid-Term / Half Yearly Exams</strong></td>
                            <td>Nursery to Grade 12</td>
                            <td>September &ndash; October 2026</td>
                            <td><span class="badge" style="background: #FEF3C7; color: #92400E; font-weight: 700; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem;">Active Schedule</span></td>
                        </tr>
                        <tr>
                            <td><strong>Periodic Assessment - II (PA-II)</strong></td>
                            <td>Grades 1 to 9 &amp; 11</td>
                            <td>December 2026</td>
                            <td><span class="badge" style="background: var(--slate-100); color: var(--slate-700); font-weight: 700; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem;">Upcoming</span></td>
                        </tr>
                        <tr style="background: var(--slate-50);">
                            <td><strong>Pre-Board Examinations</strong></td>
                            <td>Grades 10 &amp; 12 (Board Classes)</td>
                            <td>January 2027</td>
                            <td><span class="badge" style="background: var(--slate-100); color: var(--slate-700); font-weight: 700; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem;">Upcoming</span></td>
                        </tr>
                        <tr>
                            <td><strong>Annual Board Examinations (CBSE)</strong></td>
                            <td>Grades 10 &amp; 12</td>
                            <td>February &ndash; March 2027</td>
                            <td><span class="badge" style="background: #E0E7FF; color: #3730A3; font-weight: 700; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem;">CBSE Official Date Sheet</span></td>
                        </tr>
                        <tr style="background: var(--slate-50);">
                            <td><strong>Annual School Exams</strong></td>
                            <td>Nursery to Grades 9 &amp; 11</td>
                            <td>March 2027</td>
                            <td><span class="badge" style="background: var(--slate-100); color: var(--slate-700); font-weight: 700; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem;">Upcoming</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Guidelines for Students & Parents -->
        <div class="content-box">
            <h3 style="margin-top: 0; color: var(--slate-900); margin-bottom: 1rem; display: flex; align-items: center; gap: 8px;">
                <i class="fas fa-info-circle" style="color: var(--primary);"></i> Important Examination Guidelines
            </h3>
            <ul style="color: var(--slate-700); font-size: 0.94rem; display: flex; flex-direction: column; gap: 10px; padding-left: 20px;">
                <li>Students must report to the examination hall in full school uniform with valid identity cards at least 20 minutes before commencement.</li>
                <li>Strict adherence to CBSE examination bye-laws is mandatory. Electronic devices, smart watches, and unauthorized material are strictly prohibited.</li>
                <li>Minimum 75% attendance is required to appear in the annual school and board examinations as mandated by CBSE regulations.</li>
                <li>Detailed admit cards and seating arrangements will be issued through class teachers prior to each major examination.</li>
            </ul>

            <div style="margin-top: 1.5rem; padding-top: 1.25rem; border-top: 1px solid var(--slate-200); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem;">
                <span style="font-size: 0.88rem; color: var(--text-muted);">For examination queries or verification, contact the examination controller:</span>
                <a href="tel:<?php echo htmlspecialchars($school['phone']); ?>" class="btn btn-action-primary" style="padding: 0.5rem 1.2rem; font-size: 0.88rem;">
                    <i class="fas fa-phone-alt"></i> Call Exam Cell
                </a>
            </div>
        </div>

    </div>

</main>

<?php include 'footer.php'; ?>