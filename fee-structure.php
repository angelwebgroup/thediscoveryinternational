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
            
            <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px; margin-bottom: 2rem;">
                <div>
                    <span class="section-tag section-tag-crimson"><i class="fas fa-file-invoice-dollar"></i> Approved Schedule</span>
                    <h2 style="font-size: 2.1rem; color: var(--navy-950); margin-bottom: 4px;">Class-Wise Fee Schedule (Session <?php echo htmlspecialchars($school['session']); ?>)</h2>
                    <p style="color: var(--slate-600); margin: 0;">Transparent, fair, and government-regulatory compliant school fees structure.</p>
                </div>
                <div style="display: flex; gap: 10px; align-items: center; flex-wrap: wrap;">
                    <a href="documents/Fee-Structure.pdf" target="_blank" class="btn-doc-download" title="Open official PDF document">
                        <i class="fas fa-file-pdf"></i> Download Official Fee PDF
                    </a>
                    <button type="button" class="btn-copy-doc-link" onclick="copyDocumentLink('documents/Fee-Structure.pdf', this)" title="Copy direct link to Fee Structure PDF">
                        <i class="fas fa-link"></i> <span class="copy-lbl">Copy Link</span>
                    </button>
                    <a href="online-admission.php" class="btn btn-hero-primary" style="padding: 7px 16px; font-size: 0.82rem;"><i class="fas fa-user-graduate"></i> Register Online</a>
                </div>
            </div>

            <!-- Fee Breakdown Table -->
            <div class="table-responsive" style="margin-bottom: 2.5rem;">
                <table>
                    <thead>
                        <tr>
                            <th style="width: 20%;">Class / Grade</th>
                            <th style="width: 25%;">Quarter 1 (Apr - Jun)</th>
                            <th style="width: 25%;">Quarter 2 (Jul - Sep)</th>
                            <th style="width: 25%;">Quarter 3 (Oct - Dec)</th>
                            <th>Quarter 4 (Jan - Mar)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Pre-Primary (Nursery, KG, UKG)</strong></td>
                            <td>As per standard slab</td>
                            <td>As per standard slab</td>
                            <td>As per standard slab</td>
                            <td>As per standard slab</td>
                        </tr>
                        <tr>
                            <td><strong>Primary Wing (Classes I - V)</strong></td>
                            <td>As per standard slab</td>
                            <td>As per standard slab</td>
                            <td>As per standard slab</td>
                            <td>As per standard slab</td>
                        </tr>
                        <tr>
                            <td><strong>Middle Wing (Classes VI - VIII)</strong></td>
                            <td>As per standard slab</td>
                            <td>As per standard slab</td>
                            <td>As per standard slab</td>
                            <td>As per standard slab</td>
                        </tr>
                        <tr>
                            <td><strong>Secondary Wing (Classes IX - X)</strong></td>
                            <td>As per standard slab</td>
                            <td>As per standard slab</td>
                            <td>As per standard slab</td>
                            <td>As per standard slab</td>
                        </tr>
                        <tr>
                            <td><strong>Senior Secondary (XI - XII Science / Comm / Arts)</strong></td>
                            <td>As per standard slab</td>
                            <td>As per standard slab</td>
                            <td>As per standard slab</td>
                            <td>As per standard slab</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Fee Policy Summary Cards -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; margin-bottom: 2rem;">
                
                <div style="background: var(--crimson-50); border: 1px solid #ffe4e6; border-left: 4px solid var(--crimson-700); padding: 22px; border-radius: var(--radius-md);">
                    <h4 style="color: var(--crimson-700); font-size: 1.05rem; margin-bottom: 8px; display: flex; align-items: center; gap: 8px;">
                        <i class="fas fa-people-roof"></i> Sibling Concession
                    </h4>
                    <p style="font-size: 0.92rem; color: var(--slate-700); margin: 0; line-height: 1.65;">
                        Special sibling concessions are granted on tuition fee from the second child onward to encourage family education.
                    </p>
                </div>

                <div style="background: var(--navy-50); border: 1px solid #dbeafe; border-left: 4px solid var(--navy-800); padding: 22px; border-radius: var(--radius-md);">
                    <h4 style="color: var(--navy-900); font-size: 1.05rem; margin-bottom: 8px; display: flex; align-items: center; gap: 8px;">
                        <i class="fas fa-calendar-days"></i> Quarterly Mode
                    </h4>
                    <p style="font-size: 0.92rem; color: var(--slate-700); margin: 0; line-height: 1.65;">
                        School fees are payable on a quarterly schedule (April, July, October, January) for parent convenience.
                    </p>
                </div>

                <div style="background: var(--gold-50); border: 1px solid #fef3c7; border-left: 4px solid var(--accent); padding: 22px; border-radius: var(--radius-md);">
                    <h4 style="color: var(--gold-700); font-size: 1.05rem; margin-bottom: 8px; display: flex; align-items: center; gap: 8px;">
                        <i class="fas fa-receipt"></i> Digital &amp; Counter Payments
                    </h4>
                    <p style="font-size: 0.92rem; color: var(--slate-700); margin: 0; line-height: 1.65;">
                        Payment can be made through net banking, UPI, bank transfer, or at the school fee counter during working hours.
                    </p>
                </div>

            </div>

            <!-- Contact Notice -->
            <div class="callout callout-gold">
                <h4 style="color: var(--navy-950); margin-bottom: 6px;"><i class="fas fa-headset" style="color: var(--accent);"></i> Fee Inquiry Helpline</h4>
                <p style="margin: 0; font-size: 0.92rem; color: var(--slate-700);">
                    For exact class-level fee charts and transport fee zones, please connect with the accounts office at 
                    <a href="tel:<?php echo htmlspecialchars($school['phone1']); ?>" style="color: var(--navy-900); font-weight: 800;"><?php echo htmlspecialchars($school['phone1']); ?></a> or email <a href="mailto:<?php echo htmlspecialchars($school['email']); ?>" style="color: var(--navy-900); font-weight: 800;"><?php echo htmlspecialchars($school['email']); ?></a>.
                </p>
            </div>

        </div>
    </div>

</main>

<script>
function copyDocumentLink(path, btn) {
    const fullUrl = new URL(path, window.location.href).href;
    if (navigator.clipboard && window.isSecureContext) {
        navigator.clipboard.writeText(fullUrl).then(function() {
            showCopyFeedback(btn);
        }).catch(function() {
            fallbackCopy(fullUrl, btn);
        });
    } else {
        fallbackCopy(fullUrl, btn);
    }
}

function fallbackCopy(text, btn) {
    const ta = document.createElement('textarea');
    ta.value = text;
    ta.style.position = 'fixed';
    ta.style.left = '-9999px';
    document.body.appendChild(ta);
    ta.focus();
    ta.select();
    try {
        document.execCommand('copy');
        showCopyFeedback(btn);
    } catch (e) {
        prompt('Copy document URL manually:', text);
    }
    document.body.removeChild(ta);
}

function showCopyFeedback(btn) {
    const origHTML = btn.innerHTML;
    btn.classList.add('copied');
    btn.innerHTML = '<i class="fas fa-check" style="color: #059669;"></i> <span class="copy-lbl">Link Copied!</span>';
    setTimeout(function() {
        btn.classList.remove('copied');
        btn.innerHTML = origHTML;
    }, 2000);
}
</script>

<?php include 'footer.php'; ?>
