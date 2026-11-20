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
            
            <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px; margin-bottom: 2rem;">
                <div>
                    <span class="section-tag section-tag-crimson"><i class="fas fa-graduation-cap"></i> Academic Session <?php echo htmlspecialchars($school['session']); ?></span>
                    <h2 style="font-size: 2.1rem; color: var(--navy-950); margin-bottom: 4px;">Admissions &amp; Enrolment Guidelines</h2>
                    <p style="color: var(--slate-600); margin: 0;">Comprehensive eligibility, document checklists, and policy for pre-primary to senior secondary.</p>
                </div>
                <div>
                    <a href="online-admission.php" class="btn btn-hero-primary"><i class="fas fa-file-pen"></i> Register Online Now</a>
                </div>
            </div>

            <!-- 1. Key Enrolment Overview Cards -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; margin-bottom: 2.5rem;">
                <div style="background: var(--navy-50); border: 1px solid #dbeafe; border-left: 4px solid var(--navy-800); border-radius: var(--radius-md); padding: 20px;">
                    <h4 style="color: var(--navy-950); font-size: 1.05rem; margin-bottom: 6px;"><i class="fas fa-users-viewfinder" style="color: var(--navy-800);"></i> Class Strength</h4>
                    <p style="font-size: 0.92rem; color: var(--slate-700); margin: 0;">
                        Class strength is <strong>20 students per class in Primary</strong> and <strong>25 students per class in Senior Classes</strong>.
                    </p>
                </div>

                <div style="background: var(--gold-50); border: 1px solid #fef3c7; border-left: 4px solid var(--accent); border-radius: var(--radius-md); padding: 20px;">
                    <h4 style="color: var(--navy-950); font-size: 1.05rem; margin-bottom: 6px;"><i class="fas fa-bullhorn" style="color: var(--gold-600);"></i> Notification &amp; Registration Time</h4>
                    <p style="font-size: 0.92rem; color: var(--slate-700); margin: 0;">
                        Admissions start from <strong>1st August every year</strong> till the seats are available. The Student/Parent must apply by filling the admission form available at school website.
                    </p>
                </div>

                <div style="background: var(--crimson-50); border: 1px solid #ffe4e6; border-left: 4px solid var(--crimson-700); border-radius: var(--radius-md); padding: 20px;">
                    <h4 style="color: var(--navy-950); font-size: 1.05rem; margin-bottom: 6px;"><i class="fas fa-right-left" style="color: var(--crimson-700);"></i> Transfer Cases</h4>
                    <p style="font-size: 0.92rem; color: var(--slate-700); margin: 0;">
                        Admissions available subject to seat vacancy. Students appear for a written test. Transfer from all recognized boards accepted round the year.
                    </p>
                </div>
            </div>

            <!-- 2. Age Eligibility Table (NEP-2020 Guidelines) -->
            <div style="margin-bottom: 2.5rem;">
                <h3 style="color: var(--navy-950); font-size: 1.35rem; font-weight: 800; margin-bottom: 12px; display: flex; align-items: center; gap: 8px;">
                    <i class="fas fa-calendar-check" style="color: var(--accent);"></i> Age Eligibility (As per NEP Guidelines)
                </h3>
                
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th style="width: 25%;">Grade / Level</th>
                                <th style="width: 35%;">Minimum Age Requirement</th>
                                <th>Applicable Criteria &amp; Grace Period</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Nursery</strong></td>
                                <td>Age should be <strong>3 years</strong> as on 31st July</td>
                                <td>4 month grace provided as per NEP guidelines</td>
                            </tr>
                            <tr>
                                <td><strong>KG</strong></td>
                                <td>Age should be <strong>4 years</strong> as on 31st July</td>
                                <td>4 month grace provided as per NEP guidelines</td>
                            </tr>
                            <tr>
                                <td><strong>UKG</strong></td>
                                <td>Age should be <strong>5 years</strong> as on 31st July</td>
                                <td>4 month grace provided as per NEP guidelines</td>
                            </tr>
                            <tr>
                                <td><strong>Class 1</strong></td>
                                <td>Age should be <strong>6 years</strong> as on 31st July</td>
                                <td>4 month grace provided as per NEP guidelines</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- 3. Student Teacher Ratio & Affiliation Details -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 24px; margin-bottom: 2.5rem;">
                <div style="background: var(--slate-50); border: 1px solid var(--slate-200); border-radius: var(--radius-lg); padding: 24px;">
                    <h4 style="font-size: 1.15rem; color: var(--navy-950); margin-bottom: 10px;">
                        <i class="fas fa-chalkboard-user" style="color: var(--navy-800);"></i> Student-Teacher Ratio
                    </h4>
                    <p style="font-size: 0.94rem; color: var(--slate-700); line-height: 1.7; margin: 0;">
                        A very unique and healthy student-teacher ratio of <strong>20:1</strong> is followed to help children get proper attention. It helps them grow at their own pace in guidance of dedicated classroom mentors. This ratio is followed in primary till class 3 and it is made <strong>25:1</strong> from class 4 onwards.
                    </p>
                </div>

                <div style="background: var(--slate-50); border: 1px solid var(--slate-200); border-radius: var(--radius-lg); padding: 24px;">
                    <h4 style="font-size: 1.15rem; color: var(--navy-950); margin-bottom: 10px;">
                        <i class="fas fa-layer-group" style="color: var(--crimson-700);"></i> Available Streams in Class XI - XII
                    </h4>
                    <p style="font-size: 0.94rem; color: var(--slate-700); line-height: 1.7; margin-bottom: 8px;">
                        <strong>The Discovery International School</strong> is a CBSE affiliated senior secondary school. Available streams:
                    </p>
                    <ul class="clean-bullet-list" style="margin: 0;">
                        <li><strong>Science Stream:</strong> Medical &amp; Non-Medical with modern practical labs</li>
                        <li><strong>Commerce Stream:</strong> Accountancy, Business Studies, Economics</li>
                        <li><strong>Humanities (Arts):</strong> History, Political Science, Geography, Psychology</li>
                        <li><strong>Skill Subjects:</strong> Diverse vocational and digital skills as per NEP-2020</li>
                    </ul>
                </div>
            </div>

            <!-- 4. Session Start & Orientation -->
            <div class="callout callout-gold" style="margin-bottom: 2.5rem;">
                <h4 style="font-size: 1.05rem; font-weight: 800; color: var(--navy-950); margin-bottom: 8px;">
                    <i class="fas fa-calendar-star" style="color: var(--gold-600);"></i> Start of New Academic Session &amp; Orientation
                </h4>
                <p style="font-size: 0.95rem; color: var(--slate-700); margin: 0; line-height: 1.65;">
                    In the <strong>first week of April</strong> the new academic session starts after conducting an Orientation for parents in which the complete plan, syllabus outline, evaluation schedule, and activities for the session are shared with the parents.
                </p>
            </div>

            <!-- 5. Documents Required at the Time of Admission -->
            <div style="margin-bottom: 2.5rem;">
                <h3 style="color: var(--navy-950); font-size: 1.35rem; font-weight: 800; margin-bottom: 14px; display: flex; align-items: center; gap: 8px;">
                    <i class="fas fa-folder-open" style="color: var(--crimson-700);"></i> Documents Required at the Time of Admission
                </h3>
                
                <div style="background: #ffffff; border: 1px solid var(--slate-200); border-radius: var(--radius-lg); padding: 24px; box-shadow: var(--shadow-xs);">
                    <ul class="clean-bullet-list" style="margin: 0; display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 10px;">
                        <li>5 passport size photographs each of Student, Father and Mother</li>
                        <li>A copy of Aadhar card of Student, Father and Mother</li>
                        <li>Birth Certificate (issued by municipal authority)</li>
                        <li>Transfer Certificate (TC) from the school last attended</li>
                        <li>Caste certificate for categories other than General</li>
                        <li>Report Card / Marksheet of previous class</li>
                        <li>Proof of Residence of both permanent and current addresses</li>
                        <li>Health / Immunization Certificate</li>
                        <li>Character Certificate from the last school attended (for Grade IX)</li>
                        <li>Migration Certificate (only for Non-CBSE student seeking Class XI)</li>
                        <li>Attested copies of legal document if the child is raised by a single parent</li>
                        <li>Affidavit of Guardianship if the child lives with a local guardian</li>
                        <li>A copy of a valid Passport (if available)</li>
                    </ul>
                </div>
            </div>

            <!-- 6. Admission Policy -->
            <div>
                <h3 style="color: var(--navy-950); font-size: 1.35rem; font-weight: 800; margin-bottom: 14px; display: flex; align-items: center; gap: 8px;">
                    <i class="fas fa-scale-balanced" style="color: var(--navy-800);"></i> Admission Policy
                </h3>
                
                <div style="background: var(--slate-50); border: 1px solid var(--slate-200); border-radius: var(--radius-lg); padding: 24px;">
                    <ul class="clean-bullet-list" style="margin: 0;">
                        <li><strong>Issue of Registration is no guarantee for admissions.</strong> Forms are likely to be rejected if information or documents are found incomplete, false, or do not meet eligibility criteria.</li>
                        <li><strong>Student may need to qualify a written test.</strong> Admission may or may not be offered based on performance during the interaction or assessment.</li>
                        <li><strong>All admissions are granted subject to availability of seats,</strong> merit, meeting the eligibility criterion, and timely submission of necessary verification documents and fees.</li>
                    </ul>
                </div>

                <div style="margin-top: 28px; text-align: center;">
                    <a href="online-admission.php" class="btn btn-crimson" style="padding: 14px 34px; font-size: 1.05rem;">
                        <i class="fas fa-pen-nib"></i> Proceed to Online Admission Form 2026-27
                    </a>
                </div>
            </div>

        </div>
    </div>

</main>

<?php include 'footer.php'; ?>
