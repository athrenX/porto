// Initialize the portfolio
document.addEventListener('DOMContentLoaded', function() {
    // Update personal info
    updatePersonalInfo();
    
    // Render sections
    renderProjects();
    renderExperience();
    renderCertificates();
    
    // Setup smooth scroll
    setupSmoothScroll();
    
    // Setup intersection observer for animations
    setupIntersectionObserver();
    
    // Update year in footer
    document.getElementById('year').textContent = new Date().getFullYear();
});

// Update personal information
function updatePersonalInfo() {
    document.getElementById('name').textContent = personalInfo.name;
    document.getElementById('role').textContent = personalInfo.role;
    document.getElementById('bio').textContent = personalInfo.bio;
    document.getElementById('footer-name').textContent = personalInfo.name;
    document.title = `${personalInfo.name} - Portfolio`;
    
    // Render social links
    const socialLinksHTML = [];
    
    if (personalInfo.github) {
        socialLinksHTML.push(`
            <a href="${personalInfo.github}" target="_blank" rel="noopener noreferrer" 
               class="flex items-center gap-2 bg-gray-800 hover:bg-gray-700 text-white px-6 py-3 rounded-lg transition-all duration-300 transform hover:scale-105">
                <i class="fab fa-github"></i>
                <span>GitHub</span>
            </a>
        `);
    }
    
    if (personalInfo.linkedin) {
        socialLinksHTML.push(`
            <a href="${personalInfo.linkedin}" target="_blank" rel="noopener noreferrer"
               class="flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg transition-all duration-300 transform hover:scale-105">
                <i class="fab fa-linkedin"></i>
                <span>LinkedIn</span>
            </a>
        `);
    }
    
    if (personalInfo.email) {
        socialLinksHTML.push(`
            <a href="mailto:${personalInfo.email}"
               class="flex items-center gap-2 bg-gray-800 hover:bg-gray-700 text-white px-6 py-3 rounded-lg transition-all duration-300 transform hover:scale-105">
                <i class="fas fa-envelope"></i>
                <span>Contact</span>
            </a>
        `);
    }
    
    document.getElementById('social-links').innerHTML = socialLinksHTML.join('');
}

// Render projects
function renderProjects() {
    const container = document.getElementById('projects-container');
    
    const projectsHTML = projects.map(project => `
        <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300 group">
            ${project.image ? `
                <div class="relative h-48 overflow-hidden bg-gray-700">
                    <img src="${project.image}" 
                         alt="${project.title}"
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300"
                         loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-60"></div>
                </div>
            ` : ''}

            <div class="p-6">
                <h3 class="text-2xl font-bold text-white mb-3">
                    ${project.title}
                </h3>

                <p class="text-gray-300 mb-4">
                    ${project.description}
                </p>

                <div class="flex flex-wrap gap-2 mb-4">
                    ${project.techStack.map(tech => `
                        <span class="text-xs bg-blue-900/30 text-blue-300 px-3 py-1 rounded-full">
                            ${tech}
                        </span>
                    `).join('')}
                </div>

                <div class="flex gap-4">
                    ${project.github ? `
                        <a href="${project.github}" target="_blank" rel="noopener noreferrer"
                           class="flex items-center gap-2 text-gray-300 hover:text-white transition-colors">
                            <i class="fab fa-github"></i>
                            <span class="text-sm">Code</span>
                        </a>
                    ` : ''}

                    ${project.live ? `
                        <a href="${project.live}" target="_blank" rel="noopener noreferrer"
                           class="flex items-center gap-2 text-blue-400 hover:text-blue-300 transition-colors">
                            <i class="fas fa-external-link-alt"></i>
                            <span class="text-sm">Live Demo</span>
                        </a>
                    ` : ''}
                </div>
            </div>
        </div>
    `).join('');
    
    container.innerHTML = projectsHTML;
}

// Render experience
function renderExperience() {
    const container = document.getElementById('experience-container');
    
    const experienceHTML = experiences.map(exp => `
        <div class="mb-12 relative pl-8 border-l-2 border-blue-500">
            <div class="absolute -left-3 top-0 w-6 h-6 bg-blue-500 rounded-full border-4 border-gray-800"></div>

            <div class="bg-gray-900 rounded-lg p-6 shadow-lg hover:shadow-xl transition-shadow">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
                    <div>
                        <h3 class="text-2xl font-bold text-white mb-1">
                            ${exp.role}
                        </h3>
                        <div class="flex items-center gap-2 text-blue-400 mb-2">
                            <i class="fas fa-briefcase"></i>
                            <span class="font-semibold">${exp.company}</span>
                        </div>
                    </div>

                    <div class="flex items-center gap-2 text-gray-400 text-sm">
                        <i class="far fa-calendar"></i>
                        <span>
                            ${exp.startDate} - ${exp.current ? 'Present' : exp.endDate}
                        </span>
                    </div>
                </div>

                <div class="text-gray-300">
                    <ul class="list-disc list-inside space-y-2">
                        ${exp.responsibilities.map(resp => `<li>${resp}</li>`).join('')}
                    </ul>
                </div>
            </div>
        </div>
    `).join('');
    
    container.innerHTML = experienceHTML;
}

// Render certificates
function renderCertificates() {
    const container = document.getElementById('certificates-container');
    
    const certificatesHTML = certificates.map(cert => `
        <div class="bg-gray-800 rounded-lg p-6 shadow-lg hover:shadow-xl transition-all hover:scale-105 border border-gray-700">
            <div class="flex items-start gap-4">
                <div class="bg-blue-900/30 p-3 rounded-lg">
                    <i class="fas fa-award text-blue-400 text-2xl"></i>
                </div>

                <div class="flex-1">
                    <h3 class="text-lg font-bold text-white mb-2">
                        ${cert.name}
                    </h3>

                    <p class="text-blue-400 font-semibold mb-3">
                        ${cert.issuer}
                    </p>

                    <div class="flex items-center gap-2 text-gray-400 text-sm mb-4">
                        <i class="far fa-calendar"></i>
                        <span>${cert.date}</span>
                    </div>

                    ${cert.credentialId ? `
                        <p class="text-xs text-gray-500 mb-3">
                            ID: ${cert.credentialId}
                        </p>
                    ` : ''}

                    ${cert.credentialUrl ? `
                        <a href="${cert.credentialUrl}" target="_blank" rel="noopener noreferrer"
                           class="inline-flex items-center gap-2 text-blue-400 hover:text-blue-300 transition-colors text-sm">
                            <i class="fas fa-external-link-alt"></i>
                            <span>View Credential</span>
                        </a>
                    ` : ''}
                </div>
            </div>
        </div>
    `).join('');
    
    container.innerHTML = certificatesHTML;
}

// Setup smooth scroll
function setupSmoothScroll() {
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
}

// Setup intersection observer for animations
function setupIntersectionObserver() {
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
}
