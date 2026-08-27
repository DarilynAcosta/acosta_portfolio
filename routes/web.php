<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $profile = [
        'name' => 'Darilyn B. Acosta',
        'full_name' => 'Darilyn B. Acosta',
        'title' => 'BS Information Technology Student | Aspiring Web Developer  ',
        'tagline' => 'Passionate about building responsive, user-friendly websites with a solution-oriented mindset. I enjoy solving problems, embracing challenges, and continuously learning to create innovative digital experiences.',
        'bio' => "Hello! I'm a professional web developer providing awesome design and development stuff for clients. My vision is to satisfy my clients with high-quality work.",
        'bio_extra' => 'I am dedicated to delivering quality work, paying attention to detail, and continuously expanding my knowledge in web design and development. My goal is to grow as a professional IT specialist and contribute innovative, reliable, and creative solutions to every project I work on.',
    ];

    $stats = [
        ['value' => '5.4', 'suffix' => 'k', 'label' => 'Projects Completed'],
        ['value' => '70', 'suffix' => 'k', 'label' => 'Happy Clients'],
        ['value' => '99', 'suffix' => '%', 'label' => 'Success Rate'],
        ['value' => '3', 'suffix' => '+', 'label' => 'Years Experience'],
    ];

    $skills = [
        ['name' => 'HTML', 'percent' => 90],
        ['name' => 'CSS', 'percent' => 85],
        ['name' => 'JavaScript', 'percent' => 80],
        ['name' => 'PHP / Laravel', 'percent' => 85],
        ['name' => 'Vue.js / React', 'percent' => 75],
    ];

    $education = [
        ['date' => '2023- Present', 'title' => 'Data Center College of the Philippines- Bangueed • BS in Information Technology '],
        ['date' => '2013-2019', 'title' => 'Abra High School • General Academic Strand'],
    ];

    $certificates = [
        ['date' => 'June 26, 2025', 'title' => 'Empowering the Next Gen: ICT Career Prep Essentials Webinar', 'image' => 'images/certificates/cert1.jpg'],
        ['date' => 'September 06, 2025', 'title' => 'COMPUTER SYSTEMS SERVICING NCII', 'image' => 'images/certificates/nc2.jpg'],
        ['date' => 'July 23, 2026', 'title' => 'ONLINE SAFETY THROUGH NETIQUETTE', 'image' => 'images/certificates/cert2.jpg'],
    ];

    $services = [
        ['icon' => 'code', 'title' => 'Web Development', 'description' => 'Building fast, responsive, and scalable web applications using modern frameworks and best practices.'],
        ['icon' => 'design', 'title' => 'UI / UX Design', 'description' => 'Creating intuitive and visually appealing user interfaces with seamless user experiences.'],
        ['icon' => 'ecommerce', 'title' => 'E-Commerce Solutions', 'description' => 'Full-stack e-commerce platforms with payment integration and inventory management.'],
        ['icon' => 'cms', 'title' => 'CMS Development', 'description' => 'Custom content management systems tailored to your business needs.'],
        ['icon' => 'mobile', 'title' => 'Responsive Design', 'description' => 'Ensuring pixel-perfect layouts across all devices and screen sizes.'],
        ['icon' => 'api', 'title' => 'API Integration', 'description' => 'Connecting third-party services and building RESTful APIs for seamless data flow.'],
    ];

    $projects = [
        [
            'title' => 'Happy Stem by Carmencita',
            'description' => 'Interactive E-Catalogue System is a web-based application that allows customers to browse and explore the flower shop\'s products through an interactive and user-friendly digital catalogue. It helps improve product presentation, customer convenience, and the overall efficiency of the business.',
            'category' => '',
            'filter' => '',
            'tags' => ['PHP'],
            'image' => 'images/projects/happystem.jpg',
        ],
        [
            'title' => 'Permanent Record',
            'description' => 'A Permanent Record Management System built as a Windows Form Application, designed to store, update, and manage comprehensive student information such as personal details, address, educational background, and parent/guardian data. It features functional buttons (Save, Update, Delete, Clear, Search, Display) that allow users to perform basic CRUD operations on student records.',
            'category' => '',
            'filter' => '',
            'tags' => ['VB.Net'],
            'image' => 'images/projects/vb.jpg',
        ],
    ];

    $contact = [
        'email' => 'acostadarilyn8@gmail.com',
        'phone' => '+63 9664 128 941',
        'location' => 'Zone 1, Linasin Bangued Abra, Philippines',
    ];

    $socials = [
        ['name' => 'Facebook', 'url' => 'https://www.facebook.com/darilynnylirad.acosta', 'icon' => 'facebook'],
        ['name' => 'TikTok', 'url' => 'https://www.tiktok.com/@darilyn.acosta', 'icon' => 'tiktok'],
        ['name' => 'GitHub', 'url' => 'https://github.com/DarilynAcosta', 'icon' => 'github'],
        ['name' => 'Discord', 'url' => 'https://discord.com/users/1448616519855767673', 'icon' => 'discord'],
        ['name' => 'Telegram', 'url' => 'https://t.me/+639664128941', 'icon' => 'telegram'],
    ];

    $services_footer = ['Web Development', 'UI/UX Design', 'E-Commerce', 'CMS Development', 'Responsive Design'];

    return view('portfolio', compact(
        'profile', 'stats', 'skills', 'education', 'certificates',
        'services', 'projects', 'contact', 'socials', 'services_footer'
    ));
});
