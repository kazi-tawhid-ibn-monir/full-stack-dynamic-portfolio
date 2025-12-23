@extends('admin.layouts.app')

@section('title', isset($project) ? 'Edit Project' : 'Create Project')

@section('content')

<div style="max-width: 800px;">
    <h3>{{ isset($project) ? '✏️ Edit Project' : '➕ Create New Project' }}</h3>

    <form action="{{ isset($project) ? route('admin.projects.update', $project) : route('admin.projects.store') }}" method="POST" style="background: #f9f9f9; padding: 20px; border-radius: 5px; margin-top: 20px;">
        @csrf
        @if(isset($project))
            @method('PUT')
        @endif

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Project Title *</label>
            <input type="text" name="title" value="{{ old('title', $project->title ?? '') }}" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
            @error('title')<span style="color: #dc3545; font-size: 12px;">{{ $message }}</span>@enderror
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Description *</label>
            <textarea name="description" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; min-height: 120px;">{{ old('description', $project->description ?? '') }}</textarea>
            @error('description')<span style="color: #dc3545; font-size: 12px;">{{ $message }}</span>@enderror
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Technologies (comma-separated) *</label>
            <input type="text" name="technologies" value="{{ old('technologies', $project->technologies ?? '') }}" placeholder="Laravel, PHP, MySQL, JavaScript" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
            @error('technologies')<span style="color: #dc3545; font-size: 12px;">{{ $message }}</span>@enderror
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">GitHub Link</label>
            <input type="url" name="github_link" value="{{ old('github_link', $project->github_link ?? '') }}" placeholder="https://github.com/..." style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
            @error('github_link')<span style="color: #dc3545; font-size: 12px;">{{ $message }}</span>@enderror
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Live Demo Link</label>
            <input type="url" name="live_link" value="{{ old('live_link', $project->live_link ?? '') }}" placeholder="https://..." style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
            @error('live_link')<span style="color: #dc3545; font-size: 12px;">{{ $message }}</span>@enderror
        </div>

        <div style="display: flex; gap: 10px;">
            <button type="submit" style="background: #667eea; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">{{ isset($project) ? '💾 Update Project' : '➕ Create Project' }}</button>
            <a href="{{ route('admin.projects.index') }}" style="background: #6c757d; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">← Back</a>
        </div>
    </form>
</div>

@endsection
