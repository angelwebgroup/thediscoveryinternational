<?php 
require_once __DIR__ . '/config.php';
include 'header.php'; 
?>

<main id="content" class="site-main">

    <!-- Page Header -->
    <div class="page-header">
        <div class="container page-header-content">
            <h1>School Facilities &amp; Campus</h1>
            <ul class="breadcrumbs">
                <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                <li><span class="separator"><i class="fas fa-chevron-right"></i></span></li>
                <li><span>Facilities</span></li>
                <li><span class="separator"><i class="fas fa-chevron-right"></i></span></li>
                <li><span>Campus Infrastructure</span></li>
            </ul>
        </div>
    </div>

    <!-- Page Content Container -->
    <div class="container page-container">
        <div class="content-box">
            
            <div style="margin-bottom: 2.5rem;">
                <span class="section-tag section-tag-gold"><i class="fas fa-building"></i> World-Class Learning Environment</span>
                <h2 style="font-size: 2.2rem; color: var(--navy-950); margin-bottom: 12px;">Campus &amp; Facilities Overview</h2>
                <p style="font-size: 1.05rem; color: var(--slate-700); line-height: 1.8; margin-bottom: 18px;">
                    <strong>The Discovery International School</strong> offers a sprawling 6,070 sq. mtr. campus equipped with modern infrastructure to support academic excellence and holistic development. Our campus includes well-ventilated classrooms, high-tech laboratories, and lush open spaces that foster creativity, physical fitness, and lifelong learning.
                </p>
            </div>

            <!-- Campus Metric Badges -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px; margin-bottom: 3rem;">
                <div style="background: var(--navy-50); border: 1px solid #dbeafe; border-radius: var(--radius-md); padding: 18px 20px; text-align: center;">
                    <div style="font-size: 1.8rem; font-weight: 900; color: var(--navy-900);"><?php echo htmlspecialchars($school['campus_area']); ?></div>
                    <span style="font-size: 0.82rem; font-weight: 700; color: var(--slate-600); text-transform: uppercase;">Total Campus Area</span>
                </div>
                <div style="background: var(--gold-50); border: 1px solid #fef3c7; border-radius: var(--radius-md); padding: 18px 20px; text-align: center;">
                    <div style="font-size: 1.8rem; font-weight: 900; color: var(--gold-700);"><?php echo htmlspecialchars($school['labs_count_size']); ?></div>
                    <span style="font-size: 0.82rem; font-weight: 700; color: var(--slate-600); text-transform: uppercase;">No. &amp; Size of Laboratories</span>
                </div>
                <div style="background: var(--crimson-50); border: 1px solid #ffe4e6; border-radius: var(--radius-md); padding: 18px 20px; text-align: center;">
                    <div style="font-size: 1.8rem; font-weight: 900; color: var(--crimson-700);"><?php echo htmlspecialchars($school['classroom_size']); ?></div>
                    <span style="font-size: 0.82rem; font-weight: 700; color: var(--slate-600); text-transform: uppercase;">Classroom Dimensions</span>
                </div>
                <div style="background: #ecfdf5; border: 1px solid #d1fae5; border-radius: var(--radius-md); padding: 18px 20px; text-align: center;">
                    <div style="font-size: 1.8rem; font-weight: 900; color: #059669;">100% Wi-Fi</div>
                    <span style="font-size: 0.82rem; font-weight: 700; color: var(--slate-600); text-transform: uppercase;">Campus Internet Facility</span>
                </div>
            </div>

            <!-- Campus Image Grid -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 20px; margin-bottom: 3.5rem;">
                <div style="border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-sm); border: 1px solid var(--slate-200);">
                    <img src="images/school-building.jpg" alt="Main Academic Block" style="width: 100%; height: 260px; object-fit: cover;">
                    <div style="padding: 14px; background: #ffffff;">
                        <h5 style="color: var(--navy-950); margin-bottom: 2px;">Main Academic Building</h5>
                        <p style="font-size: 0.82rem; color: var(--slate-500); margin: 0;">Spacious, naturally lit, and well-ventilated learning blocks.</p>
                    </div>
                </div>

                <div style="border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-sm); border: 1px solid var(--slate-200);">
                    <img src="slider/slider1.webp" alt="Playground and Campus" style="width: 100%; height: 260px; object-fit: cover;">
                    <div style="padding: 14px; background: #ffffff;">
                        <h5 style="color: var(--navy-950); margin-bottom: 2px;">Campus Greenery &amp; Buses</h5>
                        <p style="font-size: 0.82rem; color: var(--slate-500); margin: 0;">Safe drop-off bays, playground courts, and green surroundings.</p>
                    </div>
                </div>

                <div style="border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-sm); border: 1px solid var(--slate-200);">
                    <img src="images/gallery/gallery1.webp" alt="Awards and Activities" style="width: 100%; height: 260px; object-fit: cover;">
                    <div style="padding: 14px; background: #ffffff;">
                        <h5 style="color: var(--navy-950); margin-bottom: 2px;">Activity &amp; Award Grounds</h5>
                        <p style="font-size: 0.82rem; color: var(--slate-500); margin: 0;">Dedicated zones for student sports ceremonies and events.</p>
                    </div>
                </div>
            </div>

            <!-- Detailed Facility Pillars (Exact from Image 5) -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(460px, 1fr)); gap: 32px;">
                
                <!-- 1. Academic & Learning Spaces -->
                <div style="background: var(--slate-50); border: 1px solid var(--slate-200); border-radius: var(--radius-lg); padding: 28px; border-top: 4px solid var(--navy-900);">
                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 16px;">
                        <div style="width: 44px; height: 44px; border-radius: 50%; background: var(--navy-50); color: var(--navy-800); display: flex; align-items: center; justify-content: center; font-size: 1.25rem;">
                            <i class="fas fa-flask"></i>
                        </div>
                        <h3 style="color: var(--navy-950); font-size: 1.3rem; margin: 0;">Academic &amp; Learning Spaces</h3>
                    </div>
                    <ul class="clean-bullet-list" style="margin: 0;">
                        <li><strong>Well-equipped Science Laboratories:</strong> Specialized modern facilities for Physics, Chemistry, and Biology practicals.</li>
                        <li><strong>Computer &amp; Mathematics Labs:</strong> High-speed connected systems and modern interactive teaching aids.</li>
                        <li><strong>Comprehensive Central Library:</strong> Enriched with vast reference materials, encyclopedias, journals, and digital e-resources.</li>
                        <li><strong>Smart Classrooms:</strong> Interactive touchpanels and audiovisual projection for engaging conceptual learning.</li>
                        <li><strong>Multiple Activity Rooms:</strong> Dedicated spaces for fine arts, painting, craft, design, and innovation.</li>
                    </ul>
                </div>

                <!-- 2. Sports & Recreational Facilities -->
                <div style="background: var(--slate-50); border: 1px solid var(--slate-200); border-radius: var(--radius-lg); padding: 28px; border-top: 4px solid var(--accent);">
                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 16px;">
                        <div style="width: 44px; height: 44px; border-radius: 50%; background: var(--gold-100); color: var(--gold-700); display: flex; align-items: center; justify-content: center; font-size: 1.25rem;">
                            <i class="fas fa-medal"></i>
                        </div>
                        <h3 style="color: var(--navy-950); font-size: 1.3rem; margin: 0;">Sports &amp; Recreational Facilities</h3>
                    </div>
                    <ul class="clean-bullet-list" style="margin: 0;">
                        <li><strong>Spacious Outdoor Playgrounds:</strong> Multi-sport grounds for football, volleyball, cricket, and basketball courts.</li>
                        <li><strong>Indoor Games Arena:</strong> Professional setups for table tennis, carrom, chess, and strategic mind games.</li>
                        <li><strong>Swimming &amp; Splash Pool:</strong> Specially designed shallow splash pool with trained lifeguards for young learners.</li>
                        <li><strong>Yoga &amp; Mindfulness Spaces:</strong> Dedicated open-air and indoor areas for daily yoga, physical drill, and mindfulness.</li>
                    </ul>
                </div>

                <!-- 3. Safety & Wellness -->
                <div style="background: var(--slate-50); border: 1px solid var(--slate-200); border-radius: var(--radius-lg); padding: 28px; border-top: 4px solid var(--crimson-700);">
                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 16px;">
                        <div style="width: 44px; height: 44px; border-radius: 50%; background: var(--crimson-50); color: var(--crimson-700); display: flex; align-items: center; justify-content: center; font-size: 1.25rem;">
                            <i class="fas fa-heart-pulse"></i>
                        </div>
                        <h3 style="color: var(--navy-950); font-size: 1.3rem; margin: 0;">Safety &amp; Wellness</h3>
                    </div>
                    <ul class="clean-bullet-list" style="margin: 0;">
                        <li><strong>24/7 CCTV Campus Surveillance:</strong> High-definition camera monitoring across gates, corridors, and campus perimeters.</li>
                        <li><strong>First-Aid &amp; Medical Room:</strong> Full-time first-aid station with qualified attendants and regular student health check-ups.</li>
                        <li><strong>Fire Safety Compliance:</strong> Advanced fire fighting systems, extinguishers, smoke alarms, and wide emergency exits.</li>
                        <li><strong>Barrier-Free Inclusive Access:</strong> Accessibility ramps and inclusive facilities catering to all students with dignity.</li>
                    </ul>
                </div>

                <!-- 4. Other Essential Amenities -->
                <div style="background: var(--slate-50); border: 1px solid var(--slate-200); border-radius: var(--radius-lg); padding: 28px; border-top: 4px solid #10b981;">
                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 16px;">
                        <div style="width: 44px; height: 44px; border-radius: 50%; background: #ecfdf5; color: #10b981; display: flex; align-items: center; justify-content: center; font-size: 1.25rem;">
                            <i class="fas fa-bus-simple"></i>
                        </div>
                        <h3 style="color: var(--navy-950); font-size: 1.3rem; margin: 0;">Other Key Amenities</h3>
                    </div>
                    <ul class="clean-bullet-list" style="margin: 0;">
                        <li><strong>High-Speed Wi-Fi Campus:</strong> Reliable digital backbone supporting modern instructional technologies.</li>
                        <li><strong>Hygienic Cafeteria:</strong> Clean dining space providing wholesome, fresh, and nutritious refreshments.</li>
                        <li><strong>GPS-Tracked Transport:</strong> Safe bus fleet covering Palwal, Prithla, Sehrala, and adjacent rural and urban stops.</li>
                        <li><strong>Residential / Boarding Guidance:</strong> Supportive pastoral care and hostel accommodations for learners from distant towns.</li>
                    </ul>
                </div>

            </div>

            <div style="margin-top: 3rem; text-align: center;">
                <a href="contact-us.php" class="btn btn-primary" style="margin-right: 12px;"><i class="fas fa-calendar-check"></i> Schedule a Campus Tour</a>
                <a href="mandatory-disclosure.php" class="btn btn-crimson"><i class="fas fa-file-contract"></i> View CBSE Infrastructure Disclosures</a>
            </div>

        </div>
    </div>

</main>

<?php include 'footer.php'; ?>
