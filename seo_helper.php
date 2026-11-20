<?php
/**
 * =========================================================================
 * SEO Engine & Centralized Metadata Registry
 * The Discovery International School (Prithla, Palwal)
 * =========================================================================
 * Provides:
 *  1. Complete per-page meta tag definitions (Titles, Descriptions, Keywords, OG, Twitter)
 *  2. Schema.org JSON-LD structured data (EducationalOrganization, BreadcrumbList, WebPage)
 *  3. Dynamic Canonical URL generator
 *  4. Standardized Page Banner & Breadcrumb renderer
 */

if (!function_exists('get_site_pages_seo')) {
    /**
     * Complete Page-by-Page SEO Metadata Registry
     */
    function get_site_pages_seo($school) {
        $baseUrl = rtrim($school['base_url'] ?? 'https://thediscoveryinternational.com', '/');
        $schoolName = $school['name'] ?? 'The Discovery International School';
        $affNo = $school['affiliation_no'] ?? '532266';
        $session = $school['session'] ?? '2026-27';
        $defaultImage = $baseUrl . '/images/school-building.jpg';
        $logoImage = $baseUrl . '/images/logo.png';

        return [
            // 1. Homepage
            'index.php' => [
                'title'       => "The Discovery International School | Best CBSE School in Prithla, Palwal",
                'description' => "Welcome to {$schoolName}, Prithla, Palwal (Haryana). A premier CBSE-affiliated school (Affiliation No: {$affNo}) offering holistic education from Pre-Primary to Senior Secondary. Admissions open for session {$session}.",
                'keywords'    => "The Discovery International School, best school in Prithla, CBSE school Palwal, school admission Palwal {$session}, top senior secondary school Palwal, Beer Bati Education Society, schools in Haryana",
                'h1'          => "Inspiring Excellence, Shaping Tomorrow",
                'subtitle'    => "A Premier CBSE-Affiliated School in Prithla, Palwal (Haryana) &bull; Session {$session}",
                'badge'       => "CBSE Affiliated Senior Secondary School &bull; Affiliation No: {$affNo}",
                'canonical'   => $baseUrl . '/',
                'og_image'    => $defaultImage,
                'og_type'     => 'website',
                'robots'      => 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1',
                'breadcrumbs' => [
                    ['name' => 'Home', 'url' => 'index.php']
                ]
            ],

            // 2. About Us
            'about.php' => [
                'title'       => "About Us | {$schoolName}, Prithla, Palwal",
                'description' => "Discover {$schoolName}, operating under the patronage of Beer Bati Education Society in Prithla, Palwal. Learn about our mission, educational commitment, and modern 6,070 sq. mtr. campus.",
                'keywords'    => "about discovery international school, school in prithla, beer bati education society, cbse affiliated school palwal, school history vision, best education haryana",
                'h1'          => "About {$schoolName}",
                'subtitle'    => "Dedicated to academic excellence, character foundation, and holistic education under Beer Bati Education Society.",
                'badge'       => "About Our Institution",
                'canonical'   => $baseUrl . '/about.php',
                'og_image'    => $defaultImage,
                'og_type'     => 'website',
                'robots'      => 'index, follow',
                'breadcrumbs' => [
                    ['name' => 'Home', 'url' => 'index.php'],
                    ['name' => 'About Us', 'url' => 'about.php'],
                    ['name' => 'Overview & Society', 'url' => '']
                ]
            ],

            // 3. Principal's Desk
            'principals-desk.php' => [
                'title'       => "Principal's Desk | {$schoolName}, Prithla",
                'description' => "Read the official address from the Principal of {$schoolName}. Our student-centric pedagogy empowers learners with knowledge, critical thinking, and moral integrity.",
                'keywords'    => "principals desk, principal message, discovery international school principal, jyoti principal, leadership palwal school, cbse principal address",
                'h1'          => "From the Desk of the Principal",
                'subtitle'    => "Guiding young minds with purpose, care, and excellence for lifelong success.",
                'badge'       => "School Leadership",
                'canonical'   => $baseUrl . '/principals-desk.php',
                'og_image'    => $defaultImage,
                'og_type'     => 'article',
                'robots'      => 'index, follow',
                'breadcrumbs' => [
                    ['name' => 'Home', 'url' => 'index.php'],
                    ['name' => 'About Us', 'url' => 'about.php'],
                    ['name' => "Principal's Desk", 'url' => '']
                ]
            ],

            // 4. Chairman's Desk
            'chairmans-desk.php' => [
                'title'       => "Chairman's Desk | {$schoolName}, Palwal",
                'description' => "Message from the Chairman of {$schoolName} and Beer Bati Education Society. Building a vibrant educational community grounded in values, innovation, and global citizenship.",
                'keywords'    => "chairmans desk, chairman message, beer bati education society chairman, school founder message palwal, educational vision haryana",
                'h1'          => "From the Desk of the Chairman",
                'subtitle'    => "Fostering an inclusive environment that champions academic excellence and moral character.",
                'badge'       => "Founding Vision",
                'canonical'   => $baseUrl . '/chairmans-desk.php',
                'og_image'    => $defaultImage,
                'og_type'     => 'article',
                'robots'      => 'index, follow',
                'breadcrumbs' => [
                    ['name' => 'Home', 'url' => 'index.php'],
                    ['name' => 'About Us', 'url' => 'about.php'],
                    ['name' => "Chairman's Desk", 'url' => '']
                ]
            ],

            // 5. Vision & Mission
            'vision-mission.php' => [
                'title'       => "Vision & Mission | {$schoolName}, Prithla, Palwal",
                'description' => "Explore the core values, educational philosophy, vision, and mission that drive {$schoolName} toward nurturing globally responsible, compassionate citizens.",
                'keywords'    => "school vision and mission, educational values, core values discovery international school, student development, school aims and objectives palwal",
                'h1'          => "Vision, Mission & Core Values",
                'subtitle'    => "Nurturing young minds into enlightened, confident, and compassionate global leaders.",
                'badge'       => "Guiding Philosophy",
                'canonical'   => $baseUrl . '/vision-mission.php',
                'og_image'    => $defaultImage,
                'og_type'     => 'website',
                'robots'      => 'index, follow',
                'breadcrumbs' => [
                    ['name' => 'Home', 'url' => 'index.php'],
                    ['name' => 'About Us', 'url' => 'about.php'],
                    ['name' => 'Vision & Mission', 'url' => '']
                ]
            ],

            // 6. Managing Committee
            'managing-committee.php' => [
                'title'       => "School Managing Committee (SMC) | {$schoolName}",
                'description' => "Meet the esteemed members of the School Managing Committee (SMC) of {$schoolName}, ensuring regulatory compliance, high academic standards, and institutional integrity.",
                'keywords'    => "school managing committee, smc members discovery international school, beer bati education society members, cbse school management palwal",
                'h1'          => "School Managing Committee (SMC)",
                'subtitle'    => "Experienced institutional leadership and governance steering academic and ethical excellence.",
                'badge'       => "Institutional Governance",
                'canonical'   => $baseUrl . '/managing-committee.php',
                'og_image'    => $defaultImage,
                'og_type'     => 'website',
                'robots'      => 'index, follow',
                'breadcrumbs' => [
                    ['name' => 'Home', 'url' => 'index.php'],
                    ['name' => 'About Us', 'url' => 'about.php'],
                    ['name' => 'Managing Committee', 'url' => '']
                ]
            ],

            // 7. Admission Procedure
            'admission-process.php' => [
                'title'       => "Admission Procedure {$session} | {$schoolName}, Palwal",
                'description' => "Step-by-step admission procedure for session {$session} at {$schoolName}, Prithla. Eligibility criteria, age guidelines, document verification, and enrolment policy.",
                'keywords'    => "admission procedure palwal, how to apply school admission, cbse school admission process {$session}, admission criteria prithla, school registration guide",
                'h1'          => "Admission Procedure & Guidelines",
                'subtitle'    => "Transparent, merit-guided enrolment for Pre-Primary to Senior Secondary for Session {$session}.",
                'badge'       => "Admissions Open {$session}",
                'canonical'   => $baseUrl . '/admission-process.php',
                'og_image'    => $defaultImage,
                'og_type'     => 'website',
                'robots'      => 'index, follow',
                'breadcrumbs' => [
                    ['name' => 'Home', 'url' => 'index.php'],
                    ['name' => 'Admission', 'url' => 'admission-process.php'],
                    ['name' => 'Procedure & Guidelines', 'url' => '']
                ]
            ],

            // 8. Online Admission Form
            'online-admission.php' => [
                'title'       => "Online Admission Registration {$session} | {$schoolName}",
                'description' => "Apply online for student admission at {$schoolName}, Prithla, Palwal for academic session {$session}. Quick, secure online registration form with instant inquiry confirmation.",
                'keywords'    => "online admission form, register online school palwal, cbse admission form {$session}, apply online discovery international school, online student registration",
                'h1'          => "Online Admission Registration",
                'subtitle'    => "Submit your child's registration details online. Our admissions desk will promptly contact you.",
                'badge'       => "Session {$session} Registration",
                'canonical'   => $baseUrl . '/online-admission.php',
                'og_image'    => $defaultImage,
                'og_type'     => 'website',
                'robots'      => 'index, follow',
                'breadcrumbs' => [
                    ['name' => 'Home', 'url' => 'index.php'],
                    ['name' => 'Admission', 'url' => 'admission-process.php'],
                    ['name' => 'Online Registration', 'url' => '']
                ]
            ],

            // 9. Fee Structure
            'fee-structure.php' => [
                'title'       => "Fee Structure {$session} | {$schoolName}, Prithla, Palwal",
                'description' => "Official class-wise fee schedule for session {$session} at {$schoolName}, Prithla, Palwal. Transparent tuition fees, admission charges, and payment schedules for Nursery to Class XII.",
                'keywords'    => "fee structure discovery international school, school fees palwal, cbse school fees {$session}, tuition fees prithla, fee chart palwal school",
                'h1'          => "Fee Structure (Session {$session})",
                'subtitle'    => "Fair, government-compliant, and transparent fee schedule for all classes.",
                'badge'       => "Approved Fee Schedule",
                'canonical'   => $baseUrl . '/fee-structure.php',
                'og_image'    => $defaultImage,
                'og_type'     => 'website',
                'robots'      => 'index, follow',
                'breadcrumbs' => [
                    ['name' => 'Home', 'url' => 'index.php'],
                    ['name' => 'Admission', 'url' => 'admission-process.php'],
                    ['name' => 'Fee Structure', 'url' => '']
                ]
            ],

            // 10. Documents Required
            'documents-required.php' => [
                'title'       => "Documents Required for Admission | {$schoolName}",
                'description' => "Complete checklist of 13 official documents required for student admission at {$schoolName}, including Birth Certificate, Transfer Certificate (TC), Aadhaar, report cards, and photographs.",
                'keywords'    => "documents required for admission, school admission checklist, documents for cbse school, tc birth certificate aadhaar school admission",
                'h1'          => "Documents Required for Admission",
                'subtitle'    => "Official 13-point document checklist for hassle-free student verification and enrolment.",
                'badge'       => "Admission Checklist",
                'canonical'   => $baseUrl . '/documents-required.php',
                'og_image'    => $defaultImage,
                'og_type'     => 'website',
                'robots'      => 'index, follow',
                'breadcrumbs' => [
                    ['name' => 'Home', 'url' => 'index.php'],
                    ['name' => 'Admission', 'url' => 'admission-process.php'],
                    ['name' => 'Documents Required', 'url' => '']
                ]
            ],

            // 11. Transport Routes
            'transport-routes.php' => [
                'title'       => "Transport Facility & Bus Routes | {$schoolName}, Palwal",
                'description' => "Safe, GPS-enabled school transport covering 8 major routes across Prithla, Palwal city, Dudhola, Sikri, Asaoti, and surrounding rural and urban hubs.",
                'keywords'    => "school bus routes palwal, transport facility discovery international school, school conveyance prithla, safe bus transport cbse school",
                'h1'          => "Transport Facility & Bus Routes",
                'subtitle'    => "Safe, GPS-monitored fleet ensuring reliable transit across Palwal district and adjoining areas.",
                'badge'       => "Safe Student Transit",
                'canonical'   => $baseUrl . '/transport-routes.php',
                'og_image'    => $defaultImage,
                'og_type'     => 'website',
                'robots'      => 'index, follow',
                'breadcrumbs' => [
                    ['name' => 'Home', 'url' => 'index.php'],
                    ['name' => 'Facilities', 'url' => 'infrastructure.php'],
                    ['name' => 'Transport Routes', 'url' => '']
                ]
            ],

            // 12. Faculty & Staff
            'faculty.php' => [
                'title'       => "Our Faculty & Teaching Staff | {$schoolName}, Palwal",
                'description' => "Meet the 29 qualified, certified educators and leadership team at {$schoolName}, Palwal. Specialized PGT, TGT, PRT teachers, special educator, and student wellness counsellor.",
                'keywords'    => "school faculty list, teachers discovery international school, qualified staff palwal, cbse teacher student ratio, pgt tgt prt teachers palwal",
                'h1'          => "Our Teaching Staff & Educators",
                'subtitle'    => "A passionate cohort of 29 certified educators shaping tomorrow's thinkers and leaders.",
                'badge'       => "Certified Teaching Team",
                'canonical'   => $baseUrl . '/faculty.php',
                'og_image'    => $defaultImage,
                'og_type'     => 'website',
                'robots'      => 'index, follow',
                'breadcrumbs' => [
                    ['name' => 'Home', 'url' => 'index.php'],
                    ['name' => 'Our Staff', 'url' => 'faculty.php'],
                    ['name' => 'Faculty Roster', 'url' => '']
                ]
            ],

            // 13. Infrastructure & Facilities
            'infrastructure.php' => [
                'title'       => "Campus Infrastructure & Facilities | {$schoolName}",
                'description' => "Tour our sprawling 6,070 sq. mtr. modern campus in Prithla, Palwal. Equipped with high-tech science and computer labs, smart classrooms, library, and sports playgrounds.",
                'keywords'    => "school infrastructure palwal, campus facilities discovery international school, smart classrooms prithla, science computer labs school, 6070 sq mtr campus",
                'h1'          => "Campus Facilities & Infrastructure",
                'subtitle'    => "A sprawling 6,070 sq. mtr. eco-friendly campus built for experiential and multi-disciplinary learning.",
                'badge'       => "World-Class Infrastructure",
                'canonical'   => $baseUrl . '/infrastructure.php',
                'og_image'    => $defaultImage,
                'og_type'     => 'website',
                'robots'      => 'index, follow',
                'breadcrumbs' => [
                    ['name' => 'Home', 'url' => 'index.php'],
                    ['name' => 'Facilities', 'url' => 'infrastructure.php'],
                    ['name' => 'Campus Infrastructure', 'url' => '']
                ]
            ],

            // 14. Mandatory Disclosure
            'mandatory-disclosure.php' => [
                'title'       => "CBSE Mandatory Public Disclosure (Appendix-IX) | {$schoolName}",
                'description' => "Official CBSE Mandatory Public Disclosure for {$schoolName} (Affiliation No: {$affNo}). Direct access to Recognition, NOC, Society, Fire Safety, Water, Building, and Land certificates.",
                'keywords'    => "cbse mandatory disclosure, appendix ix disclosure, affiliation 532266, mandatory public disclosure discovery international school, school certificates pdf download",
                'h1'          => "CBSE Mandatory Public Disclosure",
                'subtitle'    => "Complete statutory transparency and verified compliance records as mandated by CBSE, New Delhi.",
                'badge'       => "CBSE Appendix-IX Compliance",
                'canonical'   => $baseUrl . '/mandatory-disclosure.php',
                'og_image'    => $defaultImage,
                'og_type'     => 'website',
                'robots'      => 'index, follow',
                'breadcrumbs' => [
                    ['name' => 'Home', 'url' => 'index.php'],
                    ['name' => 'Mandatory Disclosure', 'url' => 'mandatory-disclosure.php']
                ]
            ],

            // 15. Photo Gallery
            'gallery.php' => [
                'title'       => "Photo Gallery & Campus Life | {$schoolName}",
                'description' => "Explore pictures of campus life, annual functions, sports competitions, science exhibitions, and cultural milestones at {$schoolName}, Prithla, Palwal.",
                'keywords'    => "school photo gallery, campus pictures palwal, sports day photos, annual function images discovery international school, student life photos",
                'h1'          => "Photo Gallery & Campus Life",
                'subtitle'    => "A vibrant visual journey through our academic milestones, sports tournaments, and student celebrations.",
                'badge'       => "Campus Memories",
                'canonical'   => $baseUrl . '/gallery.php',
                'og_image'    => $defaultImage,
                'og_type'     => 'website',
                'robots'      => 'index, follow',
                'breadcrumbs' => [
                    ['name' => 'Home', 'url' => 'index.php'],
                    ['name' => 'Photo Gallery', 'url' => 'gallery.php']
                ]
            ],

            // 16. Contact Us
            'contact-us.php' => [
                'title'       => "Contact Us & Campus Location | {$schoolName}, Palwal",
                'description' => "Get in touch with {$schoolName}, Prithla – Sehrala Rd, Village Prithla, Palwal, Haryana 121102. Phone: 09350170199. Campus location map, office hours, and inquiry form.",
                'keywords'    => "contact discovery international school, school contact number palwal, prithla school phone, admission inquiry contact, school address haryana",
                'h1'          => "Contact Us & Campus Location",
                'subtitle'    => "Connect with our admissions desk, administration, or schedule a personalized campus tour.",
                'badge'       => "Reach Our Campus",
                'canonical'   => $baseUrl . '/contact-us.php',
                'og_image'    => $defaultImage,
                'og_type'     => 'website',
                'robots'      => 'index, follow',
                'breadcrumbs' => [
                    ['name' => 'Home', 'url' => 'index.php'],
                    ['name' => 'Contact Us', 'url' => 'contact-us.php']
                ]
            ],

            // 17. Academics & Curriculum
            'academics.php' => [
                'title'       => "Academic Curriculum & NEP-2020 | {$schoolName}",
                'description' => "Explore our progressive, NEP-2020 aligned CBSE curriculum at {$schoolName}. From early childhood development to senior secondary science, commerce, and arts streams.",
                'keywords'    => "academics discovery international school, cbse curriculum palwal, nep 2020 pedagogy, senior secondary streams science commerce, holistic education",
                'h1'          => "Academic Programs & Curriculum",
                'subtitle'    => "Comprehensive, inquiry-driven education cultivating critical thinking, scientific inquiry, and linguistic mastery.",
                'badge'       => "NEP-2020 Aligned Curriculum",
                'canonical'   => $baseUrl . '/academics.php',
                'og_image'    => $defaultImage,
                'og_type'     => 'website',
                'robots'      => 'index, follow',
                'breadcrumbs' => [
                    ['name' => 'Home', 'url' => 'index.php'],
                    ['name' => 'Academics', 'url' => 'academics.php'],
                    ['name' => 'Curriculum Overview', 'url' => '']
                ]
            ],

            // 18. Exam Datesheets
            'exam-datesheets.php' => [
                'title'       => "Examination Datesheets & Evaluation Schedule | {$schoolName}",
                'description' => "Official datesheets, assessment timetables, periodic tests, and board exam schedules for students of {$schoolName}, Palwal for Session {$session}.",
                'keywords'    => "school exam datesheet, examination schedule palwal, cbse periodic test datesheet, term evaluation timetable discovery international school",
                'h1'          => "Exam Datesheets & Evaluation Schedule",
                'subtitle'    => "Periodic assessment circulars, term timetable, and academic evaluation schedule for Session {$session}.",
                'badge'       => "Academic Calendar",
                'canonical'   => $baseUrl . '/exam-datesheets.php',
                'og_image'    => $defaultImage,
                'og_type'     => 'website',
                'robots'      => 'index, follow',
                'breadcrumbs' => [
                    ['name' => 'Home', 'url' => 'index.php'],
                    ['name' => 'Academics', 'url' => 'academics.php'],
                    ['name' => 'Exam Datesheets', 'url' => '']
                ]
            ],

            // 19. Syllabus & Curriculum Planner
            'syllabus-planner-and-curriculum.php' => [
                'title'       => "Syllabus Planner & Academic Curriculum | {$schoolName}",
                'description' => "Download the grade-wise syllabus planner and curriculum roadmap from Pre-Primary to Class XII at {$schoolName}, adhering to CBSE & NCERT standards.",
                'keywords'    => "syllabus planner download, cbse syllabus palwal, curriculum roadmap ncert, grade wise syllabus discovery international school",
                'h1'          => "Syllabus Planner & Curriculum",
                'subtitle'    => "Structured, grade-wise learning milestones aligned with CBSE and NCERT pedagogical standards.",
                'badge'       => "Curriculum Planner",
                'canonical'   => $baseUrl . '/syllabus-planner-and-curriculum.php',
                'og_image'    => $defaultImage,
                'og_type'     => 'website',
                'robots'      => 'index, follow',
                'breadcrumbs' => [
                    ['name' => 'Home', 'url' => 'index.php'],
                    ['name' => 'Academics', 'url' => 'academics.php'],
                    ['name' => 'Syllabus & Planner', 'url' => '']
                ]
            ],

            // 20. Board Exam Results (Class 10th)
            'excellent-result-in-10th-class-board-examination-by-cbse.php' => [
                'title'       => "Outstanding Class 10th CBSE Results | {$schoolName}",
                'description' => "Celebrating the remarkable academic achievements, toppers, and 100% pass record of Class 10th students in CBSE Board Examinations at {$schoolName}.",
                'keywords'    => "class 10 board exam results, cbse board toppers palwal, academic achievements discovery international school, 10th board excellence",
                'h1'          => "CBSE Board Examination Achievements",
                'subtitle'    => "Commending our scholars on remarkable academic records and stellar performance in CBSE board exams.",
                'badge'       => "Academic Glory",
                'canonical'   => $baseUrl . '/excellent-result-in-10th-class-board-examination-by-cbse.php',
                'og_image'    => $defaultImage,
                'og_type'     => 'website',
                'robots'      => 'index, follow',
                'breadcrumbs' => [
                    ['name' => 'Home', 'url' => 'index.php'],
                    ['name' => 'Academics', 'url' => 'academics.php'],
                    ['name' => 'Board Results', 'url' => '']
                ]
            ],

            // 21. Fee Payment Details
            'fee-payment-details.php' => [
                'title'       => "Fee Payment Details & Bank Accounts | {$schoolName}",
                'description' => "Official bank details, online remittance instructions, and account numbers for paying school fees at {$schoolName}, Prithla, Palwal.",
                'keywords'    => "fee payment details, pay school fees online, bank account discovery international school, ifsc code account number school fee",
                'h1'          => "School Fee Payment Details",
                'subtitle'    => "Authorized banking channels, IFSC codes, and verified remittance instructions for school fee deposit.",
                'badge'       => "Official Remittance",
                'canonical'   => $baseUrl . '/fee-payment-details.php',
                'og_image'    => $defaultImage,
                'og_type'     => 'website',
                'robots'      => 'index, follow',
                'breadcrumbs' => [
                    ['name' => 'Home', 'url' => 'index.php'],
                    ['name' => 'Admission', 'url' => 'admission-process.php'],
                    ['name' => 'Fee Payment Details', 'url' => '']
                ]
            ],

            // 22. Admin Inquiries Dashboard (Protected)
            'admin-inquiries.php' => [
                'title'       => "Inquiries & Registration Dashboard | {$schoolName}",
                'description' => "Restricted administrative records and inquiry portal for The Discovery International School.",
                'keywords'    => "admin dashboard, school inquiry viewer",
                'h1'          => "Inquiry & Registration Records",
                'subtitle'    => "Protected Administrator Session &bull; Real-Time Lead Logs",
                'badge'       => "Administrative Dashboard",
                'canonical'   => $baseUrl . '/admin-inquiries.php',
                'og_image'    => $logoImage,
                'og_type'     => 'website',
                'robots'      => 'noindex, nofollow',
                'breadcrumbs' => [
                    ['name' => 'Home', 'url' => 'index.php'],
                    ['name' => 'Admin Inquiries', 'url' => '']
                ]
            ]
        ];
    }
}

