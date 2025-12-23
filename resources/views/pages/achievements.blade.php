@extends('layouts.app')

@section('title', 'Achievements')

@section('content')
<h2>🏆 Achievements & Certifications</h2>

<p style="margin-bottom: 2rem; font-size: 1.05rem;">
    Awards, certifications, and recognition I've received.
</p>

@if($achievements->count() > 0)
    @foreach($achievements as $achievement)
        <div class="achievement-item">
            <div class="achievement-icon">
                @if($achievement->category == 'award')
                    🥇
                @elseif($achievement->category == 'certification')
                    📜
                @else
                    🎖️
                @endif
            </div>
            <h3 class="achievement-title">{{ $achievement->title }}</h3>
            
            <span class="achievement-category">{{ ucfirst($achievement->category) }}</span>
            
            @if($achievement->issuer)
                <p class="achievement-issuer">
                    <strong>Issued by:</strong> {{ $achievement->issuer }}
                </p>
            @endif
            
            <p class="achievement-date">
                📅 {{ $achievement->date_received->format('F d, Y') }}
            </p>
            
            @if($achievement->description)
                <p class="achievement-description">{{ $achievement->description }}</p>
            @endif
        </div>
    @endforeach
@else
    <div class="empty-state">
        <div class="empty-state-icon">🎯</div>
        <p class="empty-state-text">Achievements coming soon!</p>
    </div>
@endif
@endsection
