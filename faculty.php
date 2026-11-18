<?php 
require_once __DIR__ . '/config.php';
include 'header.php'; 

// Official Faculty Roster as per CBSE Mandatory Disclosure (Total 29 Teachers)
$faculty_roster = [
    ['sr' => 1,  'name' => 'Ms. Jyoti',            'qualification' => 'BCA, MCA, B.Ed.',      'designation' => 'Principal',          'department' => 'School Leadership'],
    ['sr' => 2,  'name' => 'Ravinder Kumar',       'qualification' => 'M.A., B.Ed. (Spl)',    'designation' => 'Special Educator',   'department' => 'Special Education'],
    ['sr' => 3,  'name' => 'Harinder Kumar',       'qualification' => 'M.A. (Psychology)',    'designation' => 'Wellness / Counsellor', 'department' => 'Student Counselling'],
    ['sr' => 4,  'name' => 'Amit Sharma',          'qualification' => 'M.Sc., B.Ed.',         'designation' => 'PGT (Physics)',      'department' => 'Senior Secondary (Science)'],
    ['sr' => 5,  'name' => 'Neeraj Verma',         'qualification' => 'M.Sc., B.Ed.',         'designation' => 'PGT (Chemistry)',    'department' => 'Senior Secondary (Science)'],
    ['sr' => 6,  'name' => 'Sunita Rani',          'qualification' => 'M.Sc., B.Ed.',         'designation' => 'PGT (Biology)',      'department' => 'Senior Secondary (Science)'],
    ['sr' => 7,  'name' => 'Rajesh Rawat',         'qualification' => 'M.Sc., B.Ed.',         'designation' => 'PGT (Mathematics)',  'department' => 'Senior Secondary (Maths)'],
    ['sr' => 8,  'name' => 'Kavita Singh',         'qualification' => 'M.Com, B.Ed.',         'designation' => 'PGT (Commerce)',     'department' => 'Senior Secondary (Commerce)'],
    ['sr' => 9,  'name' => 'Dinesh Tewatia',       'qualification' => 'M.A., B.Ed.',          'designation' => 'PGT (Economics)',    'department' => 'Senior Secondary (Commerce/Arts)'],
    ['sr' => 10, 'name' => 'Pooja Chauhan',        'qualification' => 'M.A., B.Ed.',          'designation' => 'PGT (English)',      'department' => 'Senior Secondary (Languages)'],
    ['sr' => 11, 'name' => 'Suman Lata',           'qualification' => 'M.A., B.Ed.',          'designation' => 'PGT (Hindi)',        'department' => 'Senior Secondary (Languages)'],
    ['sr' => 12, 'name' => 'Gaurav Kumar',         'qualification' => 'MCA, B.Ed.',           'designation' => 'PGT (Computer Science/IT)', 'department' => 'Computer Science'],
    ['sr' => 13, 'name' => 'Virender Bhati',       'qualification' => 'B.Sc., B.Ed.',         'designation' => 'TGT (Science)',      'department' => 'Middle Wing'],
    ['sr' => 14, 'name' => 'Meenakshi Sharma',     'qualification' => 'B.Sc., B.Ed.',         'designation' => 'TGT (Mathematics)',  'department' => 'Middle Wing'],
    ['sr' => 15, 'name' => 'Rakesh Sorot',         'qualification' => 'M.A., B.Ed.',          'designation' => 'TGT (Social Science)','department' => 'Middle Wing'],
    ['sr' => 16, 'name' => 'Anuradha Devi',        'qualification' => 'M.A., B.Ed.',          'designation' => 'TGT (English)',      'department' => 'Middle Wing'],
    ['sr' => 17, 'name' => 'Mamta Rani',           'qualification' => 'M.A., B.Ed.',          'designation' => 'TGT (Hindi)',        'department' => 'Middle Wing'],
    ['sr' => 18, 'name' => 'Suresh Chand',         'qualification' => 'M.A., B.Ed.',          'designation' => 'TGT (Sanskrit)',     'department' => 'Middle Wing'],
    ['sr' => 19, 'name' => 'Geeta Kumari',         'qualification' => 'B.A., B.Ed.',          'designation' => 'PRT (Primary Teacher)','department' => 'Primary Wing'],
    ['sr' => 20, 'name' => 'Priya Sharma',          'qualification' => 'B.Sc., B.Ed.',         'designation' => 'PRT (Primary Teacher)','department' => 'Primary Wing'],
    ['sr' => 21, 'name' => 'Reena Chaudhary',      'qualification' => 'B.A., B.Ed.',          'designation' => 'PRT (Primary Teacher)','department' => 'Primary Wing'],
    ['sr' => 22, 'name' => 'Anita Devi',           'qualification' => 'B.A., B.Ed.',          'designation' => 'PRT (Primary Teacher)','department' => 'Primary Wing'],
    ['sr' => 23, 'name' => 'Monika Gupta',         'qualification' => 'B.Com, B.Ed.',         'designation' => 'PRT (Primary Teacher)','department' => 'Primary Wing'],
    ['sr' => 24, 'name' => 'Babita Rawat',         'qualification' => 'B.Sc., B.Ed.',         'designation' => 'PRT (Primary Teacher)','department' => 'Primary Wing'],
    ['sr' => 25, 'name' => 'Seema Verma',          'qualification' => 'B.A., D.El.Ed.',       'designation' => 'PRT (Primary Teacher)','department' => 'Primary Wing'],
    ['sr' => 26, 'name' => 'Kusum Lata',           'qualification' => 'N.T.T., B.A.',         'designation' => 'NTT (Nursery Trained)','department' => 'Pre-Primary Wing'],
    ['sr' => 27, 'name' => 'Varsha Rani',          'qualification' => 'N.T.T., B.A.',         'designation' => 'NTT (Nursery Trained)','department' => 'Pre-Primary Wing'],
    ['sr' => 28, 'name' => 'Pooja Rani',           'qualification' => 'N.T.T., B.A.',         'designation' => 'NTT (Nursery Trained)','department' => 'Pre-Primary Wing'],
    ['sr' => 29, 'name' => 'Devender Singh',       'qualification' => 'B.P.Ed., M.P.Ed.',     'designation' => 'PTI (Physical Training)', 'department' => 'Physical Education']
];
?>

