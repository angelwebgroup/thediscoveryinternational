<?php 
require_once __DIR__ . '/config.php';
include 'header.php'; 
?>

<main id="content" class="site-main">

    <!-- Standardized SEO-Optimized Page Header Banner -->
    <?php render_page_banner(); ?>

    <!-- Page Content Container -->
    <div class="container page-container">
        <div class="content-box">
            
            <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 14px; margin-bottom: 2rem;">
                <div>
                    <span class="section-tag section-tag-crimson"><i class="fas fa-certificate"></i> CBSE Compliance (Appendix - IX)</span>
                    <h2 style="font-size: 2.1rem; color: var(--navy-950); margin-bottom: 4px;">Mandatory Public Disclosure</h2>
                    <p style="color: var(--slate-600); margin: 0;">Official regulatory information and verification documents as prescribed by the Central Board of Secondary Education (CBSE).</p>
                </div>
                <div>
                    <button type="button" class="btn btn-primary" onclick="copyPageUrl(this)" style="font-size: 0.88rem; padding: 0.6rem 1.25rem;">
                        <i class="fas fa-link"></i> Copy Page Link
                    </button>
                </div>
            </div>

            <!-- SECTION A: GENERAL INFORMATION -->
            <div style="margin-bottom: 2.5rem;">
                <h3 style="color: var(--navy-950); font-size: 1.25rem; font-weight: 800; margin-bottom: 12px; text-transform: uppercase; border-left: 4px solid var(--accent); padding-left: 12px;">
                    A. General Information
                </h3>
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th style="width: 10%;">SR NO.</th>
                                <th style="width: 45%;">INFORMATION</th>
                                <th>DETAILS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><strong>NAME OF THE SCHOOL</strong></td>
                                <td><strong>The Discovery International School</strong></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><strong>AFFILIATION NO.</strong></td>
                                <td><strong>532266</strong></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><strong>SCHOOL CODE</strong></td>
                                <td><strong>N/A</strong></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><strong>COMPLETE ADDRESS WITH PIN CODE</strong></td>
                                <td>PRITHLA TO CHHAPROLLA ROAD, VILLAGE PRITHLA, PALWAL, PALWAL, HARYANA - 121102</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><strong>PRINCIPAL NAME &amp; QUALIFICATION</strong></td>
                                <td>Ms. Jyoti (BCA, MCA, B.Ed)</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td><strong>SCHOOL EMAIL ID</strong></td>
                                <td><a href="mailto:thediscoveryinternational@gmail.com" style="color: var(--navy-900); font-weight: 700;">thediscoveryinternational@gmail.com</a></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td><strong>CONTACT DETAILS (LANDLINE/MOBILE)</strong></td>
                                <td>09350170199, 9467448888</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- SECTION B: DOCUMENTS AND INFORMATION -->
            <div style="margin-bottom: 2.5rem;">
                <h3 style="color: var(--navy-950); font-size: 1.25rem; font-weight: 800; margin-bottom: 12px; text-transform: uppercase; border-left: 4px solid var(--crimson-700); padding-left: 12px;">
                    B. Documents and Information
                </h3>
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th style="width: 8%;">SR.NO.</th>
                                <th style="width: 54%;">DOCUMENTS/INFORMATION</th>
                                <th style="width: 38%;">VIEW &amp; COPY LINK</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><strong>RECOGNITION CERTIFICATE</strong></td>
                                <td>
                                    <div class="doc-actions-wrap">
                                        <a href="documents/Recognition-Cerificate.pdf" target="_blank" class="btn-doc-download" title="Open PDF">
                                            <i class="fas fa-file-pdf"></i> PDF Download
                                        </a>
                                        <button type="button" class="btn-copy-doc-link" onclick="copyDocumentLink('documents/Recognition-Cerificate.pdf', this)" title="Copy direct link of Recognition Certificate">
                                            <i class="fas fa-link"></i> <span class="copy-lbl">Copy Link</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><strong>NOC STATE CERTIFICATE</strong></td>
                                <td>
                                    <div class="doc-actions-wrap">
                                        <a href="documents/NOC-State-Certificate.pdf" target="_blank" class="btn-doc-download" title="Open PDF">
                                            <i class="fas fa-file-pdf"></i> PDF Download
                                        </a>
                                        <button type="button" class="btn-copy-doc-link" onclick="copyDocumentLink('documents/NOC-State-Certificate.pdf', this)" title="Copy direct link of NOC State Certificate">
                                            <i class="fas fa-link"></i> <span class="copy-lbl">Copy Link</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><strong>LAND CERTIFICATE</strong></td>
                                <td>
                                    <div class="doc-actions-wrap">
                                        <a href="documents/Land-Certificate.pdf" target="_blank" class="btn-doc-download" title="Open PDF">
                                            <i class="fas fa-file-pdf"></i> PDF Download
                                        </a>
                                        <button type="button" class="btn-copy-doc-link" onclick="copyDocumentLink('documents/Land-Certificate.pdf', this)" title="Copy direct link of Land Certificate">
                                            <i class="fas fa-link"></i> <span class="copy-lbl">Copy Link</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><strong>HEALTH &amp; HYGIENE CERTIFICATE</strong></td>
                                <td>
                                    <div class="doc-actions-wrap">
                                        <a href="documents/Health-Hygine-Certificate.pdf" target="_blank" class="btn-doc-download" title="Open PDF">
                                            <i class="fas fa-file-pdf"></i> PDF Download
                                        </a>
                                        <button type="button" class="btn-copy-doc-link" onclick="copyDocumentLink('documents/Health-Hygine-Certificate.pdf', this)" title="Copy direct link of Health & Hygiene Certificate">
                                            <i class="fas fa-link"></i> <span class="copy-lbl">Copy Link</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><strong>COPY OF SOCIETY REGISTRATION CERTIFICATE</strong> (Beer Bati Education Society)</td>
                                <td>
                                    <div class="doc-actions-wrap">
                                        <a href="documents/Society-Registration-Certificate.pdf" target="_blank" class="btn-doc-download" title="Open PDF">
                                            <i class="fas fa-file-pdf"></i> PDF Download
                                        </a>
                                        <button type="button" class="btn-copy-doc-link" onclick="copyDocumentLink('documents/Society-Registration-Certificate.pdf', this)" title="Copy direct link of Society Registration Certificate">
                                            <i class="fas fa-link"></i> <span class="copy-lbl">Copy Link</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td><strong>SMC CERTIFICATE</strong></td>
                                <td>
                                    <div class="doc-actions-wrap">
                                        <a href="documents/smc-1.pdf" target="_blank" class="btn-doc-download" title="Open PDF">
                                            <i class="fas fa-file-pdf"></i> PDF Download
                                        </a>
                                        <button type="button" class="btn-copy-doc-link" onclick="copyDocumentLink('documents/smc-1.pdf', this)" title="Copy direct link of SMC Certificate">
                                            <i class="fas fa-link"></i> <span class="copy-lbl">Copy Link</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td><strong>WATER TESTING CERTIFICATE</strong></td>
                                <td>
                                    <div class="doc-actions-wrap">
                                        <a href="documents/Water-Testing-Certificate.pdf" target="_blank" class="btn-doc-download" title="Open PDF">
                                            <i class="fas fa-file-pdf"></i> PDF Download
                                        </a>
                                        <button type="button" class="btn-copy-doc-link" onclick="copyDocumentLink('documents/Water-Testing-Certificate.pdf', this)" title="Copy direct link of Water Testing Certificate">
                                            <i class="fas fa-link"></i> <span class="copy-lbl">Copy Link</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td><strong>STAFF DETAILS</strong></td>
                                <td>
                                    <div class="doc-actions-wrap">
                                        <a href="documents/Staff-Details-PDF.pdf" target="_blank" class="btn-doc-download" title="Open PDF">
                                            <i class="fas fa-file-pdf"></i> PDF Download
                                        </a>
                                        <button type="button" class="btn-copy-doc-link" onclick="copyDocumentLink('documents/Staff-Details-PDF.pdf', this)" title="Copy direct link of Staff Details PDF">
                                            <i class="fas fa-link"></i> <span class="copy-lbl">Copy Link</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td><strong>FIRE SAFETY CERTIFICATE</strong></td>
                                <td>
                                    <div class="doc-actions-wrap">
                                        <a href="documents/fire.webp" target="_blank" class="btn-doc-download" title="Open Certificate Image">
                                            <i class="fas fa-file-image"></i> View Certificate
                                        </a>
                                        <button type="button" class="btn-copy-doc-link" onclick="copyDocumentLink('documents/fire.webp', this)" title="Copy direct link of Fire Safety Certificate">
                                            <i class="fas fa-link"></i> <span class="copy-lbl">Copy Link</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td><strong>BUILDING SAFETY CERTIFICATE</strong></td>
                                <td>
                                    <div class="doc-actions-wrap">
                                        <a href="documents/Building-Safety-Certificate.pdf" target="_blank" class="btn-doc-download" title="Open PDF">
                                            <i class="fas fa-file-pdf"></i> PDF Download
                                        </a>
                                        <button type="button" class="btn-copy-doc-link" onclick="copyDocumentLink('documents/Building-Safety-Certificate.pdf', this)" title="Copy direct link of Building Safety Certificate">
                                            <i class="fas fa-link"></i> <span class="copy-lbl">Copy Link</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td><strong>SEXUAL HARASSMENT COMMITTEE</strong></td>
                                <td>
                                    <div class="doc-actions-wrap">
                                        <a href="documents/SEXUALHARASSMENTCOMMITTEE.pdf" target="_blank" class="btn-doc-download" title="Open PDF">
                                            <i class="fas fa-file-pdf"></i> PDF Download
                                        </a>
                                        <button type="button" class="btn-copy-doc-link" onclick="copyDocumentLink('documents/SEXUALHARASSMENTCOMMITTEE.pdf', this)" title="Copy direct link of Sexual Harassment Committee document">
                                            <i class="fas fa-link"></i> <span class="copy-lbl">Copy Link</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td><strong>COMPLAINT REDRESSAL COMMITTEE</strong></td>
                                <td>
                                    <div class="doc-actions-wrap">
                                        <a href="documents/COMPLAINT-REDRESSAL-COMMITTEE.pdf" target="_blank" class="btn-doc-download" title="Open PDF">
                                            <i class="fas fa-file-pdf"></i> PDF Download
                                        </a>
                                        <button type="button" class="btn-copy-doc-link" onclick="copyDocumentLink('documents/COMPLAINT-REDRESSAL-COMMITTEE.pdf', this)" title="Copy direct link of Complaint Redressal Committee document">
                                            <i class="fas fa-link"></i> <span class="copy-lbl">Copy Link</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- SECTION C: RESULT AND ACADEMICS -->
            <div style="margin-bottom: 2.5rem;">
                <h3 style="color: var(--navy-950); font-size: 1.25rem; font-weight: 800; margin-bottom: 12px; text-transform: uppercase; border-left: 4px solid var(--navy-800); padding-left: 12px;">
                    C. Result and Academics
                </h3>
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th style="width: 8%;">SR.NO.</th>
                                <th style="width: 54%;">DOCUMENTS/INFORMATION</th>
                                <th style="width: 38%;">VIEW &amp; COPY LINK</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><strong>FEE STRUCTURE OF THE SCHOOL</strong></td>
                                <td>
                                    <div class="doc-actions-wrap">
                                        <a href="documents/Fee-Structure.pdf" target="_blank" class="btn-doc-download" title="Open PDF">
                                            <i class="fas fa-file-pdf"></i> PDF Download
                                        </a>
                                        <button type="button" class="btn-copy-doc-link" onclick="copyDocumentLink('documents/Fee-Structure.pdf', this)" title="Copy direct link of Fee Structure PDF">
                                            <i class="fas fa-link"></i> <span class="copy-lbl">Copy Link</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><strong>ACADEMIC CALENDAR</strong></td>
                                <td>
                                    <div class="doc-actions-wrap">
                                        <a href="documents/Acadmic-Calendar.pdf" target="_blank" class="btn-doc-download" title="Open PDF">
                                            <i class="fas fa-file-pdf"></i> PDF Download
                                        </a>
                                        <button type="button" class="btn-copy-doc-link" onclick="copyDocumentLink('documents/Acadmic-Calendar.pdf', this)" title="Copy direct link of Academic Calendar PDF">
                                            <i class="fas fa-link"></i> <span class="copy-lbl">Copy Link</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><strong>LIST OF SCHOOL MANAGEMENT COMMITTEE (SMC)</strong></td>
                                <td>
                                    <div class="doc-actions-wrap">
                                        <a href="documents/smc-1.pdf" target="_blank" class="btn-doc-download" title="Open PDF">
                                            <i class="fas fa-file-pdf"></i> PDF Download
                                        </a>
                                        <button type="button" class="btn-copy-doc-link" onclick="copyDocumentLink('documents/smc-1.pdf', this)" title="Copy direct link of SMC List PDF">
                                            <i class="fas fa-link"></i> <span class="copy-lbl">Copy Link</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><strong>LIST OF PTA MEMBERS</strong></td>
                                <td>
                                    <div class="doc-actions-wrap">
                                        <a href="documents/pta.pdf" target="_blank" class="btn-doc-download" title="Open PDF">
                                            <i class="fas fa-file-pdf"></i> PDF Download
                                        </a>
                                        <button type="button" class="btn-copy-doc-link" onclick="copyDocumentLink('documents/pta.pdf', this)" title="Copy direct link of PTA List PDF">
                                            <i class="fas fa-link"></i> <span class="copy-lbl">Copy Link</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><strong>LAST THREE-YEAR RESULT OF THE BOARD EXAMINATION AS PER APPLICABILITY</strong></td>
                                <td>
                                    <div class="doc-actions-wrap">
                                        <a href="excellent-result-in-10th-class-board-examination-by-cbse.php" class="btn-doc-download">
                                            <i class="fas fa-award"></i> Board Results
                                        </a>
                                        <button type="button" class="btn-copy-doc-link" onclick="copyDocumentLink('excellent-result-in-10th-class-board-examination-by-cbse.php', this)" title="Copy link to Board Results">
                                            <i class="fas fa-link"></i> <span class="copy-lbl">Copy Link</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- SECTION D: STAFF (TEACHING) -->
            <div style="margin-bottom: 2.5rem;">
                <h3 style="color: var(--navy-950); font-size: 1.25rem; font-weight: 800; margin-bottom: 12px; text-transform: uppercase; border-left: 4px solid #10b981; padding-left: 12px;">
                    D. Staff (Teaching)
                </h3>
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th style="width: 10%;">SR.NO.</th>
                                <th style="width: 45%;">INFORMATION</th>
                                <th>DETAILS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><strong>PRINCIPAL</strong></td>
                                <td><strong>Ms. Jyoti (BCA, MCA, B.Ed.)</strong></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <strong>TOTAL NO OF TEACHERS</strong>
                                    <div style="font-size: 0.85rem; color: var(--slate-600); margin-top: 6px;">
                                        &bull; PGT: 09<br>
                                        &bull; TGT: 06<br>
                                        &bull; PRT: 07<br>
                                        &bull; NTT: 03<br>
                                        &bull; PTI: 01<br>
                                        &bull; WELLNESS: 01<br>
                                        &bull; SPECIAL EDUCATOR: 01<br>
                                        &bull; LIBRARIAN: 01
                                    </div>
                                </td>
                                <td>
                                    <div style="font-size: 1.25rem; font-weight: 800; color: var(--navy-950); margin-bottom: 8px;">29 Teachers</div>
                                    <div class="doc-actions-wrap">
                                        <a href="documents/Staff-Details-PDF.pdf" target="_blank" class="btn-doc-download">
                                            <i class="fas fa-file-pdf"></i> Staff PDF
                                        </a>
                                        <a href="faculty.php" class="btn-doc-download" style="background: var(--navy-50); color: var(--navy-900); border-color: #bfdbfe;">
                                            <i class="fas fa-users"></i> Staff Directory
                                        </a>
                                        <button type="button" class="btn-copy-doc-link" onclick="copyDocumentLink('documents/Staff-Details-PDF.pdf', this)" title="Copy Staff Details PDF link">
                                            <i class="fas fa-link"></i> <span class="copy-lbl">Copy Link</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><strong>TEACHERS SECTION RATIO</strong></td>
                                <td><strong>1.5</strong></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><strong>DETAILS OF SPECIAL EDUCATOR</strong></td>
                                <td><strong>Ravinder Kumar</strong></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><strong>DETAILS OF COUNSELLOR AND WELLNESS TEACHER</strong></td>
                                <td><strong>Harinder Kumar</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- SECTION E: SCHOOL INFRASTRUCTURE -->
            <div>
                <h3 style="color: var(--navy-950); font-size: 1.25rem; font-weight: 800; margin-bottom: 12px; text-transform: uppercase; border-left: 4px solid var(--accent); padding-left: 12px;">
                    E. School Infrastructure
                </h3>
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th style="width: 10%;">SR.NO.</th>
                                <th style="width: 45%;">INFORMATION</th>
                                <th>DETAILS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><strong>TOTAL CAMPUS AREA OF THE SCHOOL (IN SQ. MTR)</strong></td>
                                <td><strong>6070 SQ MTR</strong></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><strong>CLASSROOM SIZE</strong></td>
                                <td><strong>24 &amp; 48 SQ.MTR</strong></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><strong>NO. AND SIZE OF LABORATORIES INCLUDING COMPUTER LABS (IN SQ MTR)</strong></td>
                                <td><strong>6 &amp; 60 (sq. Metres)</strong></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><strong>INTERNET FACILITY (Y/N)</strong></td>
                                <td><strong>YES</strong></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><strong>NO. OF GIRLS TOILETS</strong></td>
                                <td><strong>10</strong></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td><strong>NO. OF BOYS TOILETS</strong></td>
                                <td><strong>10</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="callout callout-gold" style="margin-top: 30px;">
                <p style="margin: 0; font-size: 0.9rem; color: var(--slate-700);">
                    <strong>Official Notice:</strong> The above disclosure is published under the mandatory CBSE Appendix-IX guidelines. For any further compliance inquiries or original document inspection, please contact the administrative office at <a href="mailto:thediscoveryinternational@gmail.com" style="color: var(--navy-900); font-weight: 700;">thediscoveryinternational@gmail.com</a>.
                </p>
            </div>

        </div>
    </div>

