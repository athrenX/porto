<?php
// Personal Information
$personalInfo = [
    'name' => 'Your Name',
    'role' => 'Software Engineer',
    'bio' => 'Building elegant solutions to complex problems. Passionate about creating exceptional user experiences and scalable applications.',
    'email' => 'your.email@example.com',
    'github' => 'https://github.com/yourusername',
    'linkedin' => 'https://linkedin.com/in/yourusername',
];

// Projects
$projects = [
    [
        'title' => 'E-Commerce Platform',
        'description' => 'A full-stack e-commerce solution with payment integration, inventory management, and admin dashboard.',
        'image' => 'https://via.placeholder.com/600x400/1e293b/3b82f6?text=E-Commerce+Platform',
        'techStack' => ['PHP', 'MySQL', 'JavaScript', 'Bootstrap'],
        'github' => 'https://github.com/yourusername/project1',
        'live' => 'https://project1.example.com',
    ],
    [
        'title' => 'Task Management App',
        'description' => 'A collaborative task management application with real-time updates and team collaboration features.',
        'image' => 'https://via.placeholder.com/600x400/1e293b/3b82f6?text=Task+Manager',
        'techStack' => ['PHP', 'MySQL', 'AJAX', 'CSS'],
        'github' => 'https://github.com/yourusername/project2',
        'live' => 'https://project2.example.com',
    ],
    [
        'title' => 'Portfolio CMS',
        'description' => 'A content management system for managing personal portfolios with an intuitive admin panel.',
        'image' => 'https://via.placeholder.com/600x400/1e293b/3b82f6?text=Portfolio+CMS',
        'techStack' => ['PHP', 'MySQL', 'JavaScript', 'Tailwind CSS'],
        'github' => 'https://github.com/yourusername/project3',
        'live' => '',
    ],
];

// Work Experience
$experiences = [
    [
        'role' => 'Senior Software Engineer',
        'company' => 'Tech Company Inc.',
        'startDate' => 'Jan 2023',
        'endDate' => '',
        'current' => true,
        'responsibilities' => [
            'Led development of microservices architecture serving 100K+ users',
            'Mentored junior developers and conducted code reviews',
            'Implemented CI/CD pipelines reducing deployment time by 60%',
            'Collaborated with cross-functional teams to deliver features on schedule',
        ],
    ],
    [
        'role' => 'Software Engineer',
        'company' => 'StartUp Solutions',
        'startDate' => 'Mar 2021',
        'endDate' => 'Dec 2022',
        'current' => false,
        'responsibilities' => [
            'Developed and maintained web applications using PHP and MySQL',
            'Optimized database queries improving performance by 40%',
            'Integrated third-party APIs and payment gateways',
            'Participated in agile development process and sprint planning',
        ],
    ],
    [
        'role' => 'Junior Developer',
        'company' => 'Digital Agency',
        'startDate' => 'Jun 2019',
        'endDate' => 'Feb 2021',
        'current' => false,
        'responsibilities' => [
            'Built responsive websites for various clients',
            'Maintained and updated existing web applications',
            'Collaborated with designers to implement UI/UX designs',
            'Provided technical support and troubleshooting',
        ],
    ],
];

// Certificates
$certificates = [
    [
        'name' => 'AWS Certified Solutions Architect',
        'issuer' => 'Amazon Web Services',
        'date' => 'Dec 2024',
        'credentialId' => 'AWS-12345678',
        'credentialUrl' => 'https://aws.amazon.com/verification',
    ],
    [
        'name' => 'PHP Advanced Certification',
        'issuer' => 'Zend',
        'date' => 'Aug 2024',
        'credentialId' => 'ZEND-98765432',
        'credentialUrl' => 'https://zend.com/verify',
    ],
    [
        'name' => 'MySQL Database Administrator',
        'issuer' => 'Oracle',
        'date' => 'May 2024',
        'credentialId' => 'ORA-11223344',
        'credentialUrl' => 'https://oracle.com/certification',
    ],
    [
        'name' => 'Web Development Bootcamp',
        'issuer' => 'Udemy',
        'date' => 'Jan 2024',
        'credentialId' => 'UC-ABCD1234',
        'credentialUrl' => 'https://udemy.com/certificate',
    ],
];
?>
