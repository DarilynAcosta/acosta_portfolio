@props(['socials'])

<aside class="sidebar-social" id="sidebarSocial">
    <ul>
        @foreach($socials as $social)
            <li>
                <a href="{{ $social['url'] }}" target="_blank" rel="noopener noreferrer" aria-label="{{ $social['name'] }}">
                    <i class='bx bxl-{{ $social['icon'] }}'></i>
                </a>
            </li>
        @endforeach
    </ul>
    <div class="sidebar-line"></div>
</aside>
