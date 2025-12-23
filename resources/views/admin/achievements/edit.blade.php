@extends('admin.layouts.app')

@section('title', isset($achievement) ? 'Edit Achievement' : 'Create Achievement')

@section('content')

<div style="max-width: 800px;">
    <h3>{{ isset($achievement) ? '✏️ Edit Achievement' : '➕ Create New Achievement' }}</h3>

    <form action="{{ isset($achievement) ? route('admin.achievements.update', $achievement) : route('admin.achievements.store') }}" method="POST" style="background: #f9f9f9; padding: 20px; border-radius: 5px; margin-top: 20px;">
        @csrf
        @if(isset($achievement))
            @method('PUT')
        @endif

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Title *</label>
            <input type="text" name="title" value="{{ old('title', $achievement->title ?? '') }}" placeholder="e.g., Dean's List Award" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
            @error('title')<span style="color: #dc3545; font-size: 12px;">{{ $message }}</span>@enderror
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Description *</label>
            <textarea name="description" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; min-height: 100px;">{{ old('description', $achievement->description ?? '') }}</textarea>
            @error('description')<span style="color: #dc3545; font-size: 12px;">{{ $message }}</span>@enderror
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Category *</label>
            <select name="category" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                <option value="">Select Category</option>
                <option value="award" @selected(old('category', $achievement->category ?? '') == 'award')>Award</option>
                <option value="certification" @selected(old('category', $achievement->category ?? '') == 'certification')>Certification</option>
                <option value="honor" @selected(old('category', $achievement->category ?? '') == 'honor')>Honor</option>
            </select>
            @error('category')<span style="color: #dc3545; font-size: 12px;">{{ $message }}</span>@enderror
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Issuer *</label>
            <input type="text" name="issuer" value="{{ old('issuer', $achievement->issuer ?? '') }}" placeholder="e.g., University Name" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
            @error('issuer')<span style="color: #dc3545; font-size: 12px;">{{ $message }}</span>@enderror
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Date Received *</label>
            <input type="date" name="date_received" value="{{ old('date_received', isset($achievement) ? $achievement->date_received->format('Y-m-d') : '') }}" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
            @error('date_received')<span style="color: #dc3545; font-size: 12px;">{{ $message }}</span>@enderror
        </div>

        <div style="display: flex; gap: 10px;">
            <button type="submit" style="background: #fee140; color: #333; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">{{ isset($achievement) ? '💾 Update Achievement' : '➕ Create Achievement' }}</button>
            <a href="{{ route('admin.achievements.index') }}" style="background: #6c757d; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">← Back</a>
        </div>
    </form>
</div>

@endsection
