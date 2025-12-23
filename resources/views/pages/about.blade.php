@extends('layouts.app')

@section('title', 'About')

@section('content')
<h2>👨‍💻 About Me</h2>

@if($about)
    <div class="about-container">
        <div>
            <h3>Who I Am</h3>
            <p class="about-bio">{{ $about->bio }}</p>
            
            <h3>Professional Summary</h3>
            <p>{{ $about->professional_summary ?? 'Passionate about building amazing web applications.' }}</p>

            <h3>Experience</h3>
            <p>
                <strong>{{ $about->years_experience }}</strong> years of hands-on experience in web development,
                compiler design, and machine learning.
            </p>
        </div>

        <div>
            @if($about->profile_image)
                <img src="{{ asset('images/portfolio/' . $about->profile_image) }}" alt="Profile" class="profile-image" style="margin-bottom: 2rem;">
            @endif

            <div class="contact-info">
                <h3>Get In Touch</h3>
                
                @if($about->location)
                    <div class="contact-item">
                        <span class="contact-label">📍 Location</span>
                        <p style="margin: 0.3rem 0;">{{ $about->location }}</p>
                    </div>
                @endif

                @if($about->email)
                    <div class="contact-item">
                        <span class="contact-label">📧 Email</span>
                        <p style="margin: 0.3rem 0;">
                            <a href="mailto:{{ $about->email }}" class="contact-value">{{ $about->email }}</a>
                        </p>
                    </div>
                @endif

                @if($about->phone)
                    <div class="contact-item">
                        <span class="contact-label">📞 Phone</span>
                        <p style="margin: 0.3rem 0;">
                            <a href="tel:{{ $about->phone }}" class="contact-value">{{ $about->phone }}</a>
                        </p>
                    </div>
                @endif
            </div>

            <div class="social-links">
                <a href="#" class="social-link" title="GitHub">GH</a>
                <a href="#" class="social-link" title="LinkedIn">LI</a>
                <a href="#" class="social-link" title="Twitter">TW</a>
            </div>
        </div>
    </div>
@else
    <div class="empty-state">
        <div class="empty-state-icon">ℹ️</div>
        <p class="empty-state-text">About information coming soon!</p>
    </div>
@endif
@endsection
