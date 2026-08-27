@props(['profile'])

<div id="navigation" class="navbar-light bg-faded site-navigation">
    <div class="container-fluid">
        <div class="row">
            <div class="col-20 align-self-center">
                <div class="site-logo">
                    <a href="#home">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="40" height="40" rx="8" fill="#1C3F39"/>
                            <text x="50%" y="55%" dominant-baseline="middle" text-anchor="middle" font-family="Poppins, sans-serif" font-weight="700" font-size="18" fill="#C9F31D">DA</text>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="col-60 d-flex justify-content-center">
                <nav id="main-menu">
                    <ul>
                        <li class="current"><a href="#home"><i class="fa-solid fa-house"></i> Home</a></li>
                        <li><a href="#about"><i class="fa-solid fa-user"></i> About</a></li>
                        <li><a href="#education"><i class="fa-solid fa-graduation-cap"></i> Education</a></li>
                        <li><a href="#projects"><i class="fa-solid fa-diagram-project"></i> Projects</a></li>
                        <li><a href="#contact"><i class="fa-solid fa-envelope"></i> Contact</a></li>
                    </ul>
                </nav>
            </div>

            <div class="col-20 align-self-center d-flex justify-content-end align-items-center nav-actions">
                <button class="theme-toggle" id="themeToggle" aria-label="Toggle dark mode">
                    <i class="fa-solid fa-moon theme-icon-dark"></i>
                    <i class="fa-solid fa-sun theme-icon-light"></i>
                </button>
                <button class="hamburger-btn" id="hamburger" aria-label="Toggle menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="mobile-overlay" id="mobileOverlay"></div>
<div class="mobile-nav" id="mobileNav">
    <div class="mobile-nav-header">
        <a href="#home" class="mobile-logo">DA</a>
        <button class="mobile-close" id="mobileClose" aria-label="Close menu">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>
    <ul class="mobile-menu-list">
        <li><a href="#home"><i class="fa-solid fa-house"></i> Home</a></li>
        <li><a href="#about"><i class="fa-solid fa-user"></i> About</a></li>
        <li><a href="#education"><i class="fa-solid fa-graduation-cap"></i> Education</a></li>
        <li><a href="#projects"><i class="fa-solid fa-diagram-project"></i> Projects</a></li>
        <li><a href="#contact"><i class="fa-solid fa-envelope"></i> Contact</a></li>
    </ul>
</div>
