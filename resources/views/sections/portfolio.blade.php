<section class="projects-section" id="projects">
    <div class="container">
        <div class="section-title text-center wow">
            <span>Projects</span>
            <h2>My Recent Works &<br>Featured Projects</h2>
        </div>

        <div class="portfolio-filter wow">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="branding">Branding</button>
            <button class="filter-btn" data-filter="photography">Photography</button>
            <button class="filter-btn" data-filter="marketing">Marketing</button>
        </div>

        <div class="portfolio-grid">
            @foreach($projects as $i => $project)
                <div class="portfolio-card wow delay-{{ ($i % 3) + 1 }}" data-category="{{ $project['filter'] }}">
                    <div class="portfolio-card-img">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg>
                    </div>
                    <div class="portfolio-overlay">
                        <h3>{{ $project['title'] }}</h3>
                        <p>{{ $project['category'] }}</p>
                    </div>
                    <div class="portfolio-links">
                        <a href="#" aria-label="View details"><i class='bx bx-link-external'></i></a>
                        <a href="#" aria-label="View on GitHub"><i class='bx bxl-github'></i></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
