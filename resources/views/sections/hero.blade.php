<section class="home-banner" id="home">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="home_banner_content">
                    <h3 class="wow">Hello I'm {{ $profile['name'] }} !</h3>
                    <h3 class="wow delay-1">A {{ $profile['title'] }} <span>& Designer</span></h3>
                    <p class="wow delay-2">{{ $profile['tagline'] }}</p>
                    <div class="hero-btns wow delay-3">
                        <button type="button" class="yellow_btn" data-resume-open>
                            <i class="fa-solid fa-file-lines"></i> View Resume
                        </button>
                        <a href="#projects" class="yellow_btn">
                            <i class="fa-solid fa-diagram-project"></i> Projects
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="social_link">
        <ul>
            @foreach($socials as $social)
                <li><a href="{{ $social['url'] }}" target="_blank" rel="noopener noreferrer" aria-label="{{ $social['name'] }}"><i class='bx bxl-{{ $social['icon'] }}'></i></a></li>
            @endforeach
        </ul>
    </div>

    <div class="bshape_1">
        <svg viewBox="0 0 200 200" fill="none"><circle cx="100" cy="100" r="100" fill="#C9F31D" opacity="0.15"/></svg>
    </div>
    <div class="bshape_2">
        <svg viewBox="0 0 100 100" fill="none"><rect width="100" height="100" rx="20" fill="#C9F31D" opacity="0.1" transform="rotate(15 50 50)"/></svg>
    </div>
    <div class="bshape_3">
        <svg viewBox="0 0 80 80" fill="none"><polygon points="40,0 80,80 0,80" fill="#C9F31D" opacity="0.12"/></svg>
    </div>
</section>
