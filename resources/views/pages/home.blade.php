@extends('layouts.app')

@section('title', 'Home - My Portfolio')

@section('content')
    {{-- HERO / INTRO --}}
    <section class="section home-layout">

        <!-- Profile image in center -->
        <div class="home-avatar-wrapper">
            <div class="home-avatar-ring">
                <img src="{{ asset('images/profile.jpg') }}" alt="Profile photo" class="home-avatar">
            </div>
        </div>

        <!-- Short introduction pill -->
        <div class="home-intro-pill">
            <span class="home-intro-title">Junior Laravel Developer</span>
            <span class="home-intro-divider"></span>
            <span class="home-intro-tag">Full‑Stack Web Developer</span>
        </div>

        <!-- Details block -->
        <div class="home-details">
            <p><span>Full Name:</span> Kazi Tawhid Ibn Monir</p>
            <p><span>Title:</span> Laravel & PHP Developer</p>
            <p><span>Optional Quote:</span> “Writing clean code and learning something new every day.”</p>
            <p><span>Location:</span> Bangladesh</p>
            <p><span>About Me:</span> Passionate about building modern, responsive web applications with Laravel, focusing on clean architecture and smooth user experience.</p>
        </div>

        <!-- Small helper links -->
        <div class="home-links">
            <a href="{{ route('projects') }}">View Projects</a>
            <a href="{{ route('about') }}">More About Me</a>
        </div>

        <p class="home-meta">
            2+ academic projects • Laravel, PHP, MySQL, JavaScript, HTML, CSS
        </p>
    </section>

    {{-- KEY SKILLS SUMMARY --}}
    <section class="section home-section">
        <div class="section-header">
            <h2 class="section-title">Key Skills</h2>
            <p class="section-subtitle">The technologies used most in daily work and projects.</p>
        </div>

        <div class="home-skills-grid">
            <span class="skill-pill">Laravel</span>
            <span class="skill-pill">PHP</span>
            <span class="skill-pill">MySQL</span>
            <span class="skill-pill">JavaScript</span>
            <span class="skill-pill">HTML5</span>
            <span class="skill-pill">CSS3</span>
        </div>
    </section>

    {{-- FEATURED PROJECTS PREVIEW --}}
    <section class="section home-section">
        <div class="section-header">
            <h2 class="section-title">Featured Projects</h2>
            <p class="section-subtitle">A quick preview of some academic and personal work.</p>
        </div>

        <div class="home-projects-grid">
            <article class="home-project-card">
                <h3 class="home-project-title">Intelligent News Aggregator</h3>
                <p class="home-project-text">
                    Laravel-based academic project that collects news from multiple sources
                    and presents them in a clean, categorized interface.
                </p>
                <p class="home-project-tags">Laravel • PHP • MySQL • API Integration</p>
            </article>

            <article class="home-project-card">
                <h3 class="home-project-title">Personal Portfolio Website</h3>
                <p class="home-project-text">
                    Responsive portfolio built with Laravel and custom CSS, focusing on
                    clean UI, reusable Blade components, and MVC best practices.
                </p>
                <p class="home-project-tags">Laravel • Blade • CSS • MVC</p>
            </article>
        </div>

        <div class="home-project-link">
            <a href="{{ route('projects') }}" class="btn btn-outline">
                View all projects
            </a>
        </div>
    </section>

    {{-- CONTACT / LINKS --}}
    <section class="section home-section">
        <div class="section-header">
            <h2 class="section-title">Contact & Links</h2>
            <p class="section-subtitle">Open to collaboration, internships, and junior developer roles.</p>
        </div>

        <div class="home-contact-grid">
            <div class="home-contact-item">
                <span class="home-contact-label">Email</span>
                <p class="home-contact-value">kazitawhidibnmonir@gmail.com</p>
            </div>
            <div class="home-contact-item">
                <span class="home-contact-label">GitHub</span>
                <p class="home-contact-value">
                    <a href="https://github.com/your-github" target="_blank" rel="noopener">
                        https://github.com/kazi-tawhid-ibn-monir
                    </a>
                </p>
            </div>
            <div class="home-contact-item">
                <span class="home-contact-label">LinkedIn</span>
                <p class="home-contact-value">
                    <a href="https://www.linkedin.com/in/your-linkedin" target="_blank" rel="noopener">
                        linkedin.com/in/your-linkedin
                    </a>
                </p>
            </div>
        </div>
    </section>
@endsection
