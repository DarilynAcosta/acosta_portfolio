@props(['profile', 'socials', 'contact', 'services_footer'])

<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-col">
                <h4>{{ $profile['name'] }}</h4>
                <p>{{ $profile['tagline'] }}</p>
                <div class="footer-social">
                    @foreach($socials as $social)
                        <a href="{{ $social['url'] }}" target="_blank" rel="noopener noreferrer" aria-label="{{ $social['name'] }}">
                            <i class='bx bxl-{{ $social['icon'] }}'></i>
                        </a>
                    @endforeach
                </div>
            </div>

            <div class="footer-col">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Services</h4>
                <ul>
                    @foreach($services_footer as $service)
                        <li><a href="#services">{{ $service }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="footer-col">
                <h4>Contact</h4>
                <ul>
                    <li><a href="mailto:{{ $contact['email'] }}">{{ $contact['email'] }}</a></li>
                    <li><a href="tel:{{ $contact['phone'] }}">{{ $contact['phone'] }}</a></li>
                    <li><a href="#">{{ $contact['location'] }}</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} {{ $profile['full_name'] }}. All Rights Reserved.</p>
        </div>
    </div>
</footer>
