document.addEventListener('DOMContentLoaded', () => {

    // ========================================
    // Preloader
    // ========================================
    const preloader = document.getElementById('preloader');
    window.addEventListener('load', () => {
        setTimeout(() => preloader.classList.add('hidden'), 300);
    });
    setTimeout(() => preloader.classList.add('hidden'), 3000);

    // ========================================
    // Mobile Hamburger Menu
    // ========================================
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

    // ========================================
    // Navbar Scroll Effect
    // ========================================
    const nav = document.getElementById('navigation');
    window.addEventListener('scroll', () => {
        if (nav) nav.classList.toggle('scrolled', window.pageYOffset > 50);
    }, { passive: true });

    // ========================================
    // Active Nav Link via IntersectionObserver
    // ========================================
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

    // ========================================
    // Scroll Reveal (IntersectionObserver)
    // ========================================
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

    // ========================================
    // Skill Bar Animation
    // ========================================
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

    // ========================================
    // Portfolio Filter
    // ========================================
    const filterBtns = document.querySelectorAll('.filter-btn');
    const portfolioCards = document.querySelectorAll('.portfolio-card');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            const filter = btn.getAttribute('data-filter');

            portfolioCards.forEach(card => {
                if (filter === 'all' || card.getAttribute('data-category') === filter) {
                    card.style.display = '';
                    setTimeout(() => card.style.opacity = '1', 50);
                } else {
                    card.style.opacity = '0';
                    setTimeout(() => card.style.display = 'none', 400);
                }
            });
        });
    });

    // ========================================
    // Smooth Scroll for Anchor Links
    // ========================================
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
});
