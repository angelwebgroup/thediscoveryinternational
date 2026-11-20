<?php 
require_once __DIR__ . '/config.php'; 
require_once __DIR__ . '/seo_helper.php';
$current_page = basename($_SERVER['PHP_SELF'] ?? 'index.php');

// Allow page-specific override of SEO variables if set before including header.php
$page_seo = get_page_seo($school, $current_page);
if (!empty($page_title))       $page_seo['title']       = $page_title;
if (!empty($page_description)) $page_seo['description'] = $page_description;
if (!empty($page_keywords))    $page_seo['keywords']    = $page_keywords;
if (!empty($canonical_url))    $page_seo['canonical']   = $canonical_url;
if (!empty($og_image))         $page_seo['og_image']    = $og_image;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Complete Dynamic SEO Meta Tags, Open Graph, Twitter Cards & JSON-LD Schemas -->
    <?php render_seo_meta_tags($page_seo, $school); ?>

    <!-- Favicon & App Icons -->
    <link rel="icon" type="image/png" href="images/logo.png">
    <link rel="apple-touch-icon" href="images/logo.png">
    
    <!-- Modern Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Outfit:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css?v=3.3">
</head>
<body>

    <!-- Top Bar with Contact & Social Shortcuts -->
    <div class="top-bar">
        <div class="container top-bar-container">
            <div class="top-bar-left">
                <a href="tel:<?php echo htmlspecialchars($school['phone1']); ?>" class="top-phone"><i class="fas fa-phone-alt"></i> Call Us: <?php echo htmlspecialchars($school['phone1']); ?></a>
                <a href="mailto:<?php echo htmlspecialchars($school['email']); ?>" class="hide-mobile"><i class="fas fa-envelope"></i> <?php echo htmlspecialchars($school['email']); ?></a>
                <span class="hide-mobile"><i class="fas fa-map-marker-alt"></i> Prithla, Palwal (Haryana)</span>
            </div>
            <div class="top-bar-right">
                <a href="online-admission.php" class="topbar-btn topbar-btn-admission hide-mobile"><i class="fas fa-user-graduate"></i> Admission 2026-27</a>
                <a href="fee-structure.php" class="topbar-btn topbar-btn-fee hide-mobile"><i class="fas fa-file-invoice-dollar"></i> Fee Structure</a>
                <div class="social-circles hide-mobile">
                    <a href="<?php echo htmlspecialchars($school['facebook']); ?>" target="_blank" rel="noopener noreferrer" class="social-circle sc-facebook" title="Facebook Page"><i class="fab fa-facebook-f"></i></a>
                    <a href="<?php echo htmlspecialchars($school['google_map']); ?>" target="_blank" rel="noopener noreferrer" class="social-circle sc-map" title="Google Maps Location"><i class="fas fa-map-marked-alt"></i></a>
                    <a href="<?php echo htmlspecialchars($school['whatsapp']); ?>" target="_blank" rel="noopener noreferrer" class="social-circle sc-whatsapp" title="WhatsApp Chat"><i class="fab fa-whatsapp"></i></a>
                </div>
                <a href="<?php echo htmlspecialchars($school['whatsapp']); ?>" target="_blank" rel="noopener noreferrer" class="mobile-wa-quick show-mobile-only" title="Chat on WhatsApp">
                    <i class="fab fa-whatsapp"></i> WhatsApp
                </a>
            </div>
        </div>
    </div>

    <!-- Main Branding Header -->
    <header class="site-branding-header">
        <div class="container branding-container">
            <a href="index.php" class="brand-wrapper" title="<?php echo htmlspecialchars($school['name']); ?>">
                <img src="images/logo.png" alt="<?php echo htmlspecialchars($school['name']); ?> Crest Logo" class="brand-logo-img">
                <div class="brand-info">
                    <span class="school-brand-title"><?php echo htmlspecialchars($school['name']); ?></span>
                    <div class="school-brand-sub">
                        <span class="school-brand-tagline hide-mobile">A Premier CBSE-Affiliated School</span>
                        <span class="aff-pill"><i class="fas fa-certificate"></i> CBSE Affiliation No: <?php echo htmlspecialchars($school['affiliation_no']); ?></span>
                    </div>
                    <div class="school-brand-address hide-mobile">
                        <i class="fas fa-location-dot"></i>
                        <span><?php echo htmlspecialchars($school['address']); ?></span>
                    </div>
                </div>
            </a>

            <div class="branding-badges hide-mobile">
                <div class="header-contact-callout">
                    <div class="callout-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <div class="callout-text">
                        <span>Admissions &amp; Enquiry</span>
                        <a href="tel:<?php echo htmlspecialchars($school['phone1']); ?>"><?php echo htmlspecialchars($school['phone1']); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Navigation Bar -->
    <nav class="site-nav-bar">
        <div class="container nav-container">
            <button class="mobile-nav-toggle" id="mobileNavToggle" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="main-nav" id="mainNav">
                <ul>
                    <li><a href="index.php" class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>"><i class="fas fa-home" style="font-size: 0.85rem;"></i> Home</a></li>
                    
                    <li class="has-dropdown">
                        <a href="about.php" class="<?php echo in_array($current_page, ['about.php', 'chairmans-desk.php', 'principals-desk.php', 'vision-mission.php', 'managing-committee.php']) ? 'active' : ''; ?>">
                            About Us <i class="fas fa-chevron-down nav-arrow"></i>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="about.php">About School &amp; Society</a></li>
                            <li><a href="principals-desk.php">Principal's Desk</a></li>
                            <li><a href="chairmans-desk.php">Chairman's Desk</a></li>
                            <li><a href="vision-mission.php">Vision &amp; Mission</a></li>
                            <li><a href="managing-committee.php">Managing Committee</a></li>
                        </ul>
                    </li>

                    <li class="has-dropdown">
                        <a href="admission-process.php" class="<?php echo in_array($current_page, ['admission-process.php', 'online-admission.php', 'fee-structure.php', 'documents-required.php', 'transport-routes.php']) ? 'active' : ''; ?>">
                            Admission <i class="fas fa-chevron-down nav-arrow"></i>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="admission-process.php">Admission Procedure</a></li>
                            <li><a href="online-admission.php">Online Registration 2026-27</a></li>
                            <li><a href="fee-structure.php">Fee Structure</a></li>
                            <li><a href="documents-required.php">Documents Required</a></li>
                            <li><a href="transport-routes.php">Transport Facility &amp; Routes</a></li>
                        </ul>
                    </li>

                    <li><a href="faculty.php" class="<?php echo ($current_page == 'faculty.php') ? 'active' : ''; ?>">Our Staff</a></li>
                    <li><a href="infrastructure.php" class="<?php echo ($current_page == 'infrastructure.php') ? 'active' : ''; ?>">Facilities</a></li>
                    <li><a href="mandatory-disclosure.php" class="<?php echo ($current_page == 'mandatory-disclosure.php') ? 'active' : ''; ?>">Mandatory Disclosure</a></li>
                    <li><a href="gallery.php" class="<?php echo ($current_page == 'gallery.php') ? 'active' : ''; ?>">Photo Gallery</a></li>
                    <li><a href="contact-us.php" class="<?php echo ($current_page == 'contact-us.php') ? 'active' : ''; ?>">Contact Us</a></li>
                </ul>
            </div>

            <div class="nav-cta">
                <a href="online-admission.php" class="btn-nav-apply">
                    <i class="fas fa-pen-to-square"></i> Apply Now
                </a>
            </div>
        </div>
    </nav>
