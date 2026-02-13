<?php
// Include data file
require_once 'data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $personalInfo['name']; ?> - Portfolio</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white">
    
    <!-- Hero Section -->
    <section id="hero" class="min-h-screen flex items-center justify-center">
        <div class="container mx-auto px-4 py-20 text-center">
            <div class="mb-6 fade-in">
                <h1 class="text-5xl md:text-7xl font-bold text-white mb-2">
                    <?php echo $personalInfo['name']; ?>
                </h1>
                <div class="h-1 w-24 bg-blue-500 mx-auto rounded-full"></div>
            </div>

            <h2 class="text-2xl md:text-3xl text-blue-400 font-semibold mb-6 fade-in-delay-1">
                <?php echo $personalInfo['role']; ?>
            </h2>

            <p class="text-lg md:text-xl text-gray-300 max-w-2xl mx-auto mb-10 fade-in-delay-2">
                <?php echo $personalInfo['bio']; ?>
            </p>

            <div class="flex flex-wrap gap-4 justify-center items-center fade-in-delay-3">
                <?php if (!empty($personalInfo['github'])): ?>
                <a href="<?php echo $personalInfo['github']; ?>" target="_blank" rel="noopener noreferrer" 
                   class="flex items-center gap-2 bg-gray-800 hover:bg-gray-700 text-white px-6 py-3 rounded-lg transition-all duration-300 transform hover:scale-105">
                    <i class="fab fa-github"></i>
                    <span>GitHub</span>
                </a>
                <?php endif; ?>

                <?php if (!empty($personalInfo['linkedin'])): ?>
                <a href="<?php echo $personalInfo['linkedin']; ?>" target="_blank" rel="noopener noreferrer"
                   class="flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg transition-all duration-300 transform hover:scale-105">
                    <i class="fab fa-linkedin"></i>
                    <span>LinkedIn</span>
                </a>
                <?php endif; ?>

                <?php if (!empty($personalInfo['email'])): ?>
                <a href="mailto:<?php echo $personalInfo['email']; ?>"
                   class="flex items-center gap-2 bg-gray-800 hover:bg-gray-700 text-white px-6 py-3 rounded-lg transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-envelope"></i>
                    <span>Contact</span>
                </a>
                <?php endif; ?>
            </div>

            <div class="mt-10">
                <a href="#projects" class="inline-block text-blue-400 hover:text-blue-300 animate-bounce">
                    <i class="fas fa-arrow-down text-3xl"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-gray-900">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
                    Featured Projects
                </h2>
                <div class="h-1 w-24 bg-blue-500 mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($projects as $project): ?>
                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300 group">
                    <?php if (!empty($project['image'])): ?>
                    <div class="relative h-48 overflow-hidden bg-gray-700">
                        <img src="<?php echo $project['image']; ?>" 
                             alt="<?php echo $project['title']; ?>"
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-60"></div>
                    </div>
                    <?php endif; ?>

                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-white mb-3">
                            <?php echo $project['title']; ?>
                        </h3>

                        <p class="text-gray-300 mb-4">
                            <?php echo $project['description']; ?>
                        </p>

                        <div class="flex flex-wrap gap-2 mb-4">
                            <?php foreach ($project['techStack'] as $tech): ?>
                            <span class="text-xs bg-blue-900/30 text-blue-300 px-3 py-1 rounded-full">
                                <?php echo $tech; ?>
                            </span>
                            <?php endforeach; ?>
                        </div>

                        <div class="flex gap-4">
                            <?php if (!empty($project['github'])): ?>
                            <a href="<?php echo $project['github']; ?>" target="_blank" rel="noopener noreferrer"
                               class="flex items-center gap-2 text-gray-300 hover:text-white transition-colors">
                                <i class="fab fa-github"></i>
                                <span class="text-sm">Code</span>
                            </a>
                            <?php endif; ?>

                            <?php if (!empty($project['live'])): ?>
                            <a href="<?php echo $project['live']; ?>" target="_blank" rel="noopener noreferrer"
                               class="flex items-center gap-2 text-blue-400 hover:text-blue-300 transition-colors">
                                <i class="fas fa-external-link-alt"></i>
                                <span class="text-sm">Live Demo</span>
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="py-20 bg-gray-800">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
                    Work Experience
                </h2>
                <div class="h-1 w-24 bg-blue-500 mx-auto rounded-full"></div>
            </div>

            <div class="max-w-4xl mx-auto">
                <?php foreach ($experiences as $exp): ?>
                <div class="mb-12 relative pl-8 border-l-2 border-blue-500">
                    <div class="absolute -left-3 top-0 w-6 h-6 bg-blue-500 rounded-full border-4 border-gray-800"></div>

                    <div class="bg-gray-900 rounded-lg p-6 shadow-lg hover:shadow-xl transition-shadow">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
                            <div>
                                <h3 class="text-2xl font-bold text-white mb-1">
                                    <?php echo $exp['role']; ?>
                                </h3>
                                <div class="flex items-center gap-2 text-blue-400 mb-2">
                                    <i class="fas fa-briefcase"></i>
                                    <span class="font-semibold"><?php echo $exp['company']; ?></span>
                                </div>
                            </div>

                            <div class="flex items-center gap-2 text-gray-400 text-sm">
                                <i class="far fa-calendar"></i>
                                <span>
                                    <?php echo $exp['startDate']; ?> - <?php echo $exp['current'] ? 'Present' : $exp['endDate']; ?>
                                </span>
                            </div>
                        </div>

                        <div class="text-gray-300">
                            <ul class="list-disc list-inside space-y-2">
                                <?php foreach ($exp['responsibilities'] as $resp): ?>
                                <li><?php echo $resp; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Certificates Section -->
    <section id="certificates" class="py-20 bg-gray-900">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
                    Certifications
                </h2>
                <div class="h-1 w-24 bg-blue-500 mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
                <?php foreach ($certificates as $cert): ?>
                <div class="bg-gray-800 rounded-lg p-6 shadow-lg hover:shadow-xl transition-all hover:scale-105 border border-gray-700">
                    <div class="flex items-start gap-4">
                        <div class="bg-blue-900/30 p-3 rounded-lg">
                            <i class="fas fa-award text-blue-400 text-2xl"></i>
                        </div>

                        <div class="flex-1">
                            <h3 class="text-lg font-bold text-white mb-2">
                                <?php echo $cert['name']; ?>
                            </h3>

                            <p class="text-blue-400 font-semibold mb-3">
                                <?php echo $cert['issuer']; ?>
                            </p>

                            <div class="flex items-center gap-2 text-gray-400 text-sm mb-4">
                                <i class="far fa-calendar"></i>
                                <span><?php echo $cert['date']; ?></span>
                            </div>

                            <?php if (!empty($cert['credentialId'])): ?>
                            <p class="text-xs text-gray-500 mb-3">
                                ID: <?php echo $cert['credentialId']; ?>
                            </p>
                            <?php endif; ?>

                            <?php if (!empty($cert['credentialUrl'])): ?>
                            <a href="<?php echo $cert['credentialUrl']; ?>" target="_blank" rel="noopener noreferrer"
                               class="inline-flex items-center gap-2 text-blue-400 hover:text-blue-300 transition-colors text-sm">
                                <i class="fas fa-external-link-alt"></i>
                                <span>View Credential</span>
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-950 py-8">
        <div class="container mx-auto px-4 text-center text-gray-400">
            <p>&copy; <?php echo date('Y'); ?> <?php echo $personalInfo['name']; ?>. All rights reserved.</p>
        </div>
    </footer>

    <!-- Smooth Scroll Script -->
    <script>
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Intersection Observer for fade-in animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('section').forEach(section => {
            observer.observe(section);
        });
    </script>
</body>
</html>