if (!function_exists('get_page_seo')) {
    /**
     * Resolves the active page's SEO metadata with sensible defaults
     */
    function get_page_seo($school, $page_file = null) {
        if ($page_file === null) {
            $page_file = basename($_SERVER['PHP_SELF'] ?? 'index.php');
        }

        $allSeo = get_site_pages_seo($school);
        $baseUrl = rtrim($school['base_url'] ?? 'https://thediscoveryinternational.com', '/');

        if (isset($allSeo[$page_file])) {
            $seo = $allSeo[$page_file];
        } else {
            // Default Fallback
            $cleanName = ucwords(str_replace(['-', '_', '.php'], [' ', ' ', ''], $page_file));
            $seo = [
                'title'       => "{$cleanName} | " . ($school['name'] ?? 'The Discovery International School'),
                'description' => ($school['name'] ?? 'The Discovery International School') . " - A Premier CBSE-Affiliated School in Prithla, Palwal (Haryana). Affiliation No: " . ($school['affiliation_no'] ?? '532266') . ".",
                'keywords'    => "The Discovery International School, CBSE school Palwal, school in Prithla, admission 2026-27",
                'h1'          => $cleanName,
                'subtitle'    => $school['tagline'] ?? '',
                'badge'       => 'The Discovery International School',
                'canonical'   => $baseUrl . '/' . $page_file,
                'og_image'    => $baseUrl . '/images/school-building.jpg',
                'og_type'     => 'website',
                'robots'      => 'index, follow',
                'breadcrumbs' => [
                    ['name' => 'Home', 'url' => 'index.php'],
                    ['name' => $cleanName, 'url' => '']
                ]
            ];
        }

        return $seo;
    }
}

