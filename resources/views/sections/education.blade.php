<section class="education-section" id="education">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center wow">
                    <span>Education</span>
                    <h2>My Academic Background<br>& Certificates</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6 leftex wow delay-1">
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

            <div class="col-6 rightex wow delay-2">
                <h4 class="subtitle">Certificates</h4>
                @foreach($certificates as $i => $cert)
                    <div class="single-expert">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <button type="button"
                                    class="cert-thumb"
                                    data-lightbox
                                    data-image="{{ asset($cert['image']) }}"
                                    data-title="{{ $cert['title'] }}"
                                    data-date="{{ $cert['date'] }}"
                                    data-desc="Certificate of completion">
                                    <img src="{{ asset($cert['image']) }}" alt="{{ $cert['title'] }}">
                                </button>
                            </div>
                            <div class="col-8">
                                <div class="excontent">
                                    <span class="exdate">{{ $cert['date'] }}</span>
                                    <h4>{{ $cert['title'] }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
