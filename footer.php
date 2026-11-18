    <!-- Site Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                
                <!-- Column 1: School Identity -->
                <div class="footer-col footer-brand">
                    <div class="footer-brand-logo">
                        <img src="images/logo.png" alt="<?php echo htmlspecialchars($school['name']); ?>" width="60" height="60">
                        <div>
                            <h4><?php echo htmlspecialchars($school['name']); ?></h4>
                            <span style="color: var(--gold-400); font-size: 0.82rem; font-weight: 700;">Prithla, Palwal (Haryana)</span>
                        </div>
                    </div>
                    <p class="footer-desc">
                        A premier CBSE-affiliated co-educational institution committed to academic brilliance, holistic discipline, and global perspective. Managed under Beer Bati Education Society.
                    </p>
                    <div style="font-size: 0.82rem; color: #cbd5e1; border-top: 1px solid rgba(255, 255, 255, 0.1); padding-top: 12px;">
                        <div><strong>CBSE Affiliation No:</strong> <?php echo htmlspecialchars($school['affiliation_no']); ?></div>
                        <div><strong>Managed By:</strong> <?php echo htmlspecialchars($school['society']); ?></div>
                    </div>
                </div>

                <!-- Column 2: Quick Links -->
                <div class="footer-col">
                    <h4 class="footer-heading">Quick Links</h4>
                    <ul class="footer-links-list">
                        <li><a href="index.php"><i class="fas fa-chevron-right" style="font-size: 0.7rem; color: var(--gold-400);"></i> Home</a></li>
                        <li><a href="about.php"><i class="fas fa-chevron-right" style="font-size: 0.7rem; color: var(--gold-400);"></i> About Us</a></li>
                        <li><a href="principals-desk.php"><i class="fas fa-chevron-right" style="font-size: 0.7rem; color: var(--gold-400);"></i> Principal's Desk</a></li>
                        <li><a href="chairmans-desk.php"><i class="fas fa-chevron-right" style="font-size: 0.7rem; color: var(--gold-400);"></i> Chairman's Desk</a></li>
                        <li><a href="admission-process.php"><i class="fas fa-chevron-right" style="font-size: 0.7rem; color: var(--gold-400);"></i> Admission Procedure</a></li>
                        <li><a href="online-admission.php"><i class="fas fa-chevron-right" style="font-size: 0.7rem; color: var(--gold-400);"></i> Online Registration</a></li>
                        <li><a href="fee-structure.php"><i class="fas fa-chevron-right" style="font-size: 0.7rem; color: var(--gold-400);"></i> Fee Structure</a></li>
                    </ul>
                </div>

                <!-- Column 3: Important Sections -->
                <div class="footer-col">
                    <h4 class="footer-heading">Academics &amp; Campus</h4>
                    <ul class="footer-links-list">
                        <li><a href="infrastructure.php"><i class="fas fa-chevron-right" style="font-size: 0.7rem; color: var(--gold-400);"></i> Campus Facilities</a></li>
                        <li><a href="faculty.php"><i class="fas fa-chevron-right" style="font-size: 0.7rem; color: var(--gold-400);"></i> Our Teaching Staff</a></li>
                        <li><a href="mandatory-disclosure.php"><i class="fas fa-chevron-right" style="font-size: 0.7rem; color: var(--gold-400);"></i> Mandatory Disclosure</a></li>
                        <li><a href="transport-routes.php"><i class="fas fa-chevron-right" style="font-size: 0.7rem; color: var(--gold-400);"></i> Transport Routes</a></li>
                        <li><a href="gallery.php"><i class="fas fa-chevron-right" style="font-size: 0.7rem; color: var(--gold-400);"></i> Photo Gallery</a></li>
                        <li><a href="contact-us.php"><i class="fas fa-chevron-right" style="font-size: 0.7rem; color: var(--gold-400);"></i> Feedback &amp; Enquiry</a></li>
                    </ul>
                </div>

                <!-- Column 4: Contact Details -->
                <div class="footer-col">
                    <h4 class="footer-heading">Reach Us</h4>
                    <div class="footer-contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span><?php echo htmlspecialchars($school['address']); ?></span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fas fa-phone-alt"></i>
                        <div>
                            <a href="tel:<?php echo htmlspecialchars($school['phone1']); ?>"><?php echo htmlspecialchars($school['phone1']); ?></a>, 
                            <a href="tel:<?php echo htmlspecialchars($school['phone2']); ?>"><?php echo htmlspecialchars($school['phone2']); ?></a>
                        </div>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:<?php echo htmlspecialchars($school['email']); ?>"><?php echo htmlspecialchars($school['email']); ?></a>
                    </div>
                    <div class="footer-contact-item">
                        <i class="far fa-clock"></i>
                        <span><?php echo htmlspecialchars($school['office_hours']); ?></span>
                    </div>

                    <div style="margin-top: 18px; display: flex; gap: 8px;">
                        <a href="<?php echo htmlspecialchars($school['facebook']); ?>" target="_blank" rel="noopener noreferrer" class="social-circle sc-facebook" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="<?php echo htmlspecialchars($school['google_map']); ?>" target="_blank" rel="noopener noreferrer" class="social-circle sc-map" title="Google Maps"><i class="fas fa-map-marked-alt"></i></a>
                        <a href="<?php echo htmlspecialchars($school['whatsapp']); ?>" target="_blank" rel="noopener noreferrer" class="social-circle sc-whatsapp" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>

            </div>

            <!-- Bottom Sub-Footer -->
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> All Rights Reserved by, <strong><?php echo htmlspecialchars($school['name']); ?></strong>.</p>
                <div>
                    <a href="mandatory-disclosure.php">Mandatory Disclosure</a> &bull; 
                    <a href="admission-process.php">Admissions Policy</a> &bull; 
                    <a href="contact-us.php">Locate School</a>
                </div>
            </div>
        </div>

        <!-- Floating WhatsApp Button -->
        <a href="<?php echo htmlspecialchars($school['whatsapp']); ?>" target="_blank" rel="noopener noreferrer" class="floating-whatsapp" title="Chat with us on WhatsApp" aria-label="WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>

        <!-- Floating Back to Top Button -->
        <button type="button" class="back-to-top" id="backToTopBtn" aria-label="Back to top">
            <i class="fas fa-arrow-up"></i>
        </button>
    </footer>

    <!-- Global Interactive JavaScript -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // 1. Mobile Menu Toggle
        const toggleBtn = document.getElementById('mobileNavToggle');
        const mainNav = document.getElementById('mainNav');
        if (toggleBtn && mainNav) {
            toggleBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                mainNav.classList.toggle('active');
            });
            // Dropdown in mobile
            const dropdowns = mainNav.querySelectorAll('.has-dropdown > a');
            dropdowns.forEach(item => {
                item.addEventListener('click', function(e) {
                    if (window.innerWidth <= 900) {
                        e.preventDefault();
                        const parent = this.parentElement;
                        parent.classList.toggle('open');
                    }
                });
            });
            // Close mobile menu on outside click
            document.addEventListener('click', function(e) {
                if (!mainNav.contains(e.target) && !toggleBtn.contains(e.target)) {
                    mainNav.classList.remove('active');
                }
            });
        }

        // 2. Back to Top Button
        const backToTop = document.getElementById('backToTopBtn');
        if (backToTop) {
            window.addEventListener('scroll', function() {
                if (window.scrollY > 350) {
                    backToTop.classList.add('show');
                } else {
                    backToTop.classList.remove('show');
                }
            });
            backToTop.addEventListener('click', function() {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        }

        // 3. Hero Carousel Slider
        const slider = document.getElementById('heroSlider');
        if (slider) {
            const slides = slider.querySelectorAll('.hero-slide');
            const prevBtn = document.getElementById('sliderPrev');
            const nextBtn = document.getElementById('sliderNext');
            const dotsContainer = document.getElementById('heroDots');
            let current = 0;
            let slideTimer = null;

            function goToSlide(index) {
                slides.forEach((s, i) => {
                    s.classList.toggle('active', i === index);
                });
                if (dotsContainer) {
                    const dots = dotsContainer.querySelectorAll('.hero-dot');
                    dots.forEach((d, i) => d.classList.toggle('active', i === index));
                }
                current = index;
            }

            function nextSlide() {
                let n = (current + 1) % slides.length;
                goToSlide(n);
            }

            function prevSlide() {
                let p = (current - 1 + slides.length) % slides.length;
                goToSlide(p);
            }

            function startTimer() {
                stopTimer();
                slideTimer = setInterval(nextSlide, 5000);
            }

            function stopTimer() {
                if (slideTimer) clearInterval(slideTimer);
            }

            if (nextBtn) nextBtn.addEventListener('click', function() { nextSlide(); startTimer(); });
            if (prevBtn) prevBtn.addEventListener('click', function() { prevSlide(); startTimer(); });

            if (dotsContainer) {
                dotsContainer.addEventListener('click', function(e) {
                    if (e.target.classList.contains('hero-dot')) {
                        const targetSlide = parseInt(e.target.getAttribute('data-slide'));
                        goToSlide(targetSlide);
                        startTimer();
                    }
                });
            }

            slider.addEventListener('mouseenter', stopTimer);
            slider.addEventListener('mouseleave', startTimer);

            startTimer();
        }

        // 4. Lightbox Modal for Gallery
        const modalBackdrop = document.getElementById('galleryModal');
        const modalImg = document.getElementById('galleryModalImg');
        const modalTitle = document.getElementById('galleryModalTitle');
        const modalCategory = document.getElementById('galleryModalCategory');
        const modalClose = document.getElementById('galleryModalClose');

        window.openGalleryModal = function(src, title, category) {
            if (modalBackdrop && modalImg) {
                modalImg.src = src;
                if (modalTitle) modalTitle.textContent = title || 'Campus Photo';
                if (modalCategory) modalCategory.textContent = category || 'The Discovery International School';
                modalBackdrop.classList.add('active');
                document.body.style.overflow = 'hidden';
            }
        };

        window.closeGalleryModal = function() {
            if (modalBackdrop) {
                modalBackdrop.classList.remove('active');
                document.body.style.overflow = '';
            }
        };

        if (modalClose) modalClose.addEventListener('click', closeGalleryModal);
        if (modalBackdrop) {
            modalBackdrop.addEventListener('click', function(e) {
                if (e.target === modalBackdrop) closeGalleryModal();
            });
        }
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') closeGalleryModal();
        });
    });
    </script>
</body>
</html>
