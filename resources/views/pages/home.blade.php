@extends('layouts.app')

@section('title', 'Home')

@section('content')
<h2>Kazi Tawhid Ibn Monir</h2>

<p style="font-size: 1.1rem; line-height: 1.9; margin-bottom: 2rem;">
    Hi! I'm a passionate Computer Science student from Parbatipur, Rangpur Division, Bangladesh. 
    I specialize in web development, compiler design, and machine learning.
</p>

<h3 style="margin-top: 2rem;">Featured Projects</h3>
@if($featured_projects->count() > 0)
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; margin-bottom: 2rem;">
        @foreach($featured_projects as $project)
            <div class="project-card">
                <h4 class="project-title">{{ $project->title }}</h4>
                <p class="project-description">{{ substr($project->description, 0, 120) }}...</p>
                <div class="project-tech">
                    @foreach(explode(',', $project->technologies) as $tech)
                        <span class="tech-tag">{{ trim($tech) }}</span>
                    @endforeach
                </div>
                <div class="project-links">
                    @if($project->github_link)
                        <a href="{{ $project->github_link }}" class="github-link" target="_blank">GitHub</a>
                    @endif
                    @if($project->live_link)
                        <a href="{{ $project->live_link }}" class="live-link" target="_blank">Live Demo</a>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
    <p style="text-align: center; margin-top: 2rem;">
        <a href="/projects" class="btn btn-primary">View All Projects →</a>
    </p>
@else
    <div class="empty-state">
        <div class="empty-state-icon">📁</div>
        <p class="empty-state-text">No projects yet. Check back soon!</p>
    </div>
@endif

<div class="section-divider"></div>

<h3>Quick Skills Overview</h3>
@if($skills->count() > 0)
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 1rem;">
        @foreach($skills as $skill)
            <div class="skill-box">
                <div class="skill-name">{{ $skill->skill_name }}</div>
                <div class="proficiency-level">
                    <span class="stars">{{ str_repeat('⭐', $skill->proficiency) }}</span>
                </div>
                <small style="color: #7f8c8d;">{{ $skill->category }}</small>
            </div>
        @endforeach
    </div>
    <p style="text-align: center; margin-top: 2rem;">
        <a href="/skills" class="btn btn-success">Explore All Skills →</a>
    </p>
@endif

<div class="cta-section" style="margin-top: 3rem;">
    <h3>Let's Work Together</h3>
    <p>I'm always interested in hearing about new projects and opportunities.</p>
    <div class="cta-buttons">
        <a href="/projects" class="cta-button cta-button-primary">See My Work</a>
        <a href="/about" class="cta-button cta-button-secondary">Get in Touch</a>
    </div>
</div>
@endsection
