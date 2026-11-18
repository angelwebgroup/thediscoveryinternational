<?php
/**
 * =========================================================================
 * Centralized Configuration for The Discovery International School
 * =========================================================================
 * Prithla – Sehrala Rd, Village Prithla, Palwal, Haryana 121102
 * CBSE Affiliation No: 532266
 */

// Geo-restriction security guard (Enforce India-only visitor access)
require_once __DIR__ . '/security_geo.php';

$school = [
    // Basic Information
    'name'           => 'The Discovery International School',
    'short_name'     => 'Discovery International School',
    'full_name'      => 'The Discovery International School',
    'society'        => 'Beer Bati Education Society',
    'group'          => 'The Discovery International',
    'affiliation_no' => '532266',
    'school_code'    => '',
    'udise_code'     => '06214100555',
    'tagline'        => 'A Premier CBSE-Affiliated School in Prithla, Palwal (Haryana)',
    'aff_details'    => 'Affiliated to C.B.S.E., New Delhi (Affiliation No: 532266)',
    'established'    => '2016',
    
    // Contact Information
    'phone1'         => '09350170199',
    'phone2'         => '09467448888',
    'email'          => 'thediscoveryinternational@gmail.com',
    'address'        => 'Prithla – Sehrala Rd, Village Prithla, Palwal, Haryana 121102',
    'full_address'   => 'Prithla to Chhaprolla Road, Village Prithla, Palwal, Haryana - 121102',
    'location_city'  => 'Palwal, Haryana',
    'office_hours'   => 'Mon - Sat: 8:00 AM - 2:30 PM',
    'facebook'       => 'https://www.facebook.com/p/The-Discovery-International-School-100063948886688/',
    'google_map'     => 'https://g.co/kgs/SW46RRR',
    'google_map_embed' => 'https://maps.google.com/maps?q=The+Discovery+International+School+Prithla+Palwal+Haryana&t=&z=15&ie=UTF8&iwloc=&output=embed',
    'website'        => 'https://www.tisagra.com/#',
    'whatsapp'       => 'https://wa.me/919350170199',
    'session'        => '2026-27',
    'active_session' => '2026-2027',
    
    // Form Notification Emails (Inquiries are emailed to ALL addresses in this list)
    // To add more emails (e.g. for testing, principal, or new client emails), simply
    // add them as comma-separated values in quotes below:
    'admin_emails'   => [
        'thediscoveryinternational@gmail.com', // Primary School Email
        'angelwebgroup@gmail.com',             // (Optional) Test Email 1
        // 'test2@yourdomain.com',             // (Optional) Test Email 2
        // 'client.newemail@gmail.com',         // (Optional) Client Added Email
    ],

    // School Leadership & Staff Key Figures
    'principal'             => 'Ms. Jyoti (BCA, MCA, B.Ed.)',
    'principal_name'        => 'Ms. Jyoti',
    'principal_qual'        => 'BCA, MCA, B.Ed.',
    'special_educator'      => 'Ravinder Kumar',
    'counsellor'            => 'Harinder Kumar',
    'total_teachers'        => 29,
    'teachers_ratio'        => '1.5',
    'campus_area'           => '6070 SQ MTR',
    'classroom_size'        => '24 & 48 SQ.MTR',
    'labs_count_size'       => '6 & 60 (sq. Metres)',
    'girls_toilets'         => 10,
    'boys_toilets'          => 10,
    'internet_facility'     => 'YES',

    // Official Bank Accounts for Fees & Online Remittance
    'banks' => [
        'primary' => [
            'name'       => 'Bank of Baroda / PNB',
            'branch'     => 'Prithla / Palwal',
            'account_no' => 'Available at School Office',
            'ifsc'       => 'Contact Administration',
            'beneficiary'=> 'The Discovery International School'
        ]
    ]
];
