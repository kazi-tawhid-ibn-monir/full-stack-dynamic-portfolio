@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<h2>💼 My Projects</h2>

<p style="font-size: 1.05rem; margin-bottom: 2rem;">
    A collection of projects I've built and contributed to. Each project represents a learning experience and showcases different technologies and concepts.
</p>

@if($projects->count() > 0)
    @foreach($projects as $project)
        <div class="project-card">
            <h3 class="project-title">{{ $project->title }}</h3>
            <p class="project-description">{{ $project->description }}</p>
            
            <div style="margin-bottom: 1rem;">
                <strong>Technologies:</strong>
                <div class="project-tech" style="margin-top: 0.5rem;">
                    @foreach(explode(',', $project->technologies) as $tech)
                        <span class="tech-tag">{{ trim($tech) }}</span>
                    @endforeach
                </div>
            </div>

            <div class="project-links">
                @if($project->github_link)
                    <a href="{{ $project->github_link }}" class="github-link" target="_blank">
                        🔗 View on GitHub
                    </a>
                @endif
                @if($project->live_link)
                    <a href="{{ $project->live_link }}" class="live-link" target="_blank">
                        🚀 Live Demo
                    </a>
                @endif
            </div>

            <small style="color: #95a5a6; display: block; margin-top: 1rem;">
                Created: {{ $project->created_at->format('M d, Y') }}
            </small>
        </div>
    @endforeach
@else
    <div class="empty-state">
        <div class="empty-state-icon">📭</div>
        <p class="empty-state-text">No projects added yet.</p>
    </div>
@endif
@endsection
