<?php 
require_once __DIR__ . '/config.php';
include 'header.php'; 
?>

<main id="content" class="site-main">

    <!-- Page Header -->
    <div class="page-header">
        <div class="container page-header-content">
            <h1>Principal's Desk</h1>
            <ul class="breadcrumbs">
                <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                <li><span class="separator"><i class="fas fa-chevron-right"></i></span></li>
                <li><span>About Us</span></li>
                <li><span class="separator"><i class="fas fa-chevron-right"></i></span></li>
                <li><span>Principal's Desk</span></li>
            </ul>
        </div>
    </div>

    <!-- Page Content Container -->
    <div class="container page-container">
        <div class="content-box">
            
            <div style="display: flex; gap: 48px; align-items: flex-start; flex-wrap: wrap;">
                
                <!-- Principal Portrait -->
                <div style="flex: 0 0 320px; text-align: center; margin: 0 auto;">
                    <div style="background: #ffffff; border-radius: var(--radius-xl); padding: 12px; box-shadow: var(--shadow-lg); border: 1px solid var(--slate-200); border-top: 5px solid var(--secondary);">
                        <img src="images/principal.webp" alt="Principal <?php echo htmlspecialchars($school['principal']); ?>" style="border-radius: var(--radius-lg); width: 100%; height: auto; display: block; object-fit: cover;">
                        <div style="margin-top: 14px; padding-bottom: 8px;">
                            <h3 style="font-size: 1.25rem; font-weight: 800; color: var(--navy-950); margin-bottom: 2px;"><?php echo htmlspecialchars($school['principal_name']); ?></h3>
                            <span style="display: block; font-size: 0.86rem; font-weight: 700; color: var(--crimson-700);"><?php echo htmlspecialchars($school['principal_qual']); ?></span>
                            <span style="display: block; font-size: 0.82rem; color: var(--slate-500); margin-top: 2px;">Principal, <?php echo htmlspecialchars($school['name']); ?></span>
                        </div>
                    </div>

                    <div class="callout callout-gold" style="margin-top: 24px; text-align: left;">
                        <h4 style="font-size: 0.96rem; font-weight: 800; color: var(--navy-950); margin-bottom: 6px;"><i class="fas fa-envelope" style="color: var(--accent);"></i> Contact Principal</h4>
                        <p style="font-size: 0.86rem; color: var(--slate-600); margin: 0;">
                            Email: <a href="mailto:<?php echo htmlspecialchars($school['email']); ?>" style="color: var(--navy-900); font-weight: 700;"><?php echo htmlspecialchars($school['email']); ?></a><br>
                            Phone: <a href="tel:<?php echo htmlspecialchars($school['phone1']); ?>" style="color: var(--navy-900); font-weight: 700;"><?php echo htmlspecialchars($school['phone1']); ?></a>
                        </p>
                    </div>
                </div>

                <!-- Message Content (Exact from Image 2) -->
                <div style="flex: 1 1 500px;">
                    <span class="section-tag section-tag-crimson"><i class="fas fa-quote-left"></i> Words of Inspiration</span>
                    <h2 style="font-size: 2.1rem; color: var(--navy-950); margin-bottom: 20px;">Welcome to The Discovery International</h2>

                    <div style="font-size: 1.05rem; font-weight: 700; color: var(--navy-800); margin-bottom: 18px; line-height: 1.5;">
                        Dear Students, Parents, and Staff,
                    </div>

                    <p style="font-size: 1.02rem; color: var(--slate-700); line-height: 1.8; margin-bottom: 18px;">
                        Welcome to The Discovery International, where every child’s journey is guided with purpose, care, and excellence.
                    </p>

                    <p style="font-size: 1.02rem; color: var(--slate-700); line-height: 1.8; margin-bottom: 18px;">
                        Our unwavering commitment is to create a nurturing and dynamic learning environment that encourages students to explore their abilities, express creativity, and strive for excellence—both in and beyond the classroom. We place strong emphasis on character-building, values-based education, and leadership development, ensuring our students are well-prepared to thrive in today's fast-changing world.
                    </p>

                    <p style="font-size: 1.02rem; color: var(--slate-700); line-height: 1.8; margin-bottom: 18px;">
                        With a team of passionate educators, modern infrastructure, and a student-centered approach, we aim to empower learners with the knowledge, critical thinking skills, and confidence needed for lifelong success.
                    </p>

                    <p style="font-size: 1.02rem; color: var(--slate-700); line-height: 1.8; margin-bottom: 18px;">
                        We deeply value the partnership between home and school. When educators and families work together in harmony, we create the strongest foundation for every child’s well-being and achievement.
                    </p>

                    <p style="font-size: 1.02rem; color: var(--slate-700); line-height: 1.8; margin-bottom: 24px;">
                        Thank you for placing your trust in us. Let us continue to inspire, educate, and empower—shaping compassionate, capable, and confident global citizens.
                    </p>

                    <div style="border-top: 2px solid var(--slate-200); padding-top: 18px; margin-top: 24px;">
                        <h4 style="font-size: 1.15rem; color: var(--navy-950); margin-bottom: 2px;">Principal</h4>
                        <span style="font-size: 0.95rem; font-weight: 700; color: var(--crimson-700);">The Discovery International</span>
                    </div>

                    <div style="margin-top: 30px; display: flex; gap: 14px; flex-wrap: wrap;">
                        <a href="admission-process.php" class="btn btn-primary"><i class="fas fa-clipboard-list"></i> Admission Procedure</a>
                        <a href="contact-us.php" class="btn btn-crimson"><i class="fas fa-calendar-check"></i> Book Campus Visit</a>
                    </div>
                </div>

            </div>

        </div>
    </div>

</main>

<?php include 'footer.php'; ?>
