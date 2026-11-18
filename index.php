<?php 
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/gallery_data.php';
require_once __DIR__ . '/notices.php';
include 'header.php'; 
?>

<main id="content" class="site-main">

    <!-- 1. Hero Image Slider with Overlay Captions & Direct Actions -->
    <section class="hero-slider-section">
        <div class="hero-slider" id="heroSlider">
            
            <!-- Slide 1 -->
            <div class="hero-slide active">
                <img src="slider/slider1.webp" alt="<?php echo htmlspecialchars($school['name']); ?> Campus Playground & Building">
                <div class="hero-slide-overlay">
                    <div class="container">
                        <div class="hero-slide-content">
                            <span class="hero-badge-tag"><i class="fas fa-sparkles"></i> Admissions Open for Session <?php echo htmlspecialchars($school['session']); ?></span>
                            <h1 class="hero-slide-title">Inspiring Excellence, <span>Shaping Tomorrow</span></h1>
                            <p class="hero-slide-lead">Fostering critical thinking, moral integrity, and lifelong success through student-centered learning from Pre-Primary up to Senior Secondary.</p>
                            <div class="hero-cta-group">
                                <a href="online-admission.php" class="btn btn-hero-primary"><i class="fas fa-pen-to-square"></i> Apply Online <?php echo htmlspecialchars($school['session']); ?></a>
                                <a href="about.php" class="btn btn-hero-outline hide-mobile"><i class="fas fa-compass"></i> Discover Campus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="hero-slide">
                <img src="images/school-building.jpg" alt="<?php echo htmlspecialchars($school['name']); ?> Academic Block">
                <div class="hero-slide-overlay">
                    <div class="container">
                        <div class="hero-slide-content">
                            <span class="hero-badge-tag"><i class="fas fa-school"></i> 6,070 Sq. Mtr. Campus</span>
                            <h2 class="hero-slide-title">World-Class <span>Modern Infrastructure</span></h2>
                            <p class="hero-slide-lead">High-tech science &amp; computer labs, digital smart classrooms, expansive library, and green open-air learning zones.</p>
                            <div class="hero-cta-group">
                                <a href="infrastructure.php" class="btn btn-hero-primary"><i class="fas fa-cubes"></i> Explore Facilities</a>
                                <a href="mandatory-disclosure.php" class="btn btn-hero-outline hide-mobile"><i class="fas fa-file-shield"></i> Mandatory Disclosure</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="hero-slide">
                <img src="slider/slider2.webp" alt="<?php echo htmlspecialchars($school['name']); ?> School Campus Life">
                <div class="hero-slide-overlay">
                    <div class="container">
                        <div class="hero-slide-content">
                            <span class="hero-badge-tag"><i class="fas fa-user-check"></i> Individualized Mentorship</span>
                            <h2 class="hero-slide-title">Empowering Every Child's <span>Unique Potential</span></h2>
                            <p class="hero-slide-lead">A healthy 20:1 student-teacher ratio ensuring dedicated personal attention and character foundation under expert educators.</p>
                            <div class="hero-cta-group">
                                <a href="admission-process.php" class="btn btn-hero-primary"><i class="fas fa-clipboard-check"></i> Admission Procedure</a>
                                <a href="faculty.php" class="btn btn-hero-outline hide-mobile"><i class="fas fa-user-tie"></i> Faculty Roster</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 4 -->
            <div class="hero-slide">
                <img src="slider/slider3.webp" alt="<?php echo htmlspecialchars($school['name']); ?> Sports Complex">
                <div class="hero-slide-overlay">
                    <div class="container">
                        <div class="hero-slide-content">
                            <span class="hero-badge-tag"><i class="fas fa-trophy"></i> Sports &amp; Co-Curriculars</span>
                            <h2 class="hero-slide-title">Spacious Playgrounds &amp; <span>Athletic Spirit</span></h2>
                            <p class="hero-slide-lead">Football, cricket, basketball, volleyball, indoor games, yoga, and performing arts fostering well-rounded personalities.</p>
                            <div class="hero-cta-group">
                                <a href="gallery.php" class="btn btn-hero-primary"><i class="fas fa-images"></i> Photo Gallery</a>
                                <a href="contact-us.php" class="btn btn-hero-outline hide-mobile"><i class="fas fa-location-dot"></i> Visit Campus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Slider Navigation Controls -->
        <button class="hero-arrow prev" id="sliderPrev" aria-label="Previous Slide"><i class="fas fa-chevron-left"></i></button>
        <button class="hero-arrow next" id="sliderNext" aria-label="Next Slide"><i class="fas fa-chevron-right"></i></button>

        <!-- Slider Dots Indicator -->
        <div class="hero-dots" id="heroDots">
            <span class="hero-dot active" data-slide="0"></span>
            <span class="hero-dot" data-slide="1"></span>
            <span class="hero-dot" data-slide="2"></span>
            <span class="hero-dot" data-slide="3"></span>
        </div>
    </section>

    <!-- 2. Highlight Features Strip -->
    <div class="container">
        <div class="feature-strip">
            <div class="feature-strip-grid">
                
                <div class="feature-strip-item">
                    <div class="feature-strip-icon"><i class="fas fa-certificate"></i></div>
                    <div class="feature-strip-text">
                        <h4>CBSE Affiliated</h4>
                        <p>Affiliation No: <?php echo htmlspecialchars($school['affiliation_no']); ?></p>
                    </div>
                </div>

                <div class="feature-strip-item">
                    <div class="feature-strip-icon"><i class="fas fa-seedling"></i></div>
                    <div class="feature-strip-text">
                        <h4>6,070 Sq. Mtr. Campus</h4>
                        <p>Sprawling, safe, and green learning infrastructure</p>
                    </div>
                </div>

                <div class="feature-strip-item">
                    <div class="feature-strip-icon"><i class="fas fa-user-check"></i></div>
                    <div class="feature-strip-text">
                        <h4>20:1 Student Ratio</h4>
                        <p>Personalized attention &amp; dedicated class mentors</p>
                    </div>
                </div>

                <div class="feature-strip-item">
                    <div class="feature-strip-icon"><i class="fas fa-bus-alt"></i></div>
                    <div class="feature-strip-text">
                        <h4>Safe Transport &amp; CCTV</h4>
                        <p>GPS-enabled buses &amp; 24/7 security surveillance</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- 3. Welcome to The Discovery International School (Image 1 Layout) -->
    <section class="section-pad section-welcome">
        <div class="container">
            <div class="welcome-grid">
                
                <!-- Left: Welcome Text Content -->
                <div class="welcome-text">
                    <span class="section-tag section-tag-gold"><i class="fas fa-star"></i> Premier CBSE Institution</span>
                    <h2>Welcome to The Discovery International School</h2>
                    <h3 class="welcome-lead">A Premier CBSE-Affiliated School in Prithla, Palwal (Haryana)</h3>
                    
                    <p class="welcome-desc">
                        At <strong>The Discovery International School</strong>, we are committed to nurturing young minds with the perfect blend of academic excellence, moral values, and global perspective. Situated in the heart of <strong>Prithla, Palwal (Haryana)</strong>, we are a proud CBSE-affiliated school offering holistic education from pre-primary to senior secondary levels.
                    </p>
                    <p class="welcome-desc">
                        Managed by the <strong>Beer Bati Education Society</strong>, our institution believes in empowering learners with the knowledge, critical thinking skills, and self-confidence needed for lifelong success. Our balanced pedagogical approach integrates the latest National Education Policy (NEP-2020) frameworks with active experiential learning, sports, and character building.
                    </p>

                    <div class="welcome-actions">
                        <a href="about.php" class="btn btn-primary"><i class="fas fa-book-open"></i> Read More About Us</a>
                        <a href="online-admission.php" class="btn btn-crimson"><i class="fas fa-user-plus"></i> Online Registration</a>
                        <a href="tel:<?php echo htmlspecialchars($school['phone1']); ?>" class="btn" style="background: var(--gold-100); color: var(--gold-700); font-weight: 700;"><i class="fas fa-phone-alt"></i> Call Us: <?php echo htmlspecialchars($school['phone1']); ?></a>
                    </div>
                </div>

                <!-- Right: School Entrance & Achievement Photo -->
                <div class="welcome-image-card">
                    <div class="image-frame">
                        <img src="images/gallery/gallery1.webp" alt="Award Ceremony at The Discovery International School Entrance">
                    </div>
                    <div class="welcome-badge-float">
                        <div class="welcome-badge-icon">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <div class="welcome-badge-text">
                            <h5>Fostering Excellence</h5>
                            <span>Academics &bull; Sports &bull; Moral Values</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 4. Notice Board & Why Choose Us (Image 1 Layout) -->
    <section class="section-pad section-notice-why">
        <div class="container">
            <div class="notice-why-grid">
                
                <!-- Left Column: Notice Board Card -->
                <div class="notice-board-card">
                    <div class="notice-board-header">
                        <div class="notice-header-left">
                            <div class="notice-bell-icon">
                                <i class="fas fa-bell"></i>
                            </div>
                            <h3>Notice Board</h3>
                        </div>
                        <span class="notice-badge-count">Session <?php echo htmlspecialchars($school['session']); ?></span>
                    </div>

                    <ul class="notice-board-list">
                        <?php foreach ($notices as $notice): ?>
                            <li class="notice-board-item">
                                <a href="<?php echo htmlspecialchars($notice['link']); ?>" class="notice-link">
                                    <i class="fas fa-file-lines notice-icon"></i>
                                    <div class="notice-details">
                                        <h5><?php echo htmlspecialchars($notice['title']); ?></h5>
                                        <div class="notice-meta">
                                            <span><i class="far fa-calendar-alt"></i> <?php echo htmlspecialchars($notice['date']); ?></span>
                                            <span>&bull; <?php echo htmlspecialchars($notice['category']); ?></span>
                                            <?php if (!empty($notice['is_new'])): ?>
                                                <span class="badge-new">New</span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                    <div class="notice-board-footer">
                        <span>Stay updated with campus notifications</span>
                        <a href="online-admission.php"><i class="fas fa-arrow-right"></i> Admission Open 2026-27</a>
                    </div>
                </div>

                <!-- Right Column: Why Choose The Discovery International School? -->
                <div class="why-choose-card">
                    <span class="section-tag section-tag-navy"><i class="fas fa-shield-halved"></i> Distinct Advantages</span>
                    <h3>Why Choose The Discovery International School?</h3>
                    <p class="why-choose-intro">
                        We provide an inspiring environment where every child's innate potential is unlocked with modern facilities and dedicated mentorship:
                    </p>

                    <div class="why-points-grid">
                        <div class="why-point-item">
                            <span class="why-check"><i class="fas fa-check"></i></span>
                            <strong>CBSE Affiliated (Senior Secondary Level, Affiliation No: 532266)</strong>
                        </div>
                        <div class="why-point-item">
                            <span class="why-check"><i class="fas fa-check"></i></span>
                            <strong>Safe, Secure, and Green 6,070 Sq. Mtr. Campus</strong>
                        </div>
                        <div class="why-point-item">
                            <span class="why-check"><i class="fas fa-check"></i></span>
                            <strong>Well-Qualified &amp; Caring Faculty (Student-Teacher Ratio 20:1)</strong>
                        </div>
                        <div class="why-point-item">
                            <span class="why-check"><i class="fas fa-check"></i></span>
                            <strong>Smart Classrooms &amp; Interactive Digital Learning Aids</strong>
                        </div>
                        <div class="why-point-item">
                            <span class="why-check"><i class="fas fa-check"></i></span>
                            <strong>Fully Equipped Science, Math &amp; High-Tech Computer Labs</strong>
                        </div>
                        <div class="why-point-item">
                            <span class="why-check"><i class="fas fa-check"></i></span>
                            <strong>Sports, Music, Art, Craft &amp; Cultural Programs</strong>
                        </div>
                        <div class="why-point-item">
                            <span class="why-check"><i class="fas fa-check"></i></span>
                            <strong>Regular Parent-Teacher Interactions &amp; Transparent Feedback</strong>
                        </div>
                        <div class="why-point-item">
                            <span class="why-check"><i class="fas fa-check"></i></span>
                            <strong>GPS-Enabled Transport Facility Available Across Palwal &amp; Prithla</strong>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 5. Leadership Messages: Principal's Desk & Chairman's Desk -->
    <section class="section-pad section-leadership">
        <div class="container">
            <div class="text-center" style="margin-bottom: 45px;">
                <span class="section-tag section-tag-gold"><i class="fas fa-landmark"></i> Visionary Leadership</span>
                <h2 class="section-title">Guiding With Purpose, Care &amp; Excellence</h2>
                <p class="section-subtitle mx-auto">Hear from our leadership on our steadfast commitment to shaping compassionate, capable, and confident global citizens.</p>
            </div>

            <div class="leadership-grid">
                
                <!-- Principal's Desk Card (Image 2) -->
                <div class="executive-card principal-desk">
                    <div>
                        <div class="executive-profile">
                            <div class="executive-photo-frame">
                                <img src="images/principal.webp" alt="Principal <?php echo htmlspecialchars($school['principal']); ?>">
                            </div>
                            <div class="executive-meta">
                                <h4><?php echo htmlspecialchars($school['principal_name']); ?></h4>
                                <span class="role-title">Principal</span>
                                <span class="school-name"><?php echo htmlspecialchars($school['principal_qual']); ?> &bull; <?php echo htmlspecialchars($school['name']); ?></span>
                            </div>
                        </div>

                        <blockquote class="executive-quote">
                            “Welcome to The Discovery International, where every child’s journey is guided with purpose, care, and excellence. Our unwavering commitment is to create a nurturing and dynamic learning environment that encourages students to explore their abilities, express creativity, and strive for excellence.”
                        </blockquote>
                    </div>

                    <a href="principals-desk.php" class="executive-cta">
                        Read Full Principal's Message <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Chairman's Desk Card (Image 3) -->
                <div class="executive-card chairman-desk">
                    <div>
                        <div class="executive-profile">
                            <div class="executive-photo-frame" style="background: var(--navy-50); display: flex; align-items: center; justify-content: center; font-size: 2.2rem; color: var(--navy-800);">
                                <i class="fas fa-user-graduate"></i>
                            </div>
                            <div class="executive-meta">
                                <h4>Office of the Chairman</h4>
                                <span class="role-title">From the Desk of the Chairman</span>
                                <span class="school-name">Beer Bati Education Society &bull; <?php echo htmlspecialchars($school['name']); ?></span>
                            </div>
                        </div>

                        <blockquote class="executive-quote">
                            “It is my profound honor to welcome you to The Discovery International—where education transcends conventional learning and empowers every young mind to discover their full potential. At our core, we are driven by a bold vision: to cultivate a vibrant, inclusive environment that champions academic excellence and fosters strong moral character.”
                        </blockquote>
                    </div>

                    <a href="chairmans-desk.php" class="executive-cta">
                        Read Full Chairman's Message <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- 6. Facilities & Campus Overview (Image 5) -->
    <section class="section-pad section-facilities-preview">
        <div class="container">
            <div class="text-center">
                <span class="section-tag section-tag-gold"><i class="fas fa-building-columns"></i> World-Class Amenities</span>
                <h2 class="section-title">Campus &amp; State-of-the-Art Facilities</h2>
                <p class="section-subtitle mx-auto">Equipped with 6070 sq. mtr. modern infrastructure to support academic excellence and holistic child development.</p>
            </div>

            <div class="facilities-preview-grid">
                
                <div class="facility-preview-card">
                    <div class="facility-icon-circle"><i class="fas fa-flask-vial"></i></div>
                    <h4>Academic &amp; Learning Spaces</h4>
                    <p>Well-equipped Science Laboratories for Physics, Chemistry, and Biology, dedicated Computer and Math Labs with modern teaching aids, and a comprehensive Library.</p>
                </div>

                <div class="facility-preview-card">
                    <div class="facility-icon-circle"><i class="fas fa-chalkboard-user"></i></div>
                    <h4>Smart Classrooms &amp; Activity Rooms</h4>
                    <p>Interactive digital classrooms fostering engaging learning experiences, accompanied by creative activity rooms for art, craft, music, and innovation.</p>
                </div>

                <div class="facility-preview-card">
                    <div class="facility-icon-circle"><i class="fas fa-volleyball"></i></div>
                    <h4>Sports &amp; Recreational Facilities</h4>
                    <p>Spacious playgrounds for football, volleyball, cricket, basketball, indoor table tennis, chess, carrom, swimming/splash pool, and mindfulness yoga zones.</p>
                </div>

                <div class="facility-preview-card">
                    <div class="facility-icon-circle"><i class="fas fa-shield-virus"></i></div>
                    <h4>Safety &amp; Wellness First</h4>
                    <p>Round-the-clock CCTV surveillance, trained security personnel, first-aid medical room with routine check-ups, and fire safety systems with barrier-free ramps.</p>
                </div>

                <div class="facility-preview-card">
                    <div class="facility-icon-circle"><i class="fas fa-bus"></i></div>
                    <h4>GPS-Enabled Safe Transport</h4>
                    <p>Modern fleet of school buses equipped with real-time GPS tracking and trained staff, serving Prithla, Palwal, Sehrala, Chhaprolla, and surrounding routes.</p>
                </div>

                <div class="facility-preview-card">
                    <div class="facility-icon-circle"><i class="fas fa-wifi"></i></div>
                    <h4>Connected Campus &amp; Cafeteria</h4>
                    <p>Wi-Fi enabled campus for digital learning support, spacious and hygienic cafeteria serving nutritious meals, and caring support for all learners.</p>
                </div>

            </div>

            <div class="text-center" style="margin-top: 36px;">
                <a href="infrastructure.php" class="btn btn-hero-primary"><i class="fas fa-cubes"></i> View Detailed Facilities Page</a>
            </div>
        </div>
    </section>

    <!-- 7. Photo Gallery Preview (Image 1 Layout) -->
    <section class="section-pad section-photo-gallery">
        <div class="container">
            <div class="text-center">
                <span class="section-tag section-tag-crimson"><i class="fas fa-camera"></i> Campus Life</span>
                <h2 class="section-title">Photo Gallery</h2>
                <p class="section-subtitle mx-auto">Glimpses of daily life, academic pursuits, awards, sports, and memorable milestones at The Discovery International School.</p>
            </div>

            <div class="gallery-grid">
                <?php 
                $preview_gallery = array_slice($gallery_images, 0, 6);
                foreach ($preview_gallery as $item): 
                ?>
                    <div class="gallery-card" onclick="openGalleryModal('<?php echo htmlspecialchars($item['image']); ?>', '<?php echo htmlspecialchars(addslashes($item['title'])); ?>', '<?php echo htmlspecialchars(addslashes($item['category'])); ?>')">
                        <img src="<?php echo htmlspecialchars($item['thumb']); ?>" alt="<?php echo htmlspecialchars($item['title']); ?>" loading="lazy">
                        <div class="gallery-overlay">
                            <span class="gallery-overlay-tag"><?php echo htmlspecialchars($item['category']); ?></span>
                            <h5><?php echo htmlspecialchars($item['title']); ?></h5>
                            <span><i class="fas fa-magnifying-glass-plus"></i> Click to enlarge</span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="text-center" style="margin-top: 36px;">
                <a href="gallery.php" class="btn btn-primary"><i class="fas fa-images"></i> View Full Photo Gallery</a>
            </div>
        </div>
    </section>

    <!-- 8. Interactive Location & Visit Us Section -->
    <section class="section-pad section-location-visit">
        <div class="container">
            <div class="location-grid">
                
                <!-- Google Map Embed -->
                <div class="map-wrapper">
                    <iframe 
                        src="https://maps.google.com/maps?q=The+Discovery+International+School+Prithla+Palwal+Haryana&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade" 
                        title="The Discovery International School Location Map">
                    </iframe>
                </div>

                <!-- Visit Card -->
                <div class="visit-info-card">
                    <span class="section-tag section-tag-gold"><i class="fas fa-location-dot"></i> Visit Campus</span>
                    <h3>Connect With Us</h3>
                    <p style="font-size: 0.92rem; color: var(--slate-600); margin-bottom: 20px;">
                        We welcome prospective parents and students to visit our campus, meet our faculty, and experience our vibrant learning environment.
                    </p>

                    <div class="contact-row-item">
                        <div class="contact-row-icon"><i class="fas fa-map-location-dot"></i></div>
                        <div class="contact-row-text">
                            <strong>School Address:</strong>
                            <span><?php echo htmlspecialchars($school['address']); ?></span>
                        </div>
                    </div>

                    <div class="contact-row-item">
                        <div class="contact-row-icon"><i class="fas fa-phone-volume"></i></div>
                        <div class="contact-row-text">
                            <strong>Call Us:</strong>
                            <a href="tel:<?php echo htmlspecialchars($school['phone1']); ?>"><?php echo htmlspecialchars($school['phone1']); ?></a>, 
                            <a href="tel:<?php echo htmlspecialchars($school['phone2']); ?>"><?php echo htmlspecialchars($school['phone2']); ?></a>
                        </div>
                    </div>

                    <div class="contact-row-item">
                        <div class="contact-row-icon"><i class="fas fa-envelope-open-text"></i></div>
                        <div class="contact-row-text">
                            <strong>Email Enquiry:</strong>
                            <a href="mailto:<?php echo htmlspecialchars($school['email']); ?>"><?php echo htmlspecialchars($school['email']); ?></a>
                        </div>
                    </div>

                    <div class="contact-row-item">
                        <div class="contact-row-icon"><i class="far fa-clock"></i></div>
                        <div class="contact-row-text">
                            <strong>Visiting Hours:</strong>
                            <span><?php echo htmlspecialchars($school['office_hours']); ?></span>
                        </div>
                    </div>

                    <div style="margin-top: 24px; display: flex; gap: 12px; flex-wrap: wrap;">
                        <a href="online-admission.php" class="btn btn-crimson" style="padding: 10px 20px; font-size: 0.88rem;"><i class="fas fa-pen-nib"></i> Online Admission</a>
                        <a href="<?php echo htmlspecialchars($school['google_map']); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary" style="padding: 10px 20px; font-size: 0.88rem;"><i class="fas fa-directions"></i> Get Directions</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

<!-- Lightbox Modal for Photo Gallery -->
<div class="gallery-modal-backdrop" id="galleryModal">
    <div class="gallery-modal-content">
        <button class="gallery-modal-close" id="galleryModalClose" aria-label="Close modal">&times;</button>
        <img src="" alt="Enlarged campus view" class="gallery-modal-img" id="galleryModalImg">
        <div class="gallery-modal-caption">
            <div>
                <h4 id="galleryModalTitle" style="color: #ffffff; margin-bottom: 2px;">Campus View</h4>
                <span id="galleryModalCategory" style="color: var(--gold-400); font-size: 0.84rem; font-weight: 700;">The Discovery International School</span>
            </div>
            <a href="online-admission.php" class="btn btn-hero-primary" style="padding: 6px 16px; font-size: 0.82rem;"><i class="fas fa-user-graduate"></i> Enquire Now</a>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
