@props(['profile'])

<div id="navigation" class="navbar-light bg-faded site-navigation">
    <div class="container">
        <div class="nav-inner">
            <div class="nav-logo">
                <a href="#home">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="40" height="40" rx="8" fill="var(--accent)"/>
                        <text x="50%" y="55%" dominant-baseline="middle" text-anchor="middle" font-family="Rajdhani, sans-serif" font-weight="700" font-size="18" fill="var(--primary-dark)">CA</text>
                    </svg>
                </a>
            </div>

            <nav id="main-menu">
                <ul>
                    <li class="current"><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#education">Education</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>

            <button class="hamburger-btn" id="hamburger" aria-label="Toggle menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</div>

<div class="mobile-overlay" id="mobileOverlay"></div>
<div class="mobile-nav" id="mobileNav">
    <div class="mobile-nav-header">
        <a href="#home" class="mobile-logo">CA</a>
        <button class="mobile-close" id="mobileClose" aria-label="Close menu">
            <i class='bx bx-x'></i>
        </button>
    </div>
    <ul class="mobile-menu-list">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#education">Education</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
</div>
