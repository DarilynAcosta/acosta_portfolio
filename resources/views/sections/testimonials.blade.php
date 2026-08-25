<section class="testimonials-section">
    <div class="container">
        <div class="section-title text-center wow">
            <span>Testimonials</span>
            <h2>What Clients Say About<br>My Work</h2>
        </div>

        <div class="testimonials-grid">
            @php
                $testimonials = [
                    ['name' => 'John Smith', 'role' => 'CEO - ABC Inc', 'rating' => 5, 'text' => 'Pellentesque sodales convallis dui, in faucibus mauris accumsan. Phasellus diam imperdiet fermentum. Exceptional work and great communication throughout.'],
                    ['name' => 'Sarah Johnson', 'role' => 'Founder - StartupXYZ', 'rating' => 5, 'text' => 'Absolutely fantastic developer! Delivered the project on time with excellent quality. The attention to detail and clean code was impressive.'],
                    ['name' => 'Mike Chen', 'role' => 'CTO - TechCorp', 'rating' => 5, 'text' => 'Great experience working together. Very professional, responsive, and skilled. Would definitely recommend for any web development project.'],
                ];
            @endphp

            @foreach($testimonials as $i => $t)
                <div class="testimonial-card wow delay-{{ $i + 1 }}">
                    <div class="testimonial-stars">
                        @for($s = 0; $s < $t['rating']; $s++)
                            <i class='bx bxs-star'></i>
                        @endfor
                    </div>
                    <p class="testimonial-text">{{ $t['text'] }}</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">
                            <i class='bx bx-user'></i>
                        </div>
                        <div>
                            <h4>{{ $t['name'] }}</h4>
                            <span>{{ $t['role'] }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <svg class="testi-shape testi-shape-1" viewBox="0 0 217 261" fill="none">
        <path stroke="currentColor" stroke-opacity="0.1" d="M150.336 256.833L3.229 117.565M182.388 219.614L35.28 80.346M219.972 183.63L72.864 44.362M252.146 143.216L105.039 3.948"/>
    </svg>
    <svg class="testi-shape testi-shape-2" viewBox="0 0 350 350" fill="none">
        <circle cx="175" cy="175" r="175" fill="currentColor" opacity="0.03"/>
    </svg>
</section>
