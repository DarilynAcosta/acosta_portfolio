<section class="contact-section" id="contact">
    <div class="container">
        <div class="section-title text-center wow">
            <span>Contact</span>
            <h2>Get In Touch &<br>Let's Work Together</h2>
        </div>

        <div class="contact-grid">
            <div class="contact-info wow delay-1">
              <!--  <h3>Let's talk about everything!</h3> -->
            <!--    <p>Don't like forms? Send me an email directly or give me a call. I'm always open to discussing new projects and opportunities.</p> -->

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="contact-item-text">
                        <span>Email</span>
                        <a href="mailto:{{ $contact['email'] }}">{{ $contact['email'] }}</a>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="contact-item-text">
                        <span>Phone</span>
                        <a href="tel:{{ $contact['phone'] }}">{{ $contact['phone'] }}</a>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="contact-item-text">
                        <span>Location</span>
                        <p>{{ $contact['location'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
