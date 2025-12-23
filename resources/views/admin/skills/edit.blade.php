@extends('admin.layouts.app')

@section('title', isset($skill) ? 'Edit Skill' : 'Create Skill')

@section('content')

<div style="max-width: 800px;">
    <h3>{{ isset($skill) ? '✏️ Edit Skill' : '➕ Create New Skill' }}</h3>

    <form action="{{ isset($skill) ? route('admin.skills.update', $skill) : route('admin.skills.store') }}" method="POST" style="background: #f9f9f9; padding: 20px; border-radius: 5px; margin-top: 20px;">
        @csrf
        @if(isset($skill))
            @method('PUT')
        @endif

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Skill Name *</label>
            <input type="text" name="skill_name" value="{{ old('skill_name', $skill->skill_name ?? '') }}" placeholder="e.g., Laravel, PHP, JavaScript" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
            @error('skill_name')<span style="color: #dc3545; font-size: 12px;">{{ $message }}</span>@enderror
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Category *</label>
            <select name="category" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                <option value="">Select Category</option>
                <option value="Backend" @selected(old('category', $skill->category ?? '') == 'Backend')>Backend</option>
                <option value="Frontend" @selected(old('category', $skill->category ?? '') == 'Frontend')>Frontend</option>
                <option value="Database" @selected(old('category', $skill->category ?? '') == 'Database')>Database</option>
                <option value="Specialized" @selected(old('category', $skill->category ?? '') == 'Specialized')>Specialized</option>
            </select>
            @error('category')<span style="color: #dc3545; font-size: 12px;">{{ $message }}</span>@enderror
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Proficiency Level (1-5) *</label>
            <select name="proficiency" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                <option value="">Select Level</option>
                <option value="1" @selected(old('proficiency', $skill->proficiency ?? '') == '1')>⭐ Beginner</option>
                <option value="2" @selected(old('proficiency', $skill->proficiency ?? '') == '2')>⭐⭐ Elementary</option>
                <option value="3" @selected(old('proficiency', $skill->proficiency ?? '') == '3')>⭐⭐⭐ Intermediate</option>
                <option value="4" @selected(old('proficiency', $skill->proficiency ?? '') == '4')>⭐⭐⭐⭐ Advanced</option>
                <option value="5" @selected(old('proficiency', $skill->proficiency ?? '') == '5')>⭐⭐⭐⭐⭐ Expert</option>
            </select>
            @error('proficiency')<span style="color: #dc3545; font-size: 12px;">{{ $message }}</span>@enderror
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Description</label>
            <textarea name="description" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">{{ old('description', $skill->description ?? '') }}</textarea>
            @error('description')<span style="color: #dc3545; font-size: 12px;">{{ $message }}</span>@enderror
        </div>

        <div style="display: flex; gap: 10px;">
            <button type="submit" style="background: #f5576c; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">{{ isset($skill) ? '💾 Update Skill' : '➕ Create Skill' }}</button>
            <a href="{{ route('admin.skills.index') }}" style="background: #6c757d; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">← Back</a>
        </div>
    </form>
</div>

@endsection
