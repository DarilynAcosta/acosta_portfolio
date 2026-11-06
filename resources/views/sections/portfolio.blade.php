<section class="projects-section" id="projects">
    <div class="container">
        <div class="section-title text-center wow">
            <span>Projects</span>
            <h2>My Recent Works</h2>
        </div>

        <div class="portfolio-grid">
            @foreach($projects as $i => $project)
                @php($gallery = array_map(fn ($img) => asset($img), $project['images'] ?? [$project['image']]))
                <div class="portfolio-card wow delay-{{ ($i % 3) + 1 }}" data-category="{{ $project['filter'] }}">
                    <div class="portfolio-desc">
                        <h3>{{ $project['title'] }}</h3>
                        <p>{{ $project['description'] }}</p>
                    </div>
                    <button type="button"
                        class="project-card-btn"
                        data-lightbox
                        data-image="{{ asset($project['image']) }}"
                        data-images="{{ json_encode($gallery) }}"
                        data-title="{{ $project['title'] }}"
                        data-date="{{ implode(' • ', $project['tags']) }}"
                        data-desc="{{ $project['description'] }}"
                        aria-label="View {{ $project['title'] }}">
                        <div class="portfolio-card-img">
                            <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}">
                            @if(count($gallery) > 1)
                                <span class="project-shots"><i class="fa-solid fa-images"></i> {{ count($gallery) }}</span>
                            @endif
                        </div>
                        <div class="portfolio-overlay">
                            <p><i class="fa-solid fa-eye"></i> Click to view</p>
                        </div>
                    </button>
                </div>
            @endforeach
        </div>
    </div>
</section>
