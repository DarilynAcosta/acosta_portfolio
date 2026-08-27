<section class="services-section" id="services">
    <div class="container">
        <div class="section-title text-center wow">
            <span>My Services</span>
            <h2>Provide Wide Range of<br>Digital Services</h2>
        </div>

        <div class="services-grid">
            @foreach($services as $i => $service)
                <div class="service-card wow delay-{{ ($i % 4) + 1 }}">
                    <div class="service-icon">
                        @if($service['icon'] === 'code')
                            <i class='bx bx-code-alt'></i>
                        @elseif($service['icon'] === 'design')
                            <i class='bx bx-palette'></i>
                        @elseif($service['icon'] === 'ecommerce')
                            <i class='bx bx-cart'></i>
                        @elseif($service['icon'] === 'cms')
                            <i class='bx bx-cube-alt'></i>
                        @elseif($service['icon'] === 'mobile')
                            <i class='bx bx-mobile-alt'></i>
                        @elseif($service['icon'] === 'api')
                            <i class='bx bx-data'></i>
                        @endif
                    </div>
                    <h3>{{ $service['title'] }}</h3>
                    <p>{{ $service['description'] }}</p>
                    <a href="#portfolio" class="service-link">
                        <span><i class="fa-solid fa-arrow-right"></i> View 0{{ $i + 1 }}</span>
                        <svg fill="none" viewBox="0 0 87 8"><path fill="currentColor" d="M86.354 4.354a.5.5 0 000-.708L83.172.464a.5.5 0 10-.707.708L85.293 4l-2.829 2.828a.5.5 0 10.708.708l3.182-3.182zM0 4.5h86v-1H0v1z"/></svg>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
