<section class="about-me" id="about">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title wow">
                    <span>About Me</span>
                    <h2>Described Briefly My Professional<br>Background Skills and Accomplishments</h2>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 col-12 wow delay-1">
                <div class="about-img">
                    <div class="about-img-placeholder">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="80" height="80">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </div>
                    <a href="#contact" class="ab_btn">
                        Hire Me
                        <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 col-12 align-self-center wow delay-2">
                <div class="ab-content">
                    <p><strong>{!! $profile['bio'] !!}</strong></p>
                    <p>{{ $profile['bio_extra'] }}</p>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 col-12 skill-area wow delay-3">
                <h4 class="subtitle">Skills</h4>
                @foreach($skills as $skill)
                    <div class="single_skill">
                        <div class="single_skill_header">
                            <h5>{{ $skill['name'] }}</h5>
                            <span class="spercent">{{ $skill['percent'] }}%</span>
                        </div>
                        <div class="skillbar">
                            <span class="skillbar-fill filled" data-percent="{{ $skill['percent'] }}"></span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
