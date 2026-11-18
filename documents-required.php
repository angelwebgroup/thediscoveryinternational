<?php 
require_once __DIR__ . '/config.php';
include 'header.php'; 
?>

<main id="content" class="site-main">

    <!-- Page Header -->
    <div class="page-header">
        <div class="container page-header-content">
            <h1>Documents Required for Admission</h1>
            <ul class="breadcrumbs">
                <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                <li><span class="separator"><i class="fas fa-chevron-right"></i></span></li>
                <li><a href="admission-process.php">Admission</a></li>
                <li><span class="separator"><i class="fas fa-chevron-right"></i></span></li>
                <li><span>Documents Required</span></li>
            </ul>
        </div>
    </div>

    <!-- Page Content Container -->
    <div class="container page-container">
        <div class="content-box">
            
            <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px; margin-bottom: 2rem;">
                <div>
                    <span class="section-tag section-tag-crimson"><i class="fas fa-clipboard-check"></i> Official Admission Checklist</span>
                    <h2 style="font-size: 2.1rem; color: var(--navy-950); margin-bottom: 4px;">Documents Required at the Time of Admission</h2>
                    <p style="color: var(--slate-600); margin: 0;">Please ensure original and photocopies of the following 13 documents are ready for submission:</p>
                </div>
                <div>
                    <a href="online-admission.php" class="btn btn-hero-primary"><i class="fas fa-user-graduate"></i> Start Online Admission</a>
                </div>
            </div>

            <!-- The 13 Points from Image 4 -->
            <div style="background: var(--slate-50); border: 1px solid var(--slate-200); border-radius: var(--radius-lg); padding: 32px; margin-bottom: 2.5rem; border-top: 4px solid var(--accent);">
                <ol style="padding-left: 24px; margin: 0; line-height: 2; font-size: 1rem; color: var(--navy-950);">
                    <li style="margin-bottom: 8px;"><strong>5 passport size photographs</strong> each of Student, Father and Mother.</li>
                    <li style="margin-bottom: 8px;"><strong>A copy of Aadhar Card</strong> of Student, Father and Mother.</li>
                    <li style="margin-bottom: 8px;"><strong>Birth Certificate</strong> issued by Municipal Corporation / competent authority.</li>
                    <li style="margin-bottom: 8px;"><strong>Transfer Certificate (TC)</strong> from the school last attended (countersigned if required).</li>
                    <li style="margin-bottom: 8px;"><strong>Caste certificate</strong> of categories other than General (SC/ST/OBC).</li>
                    <li style="margin-bottom: 8px;"><strong>Report Card / Marksheet</strong> of the previous qualifying class.</li>
                    <li style="margin-bottom: 8px;"><strong>Proof of Residence</strong> of both permanent and current addresses (Voter ID, Electricity Bill, Ration Card).</li>
                    <li style="margin-bottom: 8px;"><strong>Health / Immunization Certificate</strong> certifying routine vaccinations.</li>
                    <li style="margin-bottom: 8px;"><strong>Character Certificate</strong> from the last school attended (only for students seeking admission in grade IX).</li>
                    <li style="margin-bottom: 8px;"><strong>Migration Certificate</strong> (only for Non-CBSE students seeking admission in grade XI).</li>
                    <li style="margin-bottom: 8px;"><strong>Attested copies of legal document</strong> if the child is being brought up by a single parent.</li>
                    <li style="margin-bottom: 8px;"><strong>Affidavit of Guardianship</strong> if the child lives with a local guardian.</li>
                    <li style="margin-bottom: 8px;"><strong>A copy of a valid Passport</strong> (if available).</li>
                </ol>
            </div>

            <!-- Admission Policy Note -->
            <div class="callout callout-gold">
                <h4 style="color: var(--navy-950); font-size: 1.05rem; margin-bottom: 6px;"><i class="fas fa-scale-balanced" style="color: var(--gold-600);"></i> Admission Policy &amp; Scrutiny</h4>
                <p style="font-size: 0.92rem; color: var(--slate-700); margin: 0; line-height: 1.65;">
                    Issue of Registration is no guarantee for admissions. Forms are likely to be rejected if information or documents are found incomplete, false, or do not meet eligibility criteria. All admissions are granted subject to availability of seats, merit, and verification of original certificates.
                </p>
            </div>

        </div>
    </div>

</main>

<?php include 'footer.php'; ?>
