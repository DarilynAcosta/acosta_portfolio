<section class="home-banner" id="home">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-12">
                <div class="home_banner_content">
                    <h3 class="wow">Hello I'm {{ $profile['name'] }} !</h3>
                    <h2 class="wow delay-1">A {{ $profile['title'] }} <span>& Designer</span></h2>
                    <p class="wow delay-2">{{ $profile['tagline'] }}</p>
                    <div class="hero-btns wow delay-3">
                        <a href="#contact" class="yellow_btn">Hire Me</a>
                        <a href="#projects" class="normal_btn">Download CV</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-con wow delay-4">
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="60" height="60">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
        </svg>
    </div>

    <div class="social_link">
        <ul>
            @foreach($socials as $social)
                <li><a href="{{ $social['url'] }}" target="_blank" rel="noopener noreferrer" aria-label="{{ $social['name'] }}"><i class='bx bxl-{{ $social['icon'] }}'></i></a></li>
            @endforeach
        </ul>
    </div>

    <div class="bshape_1">
        <svg viewBox="0 0 200 200" fill="none"><circle cx="100" cy="100" r="100" fill="var(--accent)" opacity="0.08"/></svg>
    </div>
    <div class="bshape_2">
        <svg viewBox="0 0 100 100" fill="none"><rect width="100" height="100" rx="20" fill="var(--accent)" opacity="0.05" transform="rotate(15 50 50)"/></svg>
    </div>
    <div class="bshape_3">
        <svg viewBox="0 0 80 80" fill="none"><polygon points="40,0 80,80 0,80" fill="var(--accent)" opacity="0.06"/></svg>
    </div>
</section>
