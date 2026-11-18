<?php
/**
 * =========================================================================
 * Gallery Data Manager for The Discovery International School
 * =========================================================================
 */

$gallery_folder = __DIR__ . '/images/gallery';
$gallery_images = [];

// Curated primary images
$curated_items = [
    [
        'title'    => 'Annual Sports & Award Ceremony',
        'category' => 'Achievements',
        'image'    => 'images/gallery/gallery1.webp',
        'thumb'    => 'images/gallery/gallery1.webp',
        'desc'     => 'Felicitation of winners on the victory podium for outstanding athletic performance.'
    ],
    [
        'title'    => 'Young Scholars & Academic Faculty',
        'category' => 'Campus Life',
        'image'    => 'images/gallery/gallery2.webp',
        'thumb'    => 'images/gallery/gallery2.webp',
        'desc'     => 'Students and faculty celebrating academic distinction and community spirit.'
    ],
    [
        'title'    => 'School Campus & Main Reception Block',
        'category' => 'Infrastructure',
        'image'    => 'images/gallery/gallery3.webp',
        'thumb'    => 'images/gallery/gallery3.webp',
        'desc'     => 'Front architectural entrance of The Discovery International School.'
    ],
    [
        'title'    => 'Sprawling Campus & Playgrounds',
        'category' => 'Infrastructure',
        'image'    => 'slider/slider1.webp',
        'thumb'    => 'slider/slider1.webp',
        'desc'     => '6070 sq. meter expansive green campus and dedicated sports fields.'
    ],
    [
        'title'    => 'Modern Academic Building',
        'category' => 'Infrastructure',
        'image'    => 'images/school-building.jpg',
        'thumb'    => 'images/school-building.jpg',
        'desc'     => 'Well-ventilated smart classrooms and state-of-the-art facilities.'
    ],
    [
        'title'    => 'Junior & Senior School Blocks',
        'category' => 'Campus Life',
        'image'    => 'slider/slider2.webp',
        'thumb'    => 'slider/slider2.webp',
        'desc'     => 'Safe, secure, and vibrant learning atmosphere for holistic education.'
    ],
    [
        'title'    => 'Sports Fields & Outdoor Arena',
        'category' => 'Sports',
        'image'    => 'slider/slider3.webp',
        'thumb'    => 'slider/slider3.webp',
        'desc'     => 'Playground for football, cricket, volleyball, basketball, and athletic training.'
    ],
    [
        'title'    => 'Inspiring Leadership & Mentorship',
        'category' => 'Leadership',
        'image'    => 'images/principal.webp',
        'thumb'    => 'images/principal.webp',
        'desc'     => 'Dedicated academic leadership fostering character building and global citizenship.'
    ]
];

// Check if image files exist
foreach ($curated_items as $item) {
    if (file_exists(__DIR__ . '/' . $item['image'])) {
        $gallery_images[] = $item;
    }
}

// Fallback if needed
if (empty($gallery_images)) {
    $gallery_images = [
        [
            'title'    => 'The Discovery International School Campus',
            'category' => 'Campus',
            'image'    => 'images/school-building.jpg',
            'thumb'    => 'images/school-building.jpg',
            'desc'     => 'Sprawling 6070 sq. meter campus at Prithla, Palwal, Haryana.'
        ]
    ];
}
