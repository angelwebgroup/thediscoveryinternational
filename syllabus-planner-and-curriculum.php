<?php include 'header.php'; ?>

<main id="content" class="site-main">

    <!-- Page Header -->
    <div class="page-header">
        <div class="container page-header-content">
            <h1>Syllabus Planner &amp; Curriculum</h1>
            <ul class="breadcrumbs">
                <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                <li><span class="separator"><i class="fas fa-chevron-right" style="font-size: 0.7rem;"></i></span></li>
                <li><span>Academics</span></li>
                <li><span class="separator"><i class="fas fa-chevron-right" style="font-size: 0.7rem;"></i></span></li>
                <li><span>Syllabus Planner &amp; Curriculum</span></li>
            </ul>
        </div>
    </div>

    <!-- Page Content Container -->
    <div class="container page-container">
        
        <!-- Academic Overview Banner -->
        <div class="content-box" style="margin-bottom: 2rem;">
            <div style="display: flex; gap: 30px; align-items: center; flex-wrap: wrap;">
                <div style="flex: 1 1 500px;">
                    <span class="section-tag">Academic Excellence</span>
                    <h2 style="margin: 0.25rem 0 0.75rem; color: var(--slate-900);">Comprehensive, Future-Ready Learning</h2>
                    <p style="color: var(--slate-600); font-size: 1rem; line-height: 1.7; margin-bottom: 1rem;">
                        At <strong><?php echo htmlspecialchars($school['full_name']); ?></strong>, our syllabus planner and curriculum are thoughtfully designed in strict alignment with the <strong>Central Board of Secondary Education (CBSE)</strong> and the <strong>National Education Policy (NEP)</strong>. We cultivate deep conceptual understanding, analytical thinking, creativity, and moral discipline from foundational years through Grade 10+2.
                    </p>
                    <div style="display: flex; gap: 12px; flex-wrap: wrap;">
                        <span class="badge" style="background: var(--primary-subtle); color: var(--primary); font-weight: 700; padding: 6px 14px; border-radius: 6px;">
                            <i class="fas fa-check-circle"></i> CBSE Affiliated (<?php echo htmlspecialchars($school['affiliation_no']); ?>)
                        </span>
                        <span class="badge" style="background: #FEF3C7; color: #92400E; font-weight: 700; padding: 6px 14px; border-radius: 6px;">
                            <i class="fas fa-layer-group"></i> Nursery to Grade 10+2
                        </span>
                        <span class="badge" style="background: #DCFCE7; color: #166534; font-weight: 700; padding: 6px 14px; border-radius: 6px;">
                            <i class="fas fa-flask"></i> STEM &amp; Digital Classrooms
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Academic Stages Grid -->
        <div style="margin-bottom: 2.5rem;">
            <div class="section-title-wrap" style="text-align: left; margin-bottom: 1.5rem;">
                <span class="section-tag">Educational Journey</span>
                <h2 class="section-title" style="font-size: 1.75rem;">Curriculum by Academic Stages</h2>
                <p class="section-desc">Tailored learning methodologies designed to nurture every milestone of a student's cognitive and emotional development.</p>
            </div>

            <div class="grid-3" style="gap: 20px;">
                
                <!-- Stage 1: Pre-Primary -->
                <div class="card" style="border-top: 4px solid var(--accent); display: flex; flex-direction: column;">
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 14px;">
                        <span style="font-size: 0.78rem; font-weight: 800; color: var(--accent); text-transform: uppercase; letter-spacing: 0.5px;">Foundational Stage</span>
                        <span class="badge" style="background: var(--slate-100); color: var(--slate-700); font-weight: 700; font-size: 0.75rem; padding: 3px 8px; border-radius: 4px;">Nursery to UKG</span>
                    </div>
                    <h3 style="margin-bottom: 10px; font-size: 1.25rem; color: var(--slate-900);">Early Childhood &amp; Pre-Primary</h3>
                    <p style="color: var(--text-muted); font-size: 0.92rem; margin-bottom: 14px;">A joyful, nurturing environment fostering sensory exploration and natural curiosity.</p>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.9rem; color: var(--slate-700); display: flex; flex-direction: column; gap: 8px;">
                        <li><i class="fas fa-check" style="color: var(--accent); margin-right: 8px;"></i> Play-based learning &amp; sensory discovery</li>
                        <li><i class="fas fa-check" style="color: var(--accent); margin-right: 8px;"></i> Phonics, language &amp; storytelling skills</li>
                        <li><i class="fas fa-check" style="color: var(--accent); margin-right: 8px;"></i> Motor skills development &amp; creative arts</li>
                        <li><i class="fas fa-check" style="color: var(--accent); margin-right: 8px;"></i> Warm, caring &amp; child-friendly classrooms</li>
                    </ul>
                </div>

                <!-- Stage 2: Primary School -->
                <div class="card" style="border-top: 4px solid var(--primary); display: flex; flex-direction: column;">
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 14px;">
                        <span style="font-size: 0.78rem; font-weight: 800; color: var(--primary); text-transform: uppercase; letter-spacing: 0.5px;">Preparatory Stage</span>
                        <span class="badge" style="background: var(--slate-100); color: var(--slate-700); font-weight: 700; font-size: 0.75rem; padding: 3px 8px; border-radius: 4px;">Grades 1 to 5</span>
                    </div>
                    <h3 style="margin-bottom: 10px; font-size: 1.25rem; color: var(--slate-900);">Primary School Education</h3>
                    <p style="color: var(--text-muted); font-size: 0.92rem; margin-bottom: 14px;">Building core literacy, numeracy, and scientific inquiry through interactive smart classes.</p>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.9rem; color: var(--slate-700); display: flex; flex-direction: column; gap: 8px;">
                        <li><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i> English, Hindi, Mathematics, &amp; EVS</li>
                        <li><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i> Computer education &amp; digital literacy</li>
                        <li><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i> Music, visual arts &amp; physical education</li>
                        <li><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i> Value education &amp; teamwork activities</li>
                    </ul>
                </div>

                <!-- Stage 3: Middle School -->
                <div class="card" style="border-top: 4px solid #059669; display: flex; flex-direction: column;">
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 14px;">
                        <span style="font-size: 0.78rem; font-weight: 800; color: #059669; text-transform: uppercase; letter-spacing: 0.5px;">Middle Stage</span>
                        <span class="badge" style="background: var(--slate-100); color: var(--slate-700); font-weight: 700; font-size: 0.75rem; padding: 3px 8px; border-radius: 4px;">Grades 6 to 8</span>
                    </div>
                    <h3 style="margin-bottom: 10px; font-size: 1.25rem; color: var(--slate-900);">Middle School Education</h3>
                    <p style="color: var(--text-muted); font-size: 0.92rem; margin-bottom: 14px;">Transitioning to specialized disciplines with rigorous problem solving and STEM application.</p>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.9rem; color: var(--slate-700); display: flex; flex-direction: column; gap: 8px;">
                        <li><i class="fas fa-check" style="color: #059669; margin-right: 8px;"></i> Science (Physics, Chemistry, Biology)</li>
                        <li><i class="fas fa-check" style="color: #059669; margin-right: 8px;"></i> Social Sciences &amp; Third Language (Sanskrit)</li>
                        <li><i class="fas fa-check" style="color: #059669; margin-right: 8px;"></i> Hands-on Science &amp; Computer laboratory labs</li>
                        <li><i class="fas fa-check" style="color: #059669; margin-right: 8px;"></i> Public speaking, debates &amp; sports training</li>
                    </ul>
                </div>

                <!-- Stage 4: Secondary School -->
                <div class="card" style="border-top: 4px solid #4F46E5; display: flex; flex-direction: column;">
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 14px;">
                        <span style="font-size: 0.78rem; font-weight: 800; color: #4F46E5; text-transform: uppercase; letter-spacing: 0.5px;">Secondary Stage</span>
                        <span class="badge" style="background: var(--slate-100); color: var(--slate-700); font-weight: 700; font-size: 0.75rem; padding: 3px 8px; border-radius: 4px;">Grades 9 &amp; 10</span>
                    </div>
                    <h3 style="margin-bottom: 10px; font-size: 1.25rem; color: var(--slate-900);">Secondary (CBSE Board)</h3>
                    <p style="color: var(--text-muted); font-size: 0.92rem; margin-bottom: 14px;">Mastery of board curriculum with in-depth practice, mock tests, and personal mentoring.</p>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.9rem; color: var(--slate-700); display: flex; flex-direction: column; gap: 8px;">
                        <li><i class="fas fa-check" style="color: #4F46E5; margin-right: 8px;"></i> Mathematics, Science, Social Science, English, Hindi</li>
                        <li><i class="fas fa-check" style="color: #4F46E5; margin-right: 8px;"></i> Regular CBSE pattern assessments &amp; remedial sessions</li>
                        <li><i class="fas fa-check" style="color: #4F46E5; margin-right: 8px;"></i> Practical experiment evaluations in hi-tech labs</li>
                        <li><i class="fas fa-check" style="color: #4F46E5; margin-right: 8px;"></i> Academic &amp; career guidance counseling</li>
                    </ul>
                </div>

                <!-- Stage 5: Senior Secondary -->
                <div class="card" style="border-top: 4px solid #DB2777; display: flex; flex-direction: column; grid-column: span 2;">
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 14px;">
                        <span style="font-size: 0.78rem; font-weight: 800; color: #DB2777; text-transform: uppercase; letter-spacing: 0.5px;">Senior Secondary Stage</span>
                        <span class="badge" style="background: var(--slate-100); color: var(--slate-700); font-weight: 700; font-size: 0.75rem; padding: 3px 8px; border-radius: 4px;">Grades 11 &amp; 12</span>
                    </div>
                    <h3 style="margin-bottom: 10px; font-size: 1.25rem; color: var(--slate-900);">Senior Secondary Specialization Streams</h3>
                    <p style="color: var(--text-muted); font-size: 0.92rem; margin-bottom: 14px;">Dedicated academic streams preparing students for premier university admissions and competitive examinations.</p>
                    
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 14px; margin-top: 10px;">
                        <div style="background: var(--slate-50); border: 1px solid var(--slate-200); border-radius: var(--radius-sm); padding: 12px;">
                            <strong style="color: var(--primary); display: block; margin-bottom: 4px;"><i class="fas fa-atom"></i> Science Stream</strong>
                            <span style="font-size: 0.85rem; color: var(--slate-600);">Physics, Chemistry, Mathematics (PCM) / Biology (PCB), Computer Science, Physical Education</span>
                        </div>
                        <div style="background: var(--slate-50); border: 1px solid var(--slate-200); border-radius: var(--radius-sm); padding: 12px;">
                            <strong style="color: #059669; display: block; margin-bottom: 4px;"><i class="fas fa-chart-line"></i> Commerce Stream</strong>
                            <span style="font-size: 0.85rem; color: var(--slate-600);">Accountancy, Business Studies, Economics, Mathematics / Applied Math, Informatics Practices</span>
                        </div>
                        <div style="background: var(--slate-50); border: 1px solid var(--slate-200); border-radius: var(--radius-sm); padding: 12px;">
                            <strong style="color: #7C3AED; display: block; margin-bottom: 4px;"><i class="fas fa-landmark"></i> Humanities Stream</strong>
                            <span style="font-size: 0.85rem; color: var(--slate-600);">History, Political Science, Geography, Economics, Psychology, English Core</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Syllabus Planner & Assessment System -->
        <div class="content-box" style="margin-bottom: 2rem;">
            <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 1rem; margin-bottom: 1.5rem; border-bottom: 2px solid var(--slate-100); padding-bottom: 0.75rem;">
                <div>
                    <h3 style="margin: 0; color: var(--primary); font-size: 1.35rem; display: flex; align-items: center; gap: 10px;">
                        <i class="fas fa-calendar-check"></i> Academic Planner &amp; Assessment Methodology
                    </h3>
                    <span style="color: var(--text-muted); font-size: 0.9rem;">Continuous and Comprehensive Evaluation (CCE) as per CBSE benchmarks</span>
                </div>
            </div>

            <div class="grid-2" style="gap: 24px;">
                <div style="background: var(--slate-50); border-radius: var(--radius-md); padding: 20px; border: 1px solid var(--slate-200);">
                    <h4 style="color: var(--slate-900); margin-bottom: 12px; display: flex; align-items: center; gap: 8px;">
                        <i class="fas fa-tasks" style="color: var(--primary);"></i> Structured Syllabus Execution
                    </h4>
                    <ul style="padding-left: 18px; margin: 0; color: var(--slate-700); font-size: 0.93rem; display: flex; flex-direction: column; gap: 10px;">
                        <li><strong>Planned Monthly Units:</strong> Every subject syllabus is broken down into monthly unit plans with clear learning objectives.</li>
                        <li><strong>Revision Buffer:</strong> The entire curriculum is concluded with ample buffer weeks for comprehensive revisions and mock board exams.</li>
                        <li><strong>Remedial Support:</strong> Personalized doubt-clearing sessions for students requiring supplementary attention.</li>
                        <li><strong>Practical Lab Hours:</strong> Mandatory laboratory periods in Science and Computer labs each week.</li>
                    </ul>
                </div>

                <div style="background: var(--slate-50); border-radius: var(--radius-md); padding: 20px; border: 1px solid var(--slate-200);">
                    <h4 style="color: var(--slate-900); margin-bottom: 12px; display: flex; align-items: center; gap: 8px;">
                        <i class="fas fa-award" style="color: var(--accent);"></i> Examination &amp; Evaluation Scheme
                    </h4>
                    <ul style="padding-left: 18px; margin: 0; color: var(--slate-700); font-size: 0.93rem; display: flex; flex-direction: column; gap: 10px;">
                        <li><strong>Periodic Assessments (PA-I &amp; PA-II):</strong> Formative evaluations to monitor ongoing chapter mastery.</li>
                        <li><strong>Term-End &amp; Mid-Term Exams:</strong> Comprehensive summative tests scheduled as per academic calendar.</li>
                        <li><strong>Internal Assessment (20 Marks):</strong> Portfolio, subject enrichment activities, lab practicals, and viva voce.</li>
                        <li><strong>Parent-Teacher Conferences:</strong> Regular updates and report cards shared with parents to track progress.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Bottom Quick Actions -->
        <div class="callout callout-gold" style="margin-top: 1rem; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem;">
            <div>
                <h4 style="margin: 0 0 4px; color: var(--slate-900); font-size: 1.15rem;">Ready to Enroll Your Child?</h4>
                <p style="margin: 0; color: var(--slate-600); font-size: 0.92rem;">Admissions open for <?php echo htmlspecialchars($school['session']); ?> across Nursery to Grade 10+2.</p>
            </div>
            <div style="display: flex; gap: 10px; flex-wrap: wrap;">
                <a href="online-admission.php" class="btn btn-action-primary" style="padding: 0.6rem 1.4rem;">
                    <i class="fas fa-user-graduate"></i> Online Admission
                </a>
                <a href="fee-structure.php" class="btn" style="background: #FFFFFF; color: var(--slate-800); border: 1px solid var(--slate-300); padding: 0.6rem 1.4rem; font-weight: 700;">
                    <i class="fas fa-receipt"></i> Fee Structure
                </a>
            </div>
        </div>

    </div>

</main>

<?php include 'footer.php'; ?>