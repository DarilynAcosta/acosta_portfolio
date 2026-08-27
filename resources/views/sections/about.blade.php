<section class="about-me" id="about">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title wow">
                    <span>About Me</span>
                  <!--  <h2>Described Briefly My Professional<br>Background Skills and Accomplishments</h2> -->
                </div>
            </div>

            <div class="col-5 wow delay-1">
                <div class="about-img">
                    <div class="about-img-placeholder">
                        <img src="{{ asset('images/profile.jpg') }}" alt="Profile Image">
                    </div>
                </div>
            </div>

            <div class="col-7 align-self-center wow delay-2">
                <div class="ab-content">
                    <p><strong>{!! $profile['bio'] !!}</strong></p>
                    <p>{{ $profile['bio_extra'] }}</p>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 50px;">
            <div class="col-12 wow delay-3">
               <!-- <h4 class="subtitle">Skills</h4> -->
            </div>
            @foreach($skills as $skill)
              <!--  <div class="col-xl-4 col-md-6 col-12 wow delay-{{ ($loop->index % 3) + 1 }}">
                    <div class="single_skill">
                        <div class="single_skill_header">
                            <h5>{{ $skill['name'] }}</h5>
                            <span class="spercent">{{ $skill['percent'] }}%</span>
                        </div>
                        <div class="skillbar">
                            <span class="skillbar-fill filled" data-percent="{{ $skill['percent'] }}"></span>
                        </div>
                    </div>
  </div> --> 
            @endforeach
        </div>
    </div>
</section>