</main>

<!-- Floating Toast Notification on Copy -->
<div id="docToast" class="doc-copy-toast" role="status" aria-live="polite">
    <i class="fas fa-circle-check" style="color: #10b981; font-size: 1.15rem;"></i>
    <span id="docToastMsg">Document link copied to clipboard!</span>
</div>

<script>
function copyPageUrl(btn) {
    const url = window.location.href;
    performCopy(url, btn, 'Page Link Copied!');
}

function copyDocumentLink(path, btn) {
    // Resolve absolute URL reliably based on current page
    const fullUrl = new URL(path, window.location.href).href;
    performCopy(fullUrl, btn, 'Link Copied!');
}

function performCopy(text, btn, successLabel) {
    if (navigator.clipboard && window.isSecureContext) {
        navigator.clipboard.writeText(text).then(function() {
            showFeedback(btn, successLabel);
            showToast('Document link copied to clipboard: ' + text);
        }).catch(function() {
            fallbackCopy(text, btn, successLabel);
        });
    } else {
        fallbackCopy(text, btn, successLabel);
    }
}

function fallbackCopy(text, btn, successLabel) {
    const ta = document.createElement('textarea');
    ta.value = text;
    ta.style.position = 'fixed';
    ta.style.left = '-9999px';
    ta.style.top = '0';
    document.body.appendChild(ta);
    ta.focus();
    ta.select();
    try {
        document.execCommand('copy');
        showFeedback(btn, successLabel);
        showToast('Document link copied to clipboard!');
    } catch (e) {
        prompt('Copy document URL manually:', text);
    }
    document.body.removeChild(ta);
}

function showFeedback(btn, label) {
    const originalHTML = btn.innerHTML;
    btn.classList.add('copied');
    btn.innerHTML = '<i class="fas fa-check" style="color: #059669;"></i> <span class="copy-lbl">' + label + '</span>';
    setTimeout(function() {
        btn.classList.remove('copied');
        btn.innerHTML = originalHTML;
    }, 2000);
}

let toastTimer = null;
function showToast(msg) {
    const toast = document.getElementById('docToast');
    const toastMsg = document.getElementById('docToastMsg');
    if (toast) {
        if (toastMsg && msg) toastMsg.textContent = msg;
        toast.classList.add('show');
        if (toastTimer) clearTimeout(toastTimer);
        toastTimer = setTimeout(function() {
            toast.classList.remove('show');
        }, 3000);
    }
}
</script>

<?php include 'footer.php'; ?>
