# AI Prompt Log

This file records every prompt given to the Big Pickle agent (Opencode) during the development
of this portfolio, in the order they were used, along with a brief description of what was
generated and any follow-up needed.

---

### Task: Initial Project Scaffold & Design Brief
* Prompt used: "Build a static personal portfolio website using Laravel (latest stable version).

 Technical Constraints: 
   - No database. Do not create migrations or Eloquent models. 
   - All content is hardcoded in Blade views or passed from route closures/controllers as plain PHP arrays. Use Laravel Blade templating (.blade.php) for every view. 
   - Fully responsive (mobile, tablet, desktop). Use https://wpdemothemes.com/laravel/portfx/?storefront=envato-elements as a structural and stylistic reference — NOT to copy its business content, but to mirror: 
      a sticky top navigation bar with anchor links to each section, and a mobile hamburger menu (home, about, education, projects, contact); an About section with a short bio next to a profile picture plus a row of 2–3 quick stats (years of experience, projects completed, certifications); a polished footer with contact info and social/GitHub icon links and other socmed links; smooth scroll behavior between sections and subtle hover/transition effects on cards and buttons. Also add: dark / light theme icon at the top right side of the navigation bar."

* Result/Output: Scaffolded the Laravel portfolio with a sticky nav (desktop + mobile hamburger menu), hero, about section with bio and quick stats, education, projects, contact, and footer sections. Added a light/dark theme toggle at the top-right of the navigation. Built fully responsive Blade partials based on the Portfx structure.



---

### Task: Clickable Certificate & Project Images (Lightbox)
* Prompt used: Make the certificate and project images clickable, opening them in a lightbox modal, and fix the spacing.
* Result/Output: Added `data-lightbox` attributes to certificate and project thumbnails wired to a shared lightbox modal showing the image, title, date, and description. Fixed card/thumbnail spacing in CSS.
