<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $profile = [
        'name' => 'Criszle',
        'full_name' => 'Criszle Laureta Acosta',
        'title' => 'Web Developer',
        'tagline' => 'Solution-oriented mindset, problem-solving enthusiasm, positive attitude towards challenges, overcoming obstacles with enthusiasm.',
        'bio' => "Hello! I'm a professional web developer providing awesome design and development stuff for clients. My vision is to satisfy my clients with high-quality work.",
        'bio_extra' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.',
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
        ['date' => '2020 - 2024', 'title' => 'BS in Information Systems'],
        ['date' => '2022', 'title' => 'Web Development Bootcamp'],
        ['date' => '2023', 'title' => 'UI/UX Design Fundamentals'],
    ];

    $experience = [
        ['date' => '2023 - 2024', 'title' => 'Freelance Web Developer'],
        ['date' => '2022 - 2023', 'title' => 'Junior Developer at TechStudio'],
        ['date' => '2021 - 2022', 'title' => 'Web Dev Intern at StartupCo'],
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
            'title' => 'E-Commerce Platform',
            'category' => 'Web Development',
            'filter' => 'branding',
            'tags' => ['Laravel', 'Vue.js', 'MySQL'],
        ],
        [
            'title' => 'Task Management App',
            'category' => 'Web Application',
            'filter' => 'marketing',
            'tags' => ['React', 'Node.js', 'Socket.io'],
        ],
        [
            'title' => 'Weather Dashboard',
            'category' => 'Frontend',
            'filter' => 'photography',
            'tags' => ['JavaScript', 'API', 'Chart.js'],
        ],
        [
            'title' => 'Portfolio CMS',
            'category' => 'CMS',
            'filter' => 'branding',
            'tags' => ['PHP', 'Laravel', 'Tailwind'],
        ],
        [
            'title' => 'Social Media Analytics',
            'category' => 'Dashboard',
            'filter' => 'marketing',
            'tags' => ['Vue.js', 'D3.js', 'Firebase'],
        ],
        [
            'title' => 'Recipe Sharing Platform',
            'category' => 'Web Application',
            'filter' => 'photography',
            'tags' => ['React', 'GraphQL', 'MongoDB'],
        ],
    ];

    $contact = [
        'email' => 'criszleacosta@email.com',
        'phone' => '+63 912 345 6789',
        'location' => 'Rizal, Philippines',
    ];

    $socials = [
        ['name' => 'Facebook', 'url' => '#', 'icon' => 'facebook'],
        ['name' => 'Twitter', 'url' => '#', 'icon' => 'twitter'],
        ['name' => 'LinkedIn', 'url' => '#', 'icon' => 'linkedin'],
        ['name' => 'GitHub', 'url' => '#', 'icon' => 'github'],
        ['name' => 'Dribbble', 'url' => '#', 'icon' => 'dribbble'],
    ];

    $services_footer = ['Web Development', 'UI/UX Design', 'E-Commerce', 'CMS Development', 'Responsive Design'];

    return view('portfolio', compact(
        'profile', 'stats', 'skills', 'education', 'experience',
        'services', 'projects', 'contact', 'socials', 'services_footer'
    ));
});
