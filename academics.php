<?php 
require_once __DIR__ . '/config.php';
include 'header.php'; 
?>

<main id="content" class="site-main">

    <!-- Page Header -->
    <div class="page-header">
        <div class="container page-header-content">
            <h1>Academic Programs &amp; Curriculum</h1>
            <ul class="breadcrumbs">
                <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                <li><span class="separator"><i class="fas fa-chevron-right"></i></span></li>
                <li><span>Academics</span></li>
                <li><span class="separator"><i class="fas fa-chevron-right"></i></span></li>
                <li><span>Academic Excellence</span></li>
            </ul>
        </div>
    </div>

    <!-- Page Content Container -->
    <div class="container page-container">
        <div class="content-box">
            
            <div style="margin-bottom: 2.5rem;">
                <span class="section-tag section-tag-crimson"><i class="fas fa-book-bookmark"></i> NEP-2020 Aligned Curriculum</span>
                <h2 style="font-size: 2.2rem; color: var(--navy-950); margin-bottom: 8px;">Holistic Education from Pre-Primary to Class XII</h2>
                <p style="font-size: 1.02rem; color: var(--slate-700); line-height: 1.8;">
                    At <strong>The Discovery International School</strong>, learning transcends rote memorization. As an affiliated CBSE institution (Affiliation No: <strong><?php echo htmlspecialchars($school['affiliation_no']); ?></strong>), we offer a progressive curriculum that develops analytical reasoning, linguistic mastery, scientific temper, and creative innovation.
                </p>
            </div>

            <!-- 4 Wings Grid -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px; margin-bottom: 3rem;">
                
                <!-- Foundational Wing -->
                <div style="background: var(--slate-50); border: 1px solid var(--slate-200); border-radius: var(--radius-lg); padding: 26px; border-top: 4px solid var(--accent);">
                    <div style="font-size: 0.82rem; font-weight: 800; color: var(--gold-700); text-transform: uppercase; margin-bottom: 6px;">Foundational Stage</div>
                    <h3 style="font-size: 1.25rem; color: var(--navy-950); margin-bottom: 10px;">Pre-Primary &amp; Early Years</h3>
                    <p style="font-size: 0.92rem; color: var(--slate-600); line-height: 1.65; margin-bottom: 12px;">
                        Play-based, joyful, and multi-sensory learning for Nursery, KG, and UKG that sparks natural curiosity and foundational literacy &amp; numeracy.
                    </p>
                    <span style="font-size: 0.8rem; font-weight: 700; color: var(--navy-900);"><i class="fas fa-check" style="color: #10b981;"></i> Student-Teacher Ratio: 20:1</span>
                </div>

                <!-- Primary Wing -->
                <div style="background: var(--slate-50); border: 1px solid var(--slate-200); border-radius: var(--radius-lg); padding: 26px; border-top: 4px solid var(--navy-900);">
                    <div style="font-size: 0.82rem; font-weight: 800; color: var(--navy-800); text-transform: uppercase; margin-bottom: 6px;">Preparatory Stage</div>
                    <h3 style="font-size: 1.25rem; color: var(--navy-950); margin-bottom: 10px;">Primary Wing (Grades I - V)</h3>
                    <p style="font-size: 0.92rem; color: var(--slate-600); line-height: 1.65; margin-bottom: 12px;">
                        Experiential inquiry in Mathematics, Environmental Studies, Languages, Arts, and Digital Coding with active classroom mentorship.
                    </p>
                    <span style="font-size: 0.8rem; font-weight: 700; color: var(--navy-900);"><i class="fas fa-check" style="color: #10b981;"></i> Interactive Smart Classrooms</span>
                </div>

                <!-- Middle Wing -->
                <div style="background: var(--slate-50); border: 1px solid var(--slate-200); border-radius: var(--radius-lg); padding: 26px; border-top: 4px solid var(--crimson-700);">
                    <div style="font-size: 0.82rem; font-weight: 800; color: var(--crimson-700); text-transform: uppercase; margin-bottom: 6px;">Middle Stage</div>
                    <h3 style="font-size: 1.25rem; color: var(--navy-950); margin-bottom: 10px;">Middle Wing (Grades VI - VIII)</h3>
                    <p style="font-size: 0.92rem; color: var(--slate-600); line-height: 1.65; margin-bottom: 12px;">
                        Abstract concepts in Science, Social Studies, Math, Computer Science, and Foreign/Regional Languages with laboratory experimentation.
                    </p>
                    <span style="font-size: 0.8rem; font-weight: 700; color: var(--navy-900);"><i class="fas fa-check" style="color: #10b981;"></i> Science &amp; Computer Labs</span>
                </div>

                <!-- Senior Secondary Wing -->
                <div style="background: var(--slate-50); border: 1px solid var(--slate-200); border-radius: var(--radius-lg); padding: 26px; border-top: 4px solid #10b981;">
                    <div style="font-size: 0.82rem; font-weight: 800; color: #10b981; text-transform: uppercase; margin-bottom: 6px;">Secondary &amp; Sr. Secondary</div>
                    <h3 style="font-size: 1.25rem; color: var(--navy-950); margin-bottom: 10px;">Grades IX - XII (Streams)</h3>
                    <p style="font-size: 0.92rem; color: var(--slate-600); line-height: 1.65; margin-bottom: 12px;">
                        Rigorous board preparation in <strong>Science, Commerce, and Humanities</strong> with career counseling and competitive entrance coaching.
                    </p>
                    <span style="font-size: 0.8rem; font-weight: 700; color: var(--navy-900);"><i class="fas fa-check" style="color: #10b981;"></i> Specialized PGT Faculty</span>
                </div>

            </div>

            <!-- Available Senior Secondary Streams (from Image 4) -->
            <div style="background: #ffffff; border: 1px solid var(--slate-200); border-radius: var(--radius-xl); padding: 32px; box-shadow: var(--shadow-sm); margin-bottom: 2.5rem;">
                <h3 style="color: var(--navy-950); font-size: 1.45rem; margin-bottom: 14px; display: flex; align-items: center; gap: 10px;">
                    <i class="fas fa-layer-group" style="color: var(--crimson-700);"></i> Available Streams in Class XI &amp; XII
                </h3>
                <p style="color: var(--slate-600); margin-bottom: 20px;">
                    The Discovery International School offers flexible subject combinations matching student aspirations:
                </p>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
                    <div style="background: var(--navy-50); border: 1px solid #bfdbfe; border-radius: var(--radius-md); padding: 20px;">
                        <h4 style="color: var(--navy-900); font-size: 1.1rem; margin-bottom: 8px;"><i class="fas fa-atom"></i> Science Stream</h4>
                        <ul class="clean-bullet-list" style="margin: 0; font-size: 0.9rem;">
                            <li>Physics, Chemistry, Mathematics (PCM)</li>
                            <li>Physics, Chemistry, Biology (PCB)</li>
                            <li>Computer Science / Physical Education</li>
                        </ul>
                    </div>

                    <div style="background: var(--gold-50); border: 1px solid #fde68a; border-radius: var(--radius-md); padding: 20px;">
                        <h4 style="color: var(--gold-700); font-size: 1.1rem; margin-bottom: 8px;"><i class="fas fa-chart-line"></i> Commerce Stream</h4>
                        <ul class="clean-bullet-list" style="margin: 0; font-size: 0.9rem;">
                            <li>Accountancy, Business Studies</li>
                            <li>Economics, Mathematics / Applied Math</li>
                            <li>Informatics Practices, Physical Education</li>
                        </ul>
                    </div>

                    <div style="background: var(--crimson-50); border: 1px solid #fecdd3; border-radius: var(--radius-md); padding: 20px;">
                        <h4 style="color: var(--crimson-700); font-size: 1.1rem; margin-bottom: 8px;"><i class="fas fa-landmark"></i> Humanities / Arts</h4>
                        <ul class="clean-bullet-list" style="margin: 0; font-size: 0.9rem;">
                            <li>History, Political Science, Geography</li>
                            <li>Economics, Psychology, Sociology</li>
                            <li>Vocational Skill Subjects per NEP-2020</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="callout callout-gold" style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 16px;">
                <div>
                    <h4 style="color: var(--navy-950); margin-bottom: 4px;">Admissions Open for Session <?php echo htmlspecialchars($school['session']); ?></h4>
                    <p style="color: var(--slate-700); margin: 0; font-size: 0.92rem;">Register your child online or consult with our academic counselor today.</p>
                </div>
                <div style="display: flex; gap: 10px; flex-wrap: wrap;">
                    <a href="online-admission.php" class="btn btn-crimson" style="padding: 10px 22px; font-size: 0.9rem;"><i class="fas fa-pen-nib"></i> Apply Online</a>
                    <a href="admission-process.php" class="btn btn-primary" style="padding: 10px 22px; font-size: 0.9rem;"><i class="fas fa-file-lines"></i> Admission Details</a>
                </div>
            </div>

        </div>
    </div>

</main>

<?php include 'footer.php'; ?>