<main id="content" class="site-main">

    <!-- Page Header -->
    <div class="page-header">
        <div class="container page-header-content">
            <h1>Our Teaching Staff &amp; Faculty</h1>
            <ul class="breadcrumbs">
                <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                <li><span class="separator"><i class="fas fa-chevron-right"></i></span></li>
                <li><span>About Us</span></li>
                <li><span class="separator"><i class="fas fa-chevron-right"></i></span></li>
                <li><span>Faculty Directory</span></li>
            </ul>
        </div>
    </div>

    <!-- Page Content Container -->
    <div class="container page-container">
        <div class="content-box">
            
            <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px; margin-bottom: 2rem;">
                <div>
                    <span class="section-tag section-tag-gold"><i class="fas fa-users"></i> Qualified &amp; Caring Mentors</span>
                    <h2 style="font-size: 2.1rem; color: var(--navy-950); margin-bottom: 4px;">School Faculty &amp; Mentors</h2>
                    <p style="color: var(--slate-600); margin: 0;">29 full-time qualified educators fostering a healthy 20:1 student-teacher ratio.</p>
                </div>
                <div>
                    <span class="badge-country" style="background: var(--navy-50); color: var(--navy-900); font-weight: 800; font-size: 0.95rem; padding: 8px 18px; border: 1px solid #bfdbfe;">
                        <i class="fas fa-check-circle" style="color: #2563eb;"></i> Teacher-Section Ratio: 1.5
                    </span>
                </div>
            </div>

            <!-- Key Figures Cards -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 24px; margin-bottom: 3rem;">
                
                <!-- Principal Card -->
                <div style="background: #ffffff; border: 1px solid var(--slate-200); border-radius: var(--radius-lg); padding: 24px; box-shadow: var(--shadow-sm); display: flex; align-items: center; gap: 18px; border-top: 4px solid var(--crimson-700);">
                    <div style="width: 76px; height: 76px; border-radius: 50%; overflow: hidden; border: 3px solid #ffffff; box-shadow: var(--shadow-md); flex-shrink: 0;">
                        <img src="images/principal.webp" alt="Principal Ms. Jyoti" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div>
                        <h4 style="font-size: 1.15rem; color: var(--navy-950); margin-bottom: 2px;">Ms. Jyoti</h4>
                        <span style="font-size: 0.84rem; font-weight: 700; color: var(--crimson-700); display: block;">Principal (BCA, MCA, B.Ed)</span>
                        <p style="font-size: 0.8rem; color: var(--slate-500); margin: 4px 0 0;">Dedicated leadership guiding academic innovation and character building.</p>
                    </div>
                </div>

                <!-- Special Educator Card -->
                <div style="background: #ffffff; border: 1px solid var(--slate-200); border-radius: var(--radius-lg); padding: 24px; box-shadow: var(--shadow-sm); display: flex; align-items: center; gap: 18px; border-top: 4px solid var(--navy-800);">
                    <div style="width: 76px; height: 76px; border-radius: 50%; background: var(--navy-50); color: var(--navy-800); display: flex; align-items: center; justify-content: center; font-size: 2rem; flex-shrink: 0;">
                        <i class="fas fa-hands-holding-child"></i>
                    </div>
                    <div>
                        <h4 style="font-size: 1.15rem; color: var(--navy-950); margin-bottom: 2px;">Ravinder Kumar</h4>
                        <span style="font-size: 0.84rem; font-weight: 700; color: var(--navy-800); display: block;">Special Educator</span>
                        <p style="font-size: 0.8rem; color: var(--slate-500); margin: 4px 0 0;">Inclusive pedagogical guidance catering to distinct student abilities.</p>
                    </div>
                </div>

                <!-- Wellness Teacher Card -->
                <div style="background: #ffffff; border: 1px solid var(--slate-200); border-radius: var(--radius-lg); padding: 24px; box-shadow: var(--shadow-sm); display: flex; align-items: center; gap: 18px; border-top: 4px solid var(--accent);">
                    <div style="width: 76px; height: 76px; border-radius: 50%; background: var(--gold-100); color: var(--gold-700); display: flex; align-items: center; justify-content: center; font-size: 2rem; flex-shrink: 0;">
                        <i class="fas fa-heart-pulse"></i>
                    </div>
                    <div>
                        <h4 style="font-size: 1.15rem; color: var(--navy-950); margin-bottom: 2px;">Harinder Kumar</h4>
                        <span style="font-size: 0.84rem; font-weight: 700; color: var(--gold-700); display: block;">Counsellor &amp; Wellness Teacher</span>
                        <p style="font-size: 0.8rem; color: var(--slate-500); margin: 4px 0 0;">Student mental health, emotional wellness, and positive development.</p>
                    </div>
                </div>

            </div>

            <!-- Complete Faculty Table (29 Teachers) -->
            <div style="margin-bottom: 2rem;">
                <h3 style="color: var(--navy-950); font-size: 1.35rem; font-weight: 800; margin-bottom: 14px; display: flex; align-items: center; gap: 8px;">
                    <i class="fas fa-id-card-clip" style="color: var(--accent);"></i> Faculty &amp; Teaching Staff Roster
                </h3>

                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th style="width: 8%;">S.NO</th>
                                <th style="width: 28%;">STAFF NAME</th>
                                <th style="width: 24%;">QUALIFICATION</th>
                                <th style="width: 22%;">DESIGNATION</th>
                                <th>DEPARTMENT / WING</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($faculty_roster as $faculty): ?>
                                <tr>
                                    <td><?php echo $faculty['sr']; ?></td>
                                    <td><strong><?php echo htmlspecialchars($faculty['name']); ?></strong></td>
                                    <td><?php echo htmlspecialchars($faculty['qualification']); ?></td>
                                    <td>
                                        <span class="badge-country" style="background: <?php echo ($faculty['sr'] == 1 ? '#fee2e2; color: #991b1b;' : (strpos($faculty['designation'], 'PGT') !== false ? '#e0e7ff; color: #3730a3;' : '#f1f5f9; color: #334155;')); ?>">
                                            <?php echo htmlspecialchars($faculty['designation']); ?>
                                        </span>
                                    </td>
                                    <td><?php echo htmlspecialchars($faculty['department']); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="callout callout-gold">
                <p style="margin: 0; font-size: 0.9rem; color: var(--slate-700);">
                    <strong>Continuous Professional Development:</strong> All faculty members regularly participate in CBSE Capacity Building Programmes (CBP), NEP-2020 workshops, and pedagogical enhancement seminars to ensure state-of-the-art classroom teaching.
                </p>
            </div>

        </div>
    </div>

</main>

<?php include 'footer.php'; ?>
