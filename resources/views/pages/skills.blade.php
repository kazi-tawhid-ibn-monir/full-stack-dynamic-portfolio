@extends('layouts.app')

@section('title', 'Skills')

@section('content')
<h2>⚙️ Technical Skills</h2>

<p style="margin-bottom: 2rem; font-size: 1.05rem;">
    Here's a comprehensive overview of my technical skills and proficiency levels.
</p>

@if($backend->count() > 0)
<div class="skill-category">
    <h3 class="skill-category-title">Backend Development</h3>
    <div class="skills-grid">
        @foreach($backend as $skill)
            <div class="skill-box">
                <div class="skill-icon">⚙️</div>
                <div class="skill-name">{{ $skill->skill_name }}</div>
                <div class="proficiency-level">
                    <span class="stars">{{ str_repeat('⭐', $skill->proficiency) }}</span>
                </div>
                <small>{{ $skill->description ?? 'Proficient' }}</small>
            </div>
        @endforeach
    </div>
</div>
@endif

@if($frontend->count() > 0)
<div class="skill-category">
    <h3 class="skill-category-title">Frontend Development</h3>
    <div class="skills-grid">
        @foreach($frontend as $skill)
            <div class="skill-box">
                <div class="skill-icon">🎨</div>
                <div class="skill-name">{{ $skill->skill_name }}</div>
                <div class="proficiency-level">
                    <span class="stars">{{ str_repeat('⭐', $skill->proficiency) }}</span>
                </div>
                <small>{{ $skill->description ?? 'Proficient' }}</small>
            </div>
        @endforeach
    </div>
</div>
@endif

@if($specialized->count() > 0)
<div class="skill-category">
    <h3 class="skill-category-title">Specialized Skills</h3>
    <div class="skills-grid">
        @foreach($specialized as $skill)
            <div class="skill-box">
                <div class="skill-icon">🔬</div>
                <div class="skill-name">{{ $skill->skill_name }}</div>
                <div class="proficiency-level">
                    <span class="stars">{{ str_repeat('⭐', $skill->proficiency) }}</span>
                </div>
                <small>{{ $skill->description ?? 'Proficient' }}</small>
            </div>
        @endforeach
    </div>
</div>
@endif

@if($all_skills->count() == 0)
    <div class="empty-state">
        <div class="empty-state-icon">🛠️</div>
        <p class="empty-state-text">Skills coming soon!</p>
    </div>
@endif
@endsection
