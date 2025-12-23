@extends('admin.layouts.app')

@section('title', 'Edit About Section')

@section('content')

<div style="max-width: 800px;">
    <h3>👤 Edit About Information</h3>

    <form action="{{ route('admin.about.update') }}" method="POST" style="background: #f9f9f9; padding: 20px; border-radius: 5px; margin-top: 20px;">
        @csrf
        @method('PUT')

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Bio *</label>
            <textarea name="bio" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; min-height: 120px;">{{ old('bio', $about->bio ?? '') }}</textarea>
            @error('bio')<span style="color: #dc3545; font-size: 12px;">{{ $message }}</span>@enderror
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Professional Summary *</label>
            <textarea name="professional_summary" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; min-height: 100px;">{{ old('professional_summary', $about->professional_summary ?? '') }}</textarea>
            @error('professional_summary')<span style="color: #dc3545; font-size: 12px;">{{ $message }}</span>@enderror
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Years of Experience *</label>
            <input type="number" name="years_experience" value="{{ old('years_experience', $about->years_experience ?? 0) }}" min="0" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
            @error('years_experience')<span style="color: #dc3545; font-size: 12px;">{{ $message }}</span>@enderror
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Location *</label>
            <input type="text" name="location" value="{{ old('location', $about->location ?? '') }}" placeholder="e.g., Parbatipur, Rangpur, Bangladesh" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
            @error('location')<span style="color: #dc3545; font-size: 12px;">{{ $message }}</span>@enderror
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Email *</label>
            <input type="email" name="email" value="{{ old('email', $about->email ?? '') }}" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
            @error('email')<span style="color: #dc3545; font-size: 12px;">{{ $message }}</span>@enderror
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Phone</label>
            <input type="tel" name="phone" value="{{ old('phone', $about->phone ?? '') }}" placeholder="e.g., +880..." style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
            @error('phone')<span style="color: #dc3545; font-size: 12px;">{{ $message }}</span>@enderror
        </div>

        <div style="display: flex; gap: 10px;">
            <button type="submit" style="background: #667eea; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">💾 Save Changes</button>
            <a href="{{ route('admin.dashboard') }}" style="background: #6c757d; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">← Back to Dashboard</a>
        </div>
    </form>
</div>

@endsection
