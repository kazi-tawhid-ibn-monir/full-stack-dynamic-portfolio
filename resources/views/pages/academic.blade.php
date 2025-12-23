@extends('layouts.app')

@section('title', 'Academic')

@section('content')
<h2>🎓 Academic Background</h2>

<p style="margin-bottom: 2rem; font-size: 1.05rem;">
    My educational journey and qualifications.
</p>

@if($academics->count() > 0)
    <div class="timeline">
        @foreach($academics as $academic)
            <div class="timeline-item">
                <div class="timeline-content">
                    <h4 class="degree">{{ $academic->degree }}</h4>
                    <p style="color: #3498db; font-weight: 600; margin-bottom: 0.3rem;">
                        {{ $academic->field_of_study }}
                    </p>
                    <p style="margin-bottom: 0.5rem; color: #7f8c8d;">
                        <strong>{{ $academic->institution }}</strong>
                    </p>
                    <p class="timeline-date">
                        {{ $academic->start_date->format('M Y') }} - 
                        @if($academic->end_date)
                            {{ $academic->end_date->format('M Y') }}
                        @else
                            Present
                        @endif
                    </p>
                    
                    @if($academic->gpa)
                        <p>
                            <span class="gpa">GPA: {{ $academic->gpa }}</span>
                        </p>
                    @endif
                    
                    @if($academic->description)
                        <p style="margin-top: 1rem;">{{ $academic->description }}</p>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
@else
    <div class="empty-state">
        <div class="empty-state-icon">📚</div>
        <p class="empty-state-text">Academic information coming soon!</p>
    </div>
@endif
@endsection
