document.addEventListener('DOMContentLoaded', () => {

    // Theme Toggle (light / dark)
    const themeToggle = document.getElementById('themeToggle');
    const applyTheme = (dark) => {
        document.documentElement.setAttribute('data-theme', dark ? 'dark' : 'light');
        if (themeToggle) {
            themeToggle.classList.toggle('dark', dark);
            themeToggle.setAttribute('aria-pressed', dark ? 'true' : 'false');
        }
    };
    if (localStorage.getItem('de-theme') === 'dark') applyTheme(true);

    if (themeToggle) {
        themeToggle.addEventListener('click', () => {
            const dark = document.documentElement.getAttribute('data-theme') !== 'dark';
            applyTheme(dark);
            localStorage.setItem('de-theme', dark ? 'dark' : 'light');
        });
    }

    // Preloader
    const preloader = document.getElementById('preloader');
    window.addEventListener('load', () => {
        setTimeout(() => preloader.classList.add('hidden'), 300);
    });
    setTimeout(() => preloader.classList.add('hidden'), 3000);

    // Mobile Hamburger Menu
    const hamburger = document.getElementById('hamburger');
    const mobileNav = document.getElementById('mobileNav');
    const mobileOverlay = document.getElementById('mobileOverlay');
    const mobileClose = document.getElementById('mobileClose');

    function openMobile() {
        hamburger.classList.add('active');
        mobileNav.classList.add('active');
        mobileOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeMobile() {
        hamburger.classList.remove('active');
        mobileNav.classList.remove('active');
        mobileOverlay.classList.remove('active');
        document.body.style.overflow = '';
    }

    if (hamburger) {
        hamburger.addEventListener('click', () => {
            mobileNav.classList.contains('active') ? closeMobile() : openMobile();
        });
    }
    if (mobileClose) mobileClose.addEventListener('click', closeMobile);
    if (mobileOverlay) mobileOverlay.addEventListener('click', closeMobile);

    document.querySelectorAll('.mobile-nav a').forEach(link => {
        link.addEventListener('click', closeMobile);
    });

    // Navbar Scroll Effect
    const nav = document.getElementById('navigation');
    window.addEventListener('scroll', () => {
        if (nav) nav.classList.toggle('scrolled', window.pageYOffset > 50);
    }, { passive: true });

    // Active Nav Link via IntersectionObserver
    const sections = document.querySelectorAll('section[id]');
    const desktopLinks = document.querySelectorAll('#main-menu ul li');
    const mobileLinks = document.querySelectorAll('.mobile-menu-list li');

    function updateActive() {
        const scrollY = window.pageYOffset + 150;

        sections.forEach(section => {
            const top = section.offsetTop;
            const height = section.offsetHeight;
            const id = section.getAttribute('id');

            if (scrollY >= top && scrollY < top + height) {
                desktopLinks.forEach(li => {
                    li.classList.remove('current');
                    const a = li.querySelector('a');
                    if (a && a.getAttribute('href') === '#' + id) {
                        li.classList.add('current');
                    }
                });
                mobileLinks.forEach(li => {
                    const a = li.querySelector('a');
                    if (a) a.classList.remove('active');
                    if (a && a.getAttribute('href') === '#' + id) {
                        a.classList.add('active');
                    }
                });
            }
        });
    }
    window.addEventListener('scroll', updateActive, { passive: true });
    updateActive();

    // Scroll Reveal (IntersectionObserver)
    const wowElements = document.querySelectorAll('.wow');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
    wowElements.forEach(el => observer.observe(el));

    // Skill Bar Animation
    const skillBars = document.querySelectorAll('.skillbar-fill');
    const skillObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const percent = entry.target.getAttribute('data-percent');
                entry.target.style.width = percent + '%';
                skillObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    skillBars.forEach(bar => skillObserver.observe(bar));

    // Smooth Scroll for Anchor Links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            const target = document.querySelector(targetId);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

    // ===== Resume Modal =====
    const resumeModal = document.getElementById('resumeModal');
    function openResume() {
        if (!resumeModal) return;
        resumeModal.classList.add('open');
        document.body.style.overflow = 'hidden';
    }
    function closeResume() {
        if (!resumeModal) return;
        resumeModal.classList.remove('open');
        document.body.style.overflow = '';
    }
    document.querySelectorAll('[data-resume-open]').forEach(btn => btn.addEventListener('click', openResume));
    document.querySelectorAll('[data-resume-close]').forEach(el => el.addEventListener('click', closeResume));
    if (resumeModal) {
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') { closeResume(); closeLightbox(); }
        });
    }
    document.querySelector('[data-resume-print]')?.addEventListener('click', () => {
        const frame = document.getElementById('resumeFrame');
        if (frame && frame.contentWindow) {
            frame.contentWindow.focus();
            frame.contentWindow.print();
        }
    });
    document.querySelector('[data-resume-download]')?.addEventListener('click', () => {
        const frame = document.getElementById('resumeFrame');
        if (!frame || !frame.getAttribute('src')) return;
        const link = document.createElement('a');
        link.href = frame.getAttribute('src');
        link.download = 'Resume.pdf';
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    });

    // ===== Lightbox (certificates & projects) =====
    const lightbox = document.getElementById('lightboxModal');
    const lightboxImage = document.getElementById('lightboxImage');
    const lightboxTitle = document.getElementById('lightboxTitle');
    const lightboxDate = document.getElementById('lightboxDate');
    const lightboxDesc = document.getElementById('lightboxDesc');
    function openLightbox(el) {
        if (!lightbox) return;
        lightboxImage.src = el.getAttribute('data-image') || '';
        lightboxTitle.textContent = el.getAttribute('data-title') || '';
        lightboxDate.textContent = el.getAttribute('data-date') || '';
        lightboxDesc.textContent = el.getAttribute('data-desc') || '';
        lightbox.classList.add('open');
        document.body.style.overflow = 'hidden';
    }
    function closeLightbox() {
        if (!lightbox) return;
        lightbox.classList.remove('open');
        document.body.style.overflow = '';
    }
    document.querySelectorAll('[data-lightbox]').forEach(el => el.addEventListener('click', () => openLightbox(el)));
    document.querySelectorAll('[data-lightbox-close]').forEach(el => el.addEventListener('click', closeLightbox));

    // prevent anchor smooth-scroll conflict on lightbox buttons
    document.addEventListener('click', (e) => {
        const trigger = e.target.closest('[data-lightbox], [data-resume-open], [data-resume-close], [data-lightbox-close]');
        if (trigger) e.stopPropagation();
    });
});
