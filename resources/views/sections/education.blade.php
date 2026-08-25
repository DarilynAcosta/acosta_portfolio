<section class="education-section" id="education">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center wow">
                    <span>Education & Experience</span>
                    <h2>My Academic Background<br>& Professional Journey</h2>
                </div>
            </div>

            <div class="col-xl-6 col-md-6 col-12 leftex wow delay-1">
                <h4 class="subtitle">Education</h4>
                @foreach($education as $i => $edu)
                    <div class="single-expert">
                        <div class="row align-items-center">
                            <div class="col-3">
                                <span class="exnumber">0{{ $i + 1 }}</span>
                            </div>
                            <div class="col-9">
                                <div class="excontent">
                                    <span class="exdate">{{ $edu['date'] }}</span>
                                    <h4>{{ $edu['title'] }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-xl-6 col-md-6 col-12 rightex wow delay-2">
                <h4 class="subtitle">Experience</h4>
                @foreach($experience as $i => $exp)
                    <div class="single-expert">
                        <div class="row align-items-center">
                            <div class="col-3">
                                <span class="exnumber">0{{ $i + 1 }}</span>
                            </div>
                            <div class="col-9">
                                <div class="excontent">
                                    <span class="exdate">{{ $exp['date'] }}</span>
                                    <h4>{{ $exp['title'] }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
