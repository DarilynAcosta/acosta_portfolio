<section class="contact-section" id="contact">
    <div class="container">
        <div class="section-title text-center wow">
            <span>Contact</span>
            <h2>Get In Touch &<br>Let's Work Together</h2>
        </div>

        <div class="contact-grid">
            <div class="contact-info wow delay-1">
                <h3>Let's talk about everything!</h3>
                <p>Don't like forms? Send me an email directly or give me a call. I'm always open to discussing new projects and opportunities.</p>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class='bx bx-envelope'></i>
                    </div>
                    <div class="contact-item-text">
                        <span>Email</span>
                        <a href="mailto:{{ $contact['email'] }}">{{ $contact['email'] }}</a>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class='bx bx-phone'></i>
                    </div>
                    <div class="contact-item-text">
                        <span>Phone</span>
                        <a href="tel:{{ $contact['phone'] }}">{{ $contact['phone'] }}</a>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class='bx bx-map'></i>
                    </div>
                    <div class="contact-item-text">
                        <span>Location</span>
                        <p>{{ $contact['location'] }}</p>
                    </div>
                </div>
            </div>

            <div class="contact-form wow delay-2">
                <form action="#" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" name="name" placeholder="John Doe" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="email" id="email" name="email" placeholder="john@example.com" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" placeholder="Project Inquiry">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" placeholder="Tell me about your project..." required></textarea>
                    </div>
                    <button type="submit" class="yellow_btn" style="width:100%; justify-content:center;">
                        Send Message
                        <i class='bx bx-send'></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
