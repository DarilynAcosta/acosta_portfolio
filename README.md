# Darilyn B. Acosta — Portfolio Website

A personal e-portfolio website built with **Laravel 12** that showcases my background, education, certifications, and projects. It's a single-page site with a clean, modern design and includes an interactive resume viewer, a certificate gallery, project highlights, and a light/dark mode.

---

## 📄 Project Description

This portfolio serves as an online introduction and professional profile for **Darilyn B. Acosta**, a BS Information Technology student and aspiring web developer. It presents personal information, a profile picture, a short bio, educational background, certified trainings, featured projects, and contact details in a single, easy-to-navigate page.

All content is defined centrally in `routes/web.php` and rendered through Blade templates, making the profile information simple to update.

---

## ✨ Main Sections / Features

- **Home (Hero)** — Name, title, tagline, and social links.
- **Resume Viewer** — A modal showing the resume PDF with Download, Print, and Back buttons.
- **About** — Profile picture and short bio.
- **Education** — Academic background.
- **Certificates** — A clickable gallery opening in a lightbox.
- **Projects** — Featured works with clickable images and descriptions.
- **Contact** — Email, phone, and location with icons.
- **Theme Toggle** — Light/dark mode button, saved in the browser.

---

## 🗂 Project Structure

The portfolio is a single page that composes several Blade section files. The main entry point is **`portfolio.blade.php`**. The portfolio data (profile, projects, certificates, contact, socials) lives in **`routes/web.php`**, and the custom styling and interactivity are in **`public/css/style.css`** and **`public/js/main.js`** respectively.

---

**© Darilyn B. Acosta. All Rights Reserved.**
