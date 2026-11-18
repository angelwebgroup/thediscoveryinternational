<?php 
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/gallery_data.php';
include 'header.php'; 
?>

<main id="content" class="site-main">

    <!-- Page Header -->
    <div class="page-header">
        <div class="container page-header-content">
            <h1>Photo Gallery</h1>
            <ul class="breadcrumbs">
                <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                <li><span class="separator"><i class="fas fa-chevron-right"></i></span></li>
                <li><span>Photo Gallery</span></li>
            </ul>
        </div>
    </div>

    <!-- Page Content Container -->
    <div class="container page-container">
        <div class="content-box">
            
            <div class="text-center" style="margin-bottom: 2.5rem;">
                <span class="section-tag section-tag-crimson"><i class="fas fa-camera-retro"></i> Life at The Discovery</span>
                <h2 style="font-size: 2.2rem; color: var(--navy-950); margin-bottom: 8px;">Memories, Milestones &amp; Campus Vistas</h2>
                <p style="color: var(--slate-600); max-width: 680px; margin: 0 auto;">
                    Take a visual journey through our state-of-the-art campus, sports tournaments, cultural celebrations, academic achievements, and classroom engagements.
                </p>
            </div>

            <!-- Gallery Grid with Lightbox Interaction -->
            <div class="gallery-grid" style="margin-top: 20px;">
                <?php foreach ($gallery_images as $item): ?>
                    <div class="gallery-card" onclick="openGalleryModal('<?php echo htmlspecialchars($item['image']); ?>', '<?php echo htmlspecialchars(addslashes($item['title'])); ?>', '<?php echo htmlspecialchars(addslashes($item['category'])); ?>')">
                        <img src="<?php echo htmlspecialchars($item['thumb']); ?>" alt="<?php echo htmlspecialchars($item['title']); ?>" loading="lazy">
                        <div class="gallery-overlay">
                            <span class="gallery-overlay-tag"><?php echo htmlspecialchars($item['category']); ?></span>
                            <h5><?php echo htmlspecialchars($item['title']); ?></h5>
                            <span><i class="fas fa-magnifying-glass-plus"></i> Click to preview</span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="callout callout-gold" style="margin-top: 3rem; text-align: center;">
                <h4 style="font-size: 1.1rem; color: var(--navy-950); margin-bottom: 6px;"><i class="fas fa-camera"></i> More Highlights on our Official Channels</h4>
                <p style="font-size: 0.92rem; color: var(--slate-700); margin: 0 0 14px;">
                    Follow our social channels to view real-time photo albums, student projects, and celebration stories.
                </p>
                <div style="display: flex; justify-content: center; gap: 12px; flex-wrap: wrap;">
                    <a href="<?php echo htmlspecialchars($school['facebook']); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary" style="font-size: 0.88rem; padding: 8px 20px;">
                        <i class="fab fa-facebook-f"></i> Visit Our Facebook Page
                    </a>
                    <a href="<?php echo htmlspecialchars($school['google_map']); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-crimson" style="font-size: 0.88rem; padding: 8px 20px;">
                        <i class="fas fa-map-location-dot"></i> Check Google Reviews &amp; Photos
                    </a>
                </div>
            </div>

        </div>
    </div>

</main>

<!-- Lightbox Modal -->
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
