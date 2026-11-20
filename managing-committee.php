<?php 
require_once __DIR__ . '/config.php';
include 'header.php'; 
?>

<main id="content" class="site-main">

    <!-- Standardized SEO-Optimized Page Header Banner -->
    <?php render_page_banner(); ?>

    <!-- Page Content Container -->
    <div class="container page-container">
        
        <!-- Intro Card -->
        <div class="content-box" style="margin-bottom: 2rem;">
            <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 1rem;">
                <div>
                    <span class="section-tag section-tag-crimson"><i class="fas fa-shield-halved"></i> Governance &amp; Leadership</span>
                    <h2 style="font-size: 2.1rem; color: var(--navy-950); margin-bottom: 4px;">Institutional Governance &amp; SMC</h2>
                    <p style="margin: 0; color: var(--slate-600); font-size: 0.96rem;">
                        <strong><?php echo htmlspecialchars($school['name']); ?></strong> is managed by the distinguished <strong><?php echo htmlspecialchars($school['society']); ?></strong>, guided by educationists, community leaders, and parent representatives.
                    </p>
                </div>
                <div style="background: var(--navy-50); border: 1px solid #bfdbfe; border-radius: var(--radius-md); padding: 12px 20px; font-size: 0.88rem;">
                    <strong style="color: var(--navy-950); display: block;">CBSE Affiliation No: <?php echo htmlspecialchars($school['affiliation_no']); ?></strong>
                    <span style="color: var(--crimson-700); font-weight: 700;">Managed by <?php echo htmlspecialchars($school['society']); ?></span>
                </div>
            </div>
        </div>

        <!-- 1. School Management Committee (SMC) -->
        <div class="content-box" style="margin-bottom: 2rem;">
            <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 0.5rem; margin-bottom: 1.25rem; border-bottom: 2px solid var(--slate-100); padding-bottom: 0.75rem;">
                <div>
                    <h3 style="margin: 0; color: var(--navy-950); font-size: 1.35rem; display: flex; align-items: center; gap: 10px;">
                        <i class="fas fa-users-gear" style="color: var(--accent);"></i> School Management Committee (SMC)
                    </h3>
                    <span style="color: var(--slate-500); font-size: 0.88rem;">Constituted as per CBSE Affiliation Bye-Laws</span>
                </div>
                <span class="badge-country" style="background: var(--navy-50); color: var(--navy-900); font-weight: 800;">Constitutional Body</span>
            </div>

            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th style="width: 8%;">S.NO.</th>
                            <th style="width: 28%;">NAME</th>
                            <th style="width: 22%;">DESIGNATION</th>
                            <th style="width: 22%;">OCCUPATION</th>
                            <th>RESIDENCE / AREA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>1</td><td><strong>MS. JYOTI</strong></td><td><span class="badge-country" style="background: #fee2e2; color: #991b1b; font-weight: 800;">MEMBER SECRETARY / PRINCIPAL</span></td><td>Principal (BCA, MCA, B.Ed)</td><td>Palwal</td></tr>
                        <tr><td>2</td><td><strong>SH. RAJENDER SINGH</strong></td><td><span class="badge-country" style="background: #fef3c7; color: #92400e; font-weight: 800;">PRESIDENT / CHAIRMAN</span></td><td>Educationist &amp; Social Worker</td><td>Prithla</td></tr>
                        <tr><td>3</td><td><strong>SH. VIRENDER KUMAR</strong></td><td><span class="badge-country" style="background: #e0e7ff; color: #3730a3; font-weight: 800;">VICE PRESIDENT</span></td><td>Social Worker</td><td>Prithla</td></tr>
                        <tr><td>4</td><td><strong>SH. RAVINDER KUMAR</strong></td><td>Special Educator</td><td>Teaching</td><td>Palwal</td></tr>
                        <tr><td>5</td><td><strong>SH. HARINDER KUMAR</strong></td><td>Teacher Representative / Counsellor</td><td>Teaching</td><td>Palwal</td></tr>
                        <tr><td>6</td><td><strong>SMT. SUNITA RANI</strong></td><td>Teacher Representative (PGT)</td><td>Teaching</td><td>Prithla</td></tr>
                        <tr><td>7</td><td><strong>SH. DINESH TEWATIA</strong></td><td>Parent Representative</td><td>Agriculture / Business</td><td>Sehrala</td></tr>
                        <tr><td>8</td><td><strong>SMT. REENA CHAUDHARY</strong></td><td>Parent Representative</td><td>Homemaker</td><td>Chhaprolla</td></tr>
                        <tr><td>9</td><td><strong>DR. SURESH SHARMA</strong></td><td>Educationist</td><td>Professor</td><td>Palwal</td></tr>
                        <tr><td>10</td><td><strong>SMT. KAVITA SINGH</strong></td><td>Female Educationist</td><td>Lecturer</td><td>Palwal</td></tr>
                        <tr><td>11</td><td><strong>PRINCIPAL, JNV PALWAL</strong></td><td>CBSE Nominee / KV / JNV</td><td>Education Administration</td><td>Palwal</td></tr>
                        <tr><td>12</td><td><strong>PRINCIPAL, GSSS PRITHLA</strong></td><td>State Education Dept. Nominee</td><td>Education Administration</td><td>Prithla</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- 2. Governing Society Executive Body -->
        <div class="content-box" style="margin-bottom: 2rem;">
            <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 0.5rem; margin-bottom: 1.25rem; border-bottom: 2px solid var(--slate-100); padding-bottom: 0.75rem;">
                <div>
                    <h3 style="margin: 0; color: var(--navy-950); font-size: 1.35rem; display: flex; align-items: center; gap: 10px;">
                        <i class="fas fa-landmark" style="color: var(--crimson-700);"></i> Beer Bati Education Society
                    </h3>
                    <span style="color: var(--slate-500); font-size: 0.88rem;">Sponsoring Body &amp; Board of Trustees</span>
                </div>
                <span class="badge-country" style="background: var(--gold-100); color: var(--gold-700); font-weight: 800;">Registered Society</span>
            </div>

            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th style="width: 8%;">S.NO.</th>
                            <th style="width: 32%;">NAME</th>
                            <th style="width: 25%;">DESIGNATION IN SOCIETY</th>
                            <th>ADDRESS &amp; DISTRICT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>1</td><td><strong>SH. RAJENDER SINGH</strong></td><td><span class="badge-country" style="background: #e0e7ff; color: #3730a3; font-weight: 800;">PRESIDENT</span></td><td>Village Prithla, Distt. Palwal</td></tr>
                        <tr><td>2</td><td><strong>SH. VIRENDER KUMAR</strong></td><td><span class="badge-country" style="background: #e0e7ff; color: #3730a3; font-weight: 800;">VICE PRESIDENT</span></td><td>Village Prithla, Distt. Palwal</td></tr>
                        <tr><td>3</td><td><strong>SH. BHARAT BHUSHAN</strong></td><td><span class="badge-country" style="background: #dcfce7; color: #166534; font-weight: 800;">SECRETARY</span></td><td>Palwal, Haryana</td></tr>
                        <tr><td>4</td><td><strong>SH. MUKESH KUMAR</strong></td><td><span class="badge-country" style="background: #fef3c7; color: #92400e; font-weight: 800;">TREASURER</span></td><td>Palwal, Haryana</td></tr>
                        <tr><td>5</td><td><strong>MS. JYOTI</strong></td><td>Executive Member</td><td>Palwal, Haryana</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- 3. POSH & Child Safety Redressal Committee -->
        <div class="content-box">
            <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 0.5rem; margin-bottom: 1.25rem; border-bottom: 2px solid var(--slate-100); padding-bottom: 0.75rem;">
                <div>
                    <h3 style="margin: 0; color: var(--navy-950); font-size: 1.35rem; display: flex; align-items: center; gap: 10px;">
                        <i class="fas fa-shield-halved" style="color: #10b981;"></i> Internal Complaints &amp; Child Safety Committee (POCSO &amp; POSH)
                    </h3>
                    <span style="color: var(--slate-500); font-size: 0.88rem;">Zero-tolerance policy for child abuse and student safety</span>
                </div>
                <span class="badge-country" style="background: #ecfdf5; color: #065f46; font-weight: 800;">Statutory Committee</span>
            </div>

            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th style="width: 8%;">S.NO.</th>
                            <th style="width: 32%;">NAME</th>
                            <th style="width: 25%;">COMMITTEE ROLE</th>
                            <th>DESIGNATION IN SCHOOL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>1</td><td><strong>MS. JYOTI</strong></td><td><span class="badge-country" style="background: #dcfce7; color: #166534; font-weight: 800;">CHAIRPERSON</span></td><td>Principal</td></tr>
                        <tr><td>2</td><td><strong>HARINDER KUMAR</strong></td><td>Member Secretary</td><td>School Counsellor / Wellness</td></tr>
                        <tr><td>3</td><td><strong>RAVINDER KUMAR</strong></td><td>Faculty Member</td><td>Special Educator</td></tr>
                        <tr><td>4</td><td><strong>POOJA CHAUHAN</strong></td><td>Faculty Member</td><td>PGT English</td></tr>
                        <tr><td>5</td><td><strong>SMT. REENA CHAUDHARY</strong></td><td>Parent Member</td><td>PTA Representative</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</main>

<?php include 'footer.php'; ?>
