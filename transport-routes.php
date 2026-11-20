<?php 
require_once __DIR__ . '/config.php';
include 'header.php'; 

// Discovery International School Bus Routes (Prithla & Palwal District Hubs)
$routes_list = [
    ['sn' => 1,  'route' => 'Route 1: Prithla Local & Surrounding Wards', 'stops' => 'Prithla Main Bus Stop, Sehrala Road, Chhaprolla Crossing, Village Gate', 'bus_no' => 'Bus 01'],
    ['sn' => 2,  'route' => 'Route 2: Palwal City Hub',                   'stops' => 'Palwal Bus Stand, Kithwari Chowk, Agra Chowk, Rasulpur Road, Camp Colony', 'bus_no' => 'Bus 02'],
    ['sn' => 3,  'route' => 'Route 3: Dudhola & Engineering Zone',         'stops' => 'Dudhola Village, Dudhola Turn, Shri Vishwakarma Skill Univ Crossing', 'bus_no' => 'Bus 03'],
    ['sn' => 4,  'route' => 'Route 4: Sikri & National Highway Hub',      'stops' => 'Sikri Chowk, Ballabhgarh Border Stop, Sector 58 link, Jharsetly', 'bus_no' => 'Bus 04'],
    ['sn' => 5,  'route' => 'Route 5: Asaoti & Railway Corridor',         'stops' => 'Asaoti Railway Station, Asaoti Village, Mandkola Crossing, Gadhpuri', 'bus_no' => 'Bus 05'],
    ['sn' => 6,  'route' => 'Route 6: Bagpur & Chhaprolla Rural Sector',   'stops' => 'Bagpur Village, Chhaprolla Bus Stop, Sehrala Crossing, Pirthla Mor', 'bus_no' => 'Bus 06'],
    ['sn' => 7,  'route' => 'Route 7: Alawalpur & Dhatir Belt',           'stops' => 'Alawalpur Chowk, Dhatir Village, Kushak, Bamnikhera Stop', 'bus_no' => 'Bus 07'],
    ['sn' => 8,  'route' => 'Route 8: Aurangabad & NH-19 Sector',         'stops' => 'Aurangabad Village, Rundhi Station Turn, Mitrol, Palwal South', 'bus_no' => 'Bus 08']
];
?>

<main id="content" class="site-main">

    <!-- Standardized SEO-Optimized Page Header Banner -->
    <?php render_page_banner(); ?>

    <!-- Page Content Container -->
    <div class="container page-container">
        <div class="content-box">
            
            <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px; margin-bottom: 2rem;">
                <div>
                    <span class="section-tag section-tag-crimson"><i class="fas fa-bus"></i> GPS-Enabled Safe Fleet</span>
                    <h2 style="font-size: 2.1rem; color: var(--navy-950); margin-bottom: 4px;">School Bus Network &amp; Pick-up Routes</h2>
                    <p style="color: var(--slate-600); margin: 0;">Comprehensive student transportation across Prithla, Palwal, and surrounding regions.</p>
                </div>
                <div>
                    <a href="tel:<?php echo htmlspecialchars($school['phone1']); ?>" class="btn btn-hero-primary"><i class="fas fa-phone-volume"></i> Transport Enquiry</a>
                </div>
            </div>

            <!-- Safety Features Strip -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 18px; margin-bottom: 2.5rem;">
                <div style="background: var(--navy-50); border: 1px solid #dbeafe; border-radius: var(--radius-md); padding: 18px; display: flex; align-items: center; gap: 14px;">
                    <div style="width: 44px; height: 44px; border-radius: 50%; background: var(--navy-800); color: #ffffff; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; flex-shrink: 0;">
                        <i class="fas fa-satellite-dish"></i>
                    </div>
                    <div>
                        <strong style="color: var(--navy-950); font-size: 0.95rem; display: block;">Real-Time GPS Tracking</strong>
                        <span style="font-size: 0.82rem; color: var(--slate-600);">Live route monitoring for security</span>
                    </div>
                </div>

                <div style="background: var(--gold-50); border: 1px solid #fef3c7; border-radius: var(--radius-md); padding: 18px; display: flex; align-items: center; gap: 14px;">
                    <div style="width: 44px; height: 44px; border-radius: 50%; background: var(--gold-600); color: #ffffff; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; flex-shrink: 0;">
                        <i class="fas fa-video"></i>
                    </div>
                    <div>
                        <strong style="color: var(--navy-950); font-size: 0.95rem; display: block;">CCTV &amp; Speed Governors</strong>
                        <span style="font-size: 0.82rem; color: var(--slate-600);">Compliant with CBSE transport norms</span>
                    </div>
                </div>

                <div style="background: var(--crimson-50); border: 1px solid #ffe4e6; border-radius: var(--radius-md); padding: 18px; display: flex; align-items: center; gap: 14px;">
                    <div style="width: 44px; height: 44px; border-radius: 50%; background: var(--crimson-700); color: #ffffff; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; flex-shrink: 0;">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <div>
                        <strong style="color: var(--navy-950); font-size: 0.95rem; display: block;">Trained Bus Attendants</strong>
                        <span style="font-size: 0.82rem; color: var(--slate-600);">Supportive care for younger learners</span>
                    </div>
                </div>
            </div>

            <!-- Routes Table -->
            <div class="table-responsive" style="margin-bottom: 2.5rem;">
                <table>
                    <thead>
                        <tr>
                            <th style="width: 8%;">S.NO</th>
                            <th style="width: 32%;">ROUTE NAME &amp; BUS</th>
                            <th>KEY DESIGNATED PICK-UP / DROP STOPS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($routes_list as $rt): ?>
                            <tr>
                                <td><strong><?php echo $rt['sn']; ?></strong></td>
                                <td>
                                    <strong style="color: var(--navy-950);"><?php echo htmlspecialchars($rt['route']); ?></strong>
                                    <span style="display: block; font-size: 0.8rem; color: var(--crimson-700); font-weight: 700;"><?php echo htmlspecialchars($rt['bus_no']); ?></span>
                                </td>
                                <td><?php echo htmlspecialchars($rt['stops']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <!-- Transport Policy Note -->
            <div class="callout callout-gold">
                <h4 style="color: var(--navy-950); margin-bottom: 6px;"><i class="fas fa-circle-info" style="color: var(--accent);"></i> Custom Stops &amp; New Bookings</h4>
                <p style="margin: 0; font-size: 0.92rem; color: var(--slate-700); line-height: 1.65;">
                    Need a pickup point in your sector or village? Bus routes are regularly adapted based on parent requests during admission sessions. Please contact the transport coordinator at <a href="tel:<?php echo htmlspecialchars($school['phone1']); ?>" style="color: var(--navy-900); font-weight: 800;"><?php echo htmlspecialchars($school['phone1']); ?></a> or visit the school reception desk.
                </p>
            </div>

        </div>
    </div>

</main>

<?php include 'footer.php'; ?>