if (!function_exists('render_seo_meta_tags')) {
    /**
     * Renders standard Google/SEO/Social Meta Tags & JSON-LD Schemas
     */
    function render_seo_meta_tags($seo, $school) {
        $baseUrl = rtrim($school['base_url'] ?? 'https://thediscoveryinternational.com', '/');
        $schoolName = $school['name'] ?? 'The Discovery International School';
        $fullAddress = $school['address'] ?? 'Prithla – Sehrala Rd, Village Prithla, Palwal, Haryana 121102';
        $phone1 = $school['phone1'] ?? '09350170199';
        $email = $school['email'] ?? 'thediscoveryinternational@gmail.com';
        $affiliationNo = $school['affiliation_no'] ?? '532266';
        $society = $school['society'] ?? 'Beer Bati Education Society';

        $title = $seo['title'];
        $desc = $seo['description'];
        $keywords = $seo['keywords'];
        $canonical = $seo['canonical'];
        $robots = $seo['robots'] ?? 'index, follow';
        $ogImage = $seo['og_image'];
        $ogType = $seo['og_type'] ?? 'website';

        // Prepare BreadcrumbList JSON-LD
        $breadcrumbSchema = [];
        if (!empty($seo['breadcrumbs']) && is_array($seo['breadcrumbs'])) {
            $itemList = [];
            foreach ($seo['breadcrumbs'] as $idx => $bc) {
                $itemUrl = !empty($bc['url']) ? (strpos($bc['url'], 'http') === 0 ? $bc['url'] : $baseUrl . '/' . ltrim($bc['url'], '/')) : $canonical;
                $itemList[] = [
                    '@type'    => 'ListItem',
                    'position' => $idx + 1,
                    'name'     => $bc['name'],
                    'item'     => $itemUrl
                ];
            }
            $breadcrumbSchema = [
                '@context'        => 'https://schema.org',
                '@type'           => 'BreadcrumbList',
                'itemListElement' => $itemList
            ];
        }

        // Prepare School / EducationalOrganization JSON-LD
        $schoolSchema = [
            '@context'         => 'https://schema.org',
            '@type'            => 'School',
            '@id'              => $baseUrl . '/#school',
            'name'             => $schoolName,
            'alternateName'    => 'Discovery International School Prithla',
            'legalName'        => $schoolName . ' (' . $society . ')',
            'url'              => $baseUrl . '/',
            'logo'             => $baseUrl . '/images/logo.png',
            'image'            => $baseUrl . '/images/school-building.jpg',
            'telephone'        => '+91' . preg_replace('/\D/', '', $phone1),
            'email'            => $email,
            'foundingDate'     => '2016',
            'address'          => [
                '@type'           => 'PostalAddress',
                'streetAddress'   => 'Prithla – Sehrala Rd, Village Prithla',
                'addressLocality' => 'Palwal',
                'addressRegion'   => 'Haryana',
                'postalCode'      => '121102',
                'addressCountry'  => 'IN'
            ],
            'geo'              => [
                '@type'     => 'GeoCoordinates',
                'latitude'  => 28.2718,
                'longitude' => 77.2917
            ],
            'hasCredential'    => [
                '@type'              => 'EducationalOccupationalCredential',
                'credentialCategory' => 'Affiliation Certificate',
                'recognizedBy'       => [
                    '@type' => 'Organization',
                    'name'  => 'Central Board of Secondary Education (CBSE), New Delhi'
                ],
                'identifier'         => $affiliationNo
            ],
            'sameAs'           => [
                $school['facebook'] ?? 'https://www.facebook.com/p/The-Discovery-International-School-100063948886688/',
                $school['google_map'] ?? 'https://g.co/kgs/SW46RRR'
            ]
        ];

        // Prepare WebPage JSON-LD
        $webPageSchema = [
            '@context'    => 'https://schema.org',
            '@type'       => 'WebPage',
            '@id'         => $canonical . '#webpage',
            'url'         => $canonical,
            'name'        => $title,
            'description' => $desc,
            'inLanguage'  => 'en-IN',
            'isPartOf'    => [
                '@type' => 'WebSite',
                '@id'   => $baseUrl . '/#website',
                'url'   => $baseUrl . '/',
                'name'  => $schoolName
            ]
        ];
        ?>
    <!-- Core Primary Meta Tags -->
    <title><?php echo htmlspecialchars($title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($desc); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($keywords); ?>">
    <meta name="robots" content="<?php echo htmlspecialchars($robots); ?>">
    <meta name="author" content="<?php echo htmlspecialchars($schoolName); ?>">
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical); ?>">

    <!-- Geographic & Regional Meta Tags -->
    <meta name="geo.region" content="IN-HR">
    <meta name="geo.placename" content="Prithla, Palwal, Haryana">
    <meta name="geo.position" content="28.2718;77.2917">
    <meta name="ICBM" content="28.2718, 77.2917">

    <!-- Open Graph / Facebook Protocol -->
    <meta property="og:locale" content="en_IN">
    <meta property="og:type" content="<?php echo htmlspecialchars($ogType); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($desc); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonical); ?>">
    <meta property="og:site_name" content="<?php echo htmlspecialchars($schoolName); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($ogImage); ?>">
    <meta property="og:image:secure_url" content="<?php echo htmlspecialchars($ogImage); ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="<?php echo htmlspecialchars($title); ?>">

    <!-- Twitter Cards Protocol -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($desc); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($ogImage); ?>">
    <meta name="twitter:image:alt" content="<?php echo htmlspecialchars($title); ?>">

    <!-- Search Engine Crawler Directives -->
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">

    <!-- Structured Data: Schema.org EducationalOrganization -->
    <script type="application/ld+json">
    <?php echo json_encode($schoolSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
    </script>

    <!-- Structured Data: Schema.org WebPage -->
    <script type="application/ld+json">
    <?php echo json_encode($webPageSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
    </script>

    <?php if (!empty($breadcrumbSchema)): ?>
    <!-- Structured Data: Schema.org BreadcrumbList -->
    <script type="application/ld+json">
    <?php echo json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
    </script>
    <?php endif; ?>
        <?php
    }
}

if (!function_exists('render_page_banner')) {
    /**
     * Standardized Inner-Page Header Banner with Accessible Breadcrumbs
     * Solves the client request: "1-1 sabhi pages ke liye banaye"
     */
    function render_page_banner($custom_title = null, $custom_breadcrumbs = null, $custom_subtitle = null, $custom_badge = null) {
        global $school;
        $pageFile = basename($_SERVER['PHP_SELF'] ?? 'index.php');
        $seo = get_page_seo($school, $pageFile);

        $h1Title     = $custom_title ?: ($seo['h1'] ?? $seo['title']);
        $subtitle    = $custom_subtitle ?: ($seo['subtitle'] ?? '');
        $badge       = $custom_badge ?: ($seo['badge'] ?? '');
        $breadcrumbs = $custom_breadcrumbs ?: ($seo['breadcrumbs'] ?? []);
        ?>
    <!-- Standardized SEO-Optimized Page Header Banner -->
    <div class="page-header">
        <div class="container page-header-content">
            <?php if (!empty($badge)): ?>
                <span class="hero-badge-tag" style="background: rgba(245, 158, 11, 0.2); color: var(--gold-400); border: 1px solid var(--gold-400); margin-bottom: 10px; display: inline-flex; align-items: center; gap: 6px;">
                    <i class="fas fa-sparkles"></i> <?php echo htmlspecialchars($badge); ?>
                </span>
            <?php endif; ?>

            <h1 class="page-title" style="margin-bottom: 8px;"><?php echo htmlspecialchars($h1Title); ?></h1>

            <?php if (!empty($subtitle)): ?>
                <p class="page-subtitle" style="color: #cbd5e1; font-size: 0.98rem; max-width: 820px; margin: 0 0 16px; line-height: 1.5;">
                    <?php echo htmlspecialchars($subtitle); ?>
                </p>
            <?php endif; ?>

            <?php if (!empty($breadcrumbs) && is_array($breadcrumbs)): ?>
                <nav aria-label="Breadcrumb">
                    <ul class="breadcrumbs" itemscope itemtype="https://schema.org/BreadcrumbList">
                        <?php foreach ($breadcrumbs as $idx => $bc): ?>
                            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                <?php if (!empty($bc['url'])): ?>
                                    <a href="<?php echo htmlspecialchars($bc['url']); ?>" itemprop="item">
                                        <?php if ($idx === 0): ?><i class="fas fa-home" style="margin-right: 3px;"></i><?php endif; ?>
                                        <span itemprop="name"><?php echo htmlspecialchars($bc['name']); ?></span>
                                    </a>
                                <?php else: ?>
                                    <span itemprop="name" style="color: var(--gold-300); font-weight: 600;"><?php echo htmlspecialchars($bc['name']); ?></span>
                                <?php endif; ?>
                                <meta itemprop="position" content="<?php echo $idx + 1; ?>">
                            </li>
                            <?php if ($idx < count($breadcrumbs) - 1): ?>
                                <li><span class="separator"><i class="fas fa-chevron-right"></i></span></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            <?php endif; ?>
        </div>
    </div>
        <?php
    }
}
