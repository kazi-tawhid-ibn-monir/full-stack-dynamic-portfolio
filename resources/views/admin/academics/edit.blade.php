@extends('admin.layouts.app')

@section('title', isset($academic) ? 'Edit Academic Record' : 'Create Academic Record')

@section('content')

<div style="max-width: 800px;">
    <h3>{{ isset($academic) ? '✏️ Edit Academic Record' : '➕ Create New Academic Record' }}</h3>

    <form action="{{ isset($academic) ? route('admin.academics.update', $academic) : route('admin.academics.store') }}" method="POST" style="background: #f9f9f9; padding: 20px; border-radius: 5px; margin-top: 20px;">
        @csrf
        @if(isset($academic))
            @method('PUT')
        @endif

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Degree *</label>
            <input type="text" name="degree" value="{{ old('degree', $academic->degree ?? '') }}" placeholder="e.g., Bachelor of Science" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
            @error('degree')<span style="color: #dc3545; font-size: 12px;">{{ $message }}</span>@enderror
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Field of Study *</label>
            <input type="text" name="field_of_study" value="{{ old('field_of_study', $academic->field_of_study ?? '') }}" placeholder="e.g., Computer Science" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
            @error('field_of_study')<span style="color: #dc3545; font-size: 12px;">{{ $message }}</span>@enderror
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Institution *</label>
            <input type="text" name="institution" value="{{ old('institution', $academic->institution ?? '') }}" placeholder="e.g., University Name" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
            @error('institution')<span style="color: #dc3545; font-size: 12px;">{{ $message }}</span>@enderror
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
            <div>
                <label style="display: block; margin-bottom: 8px; font-weight: 600;">Start Date *</label>
                <input type="date" name="start_date" value="{{ old('start_date', isset($academic) ? $academic->start_date->format('Y-m-d') : '') }}" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                @error('start_date')<span style="color: #dc3545; font-size: 12px;">{{ $message }}</span>@enderror
            </div>
            <div>
                <label style="display: block; margin-bottom: 8px; font-weight: 600;">End Date</label>
                <input type="date" name="end_date" value="{{ old('end_date', isset($academic) && $academic->end_date ? $academic->end_date->format('Y-m-d') : '') }}" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                @error('end_date')<span style="color: #dc3545; font-size: 12px;">{{ $message }}</span>@enderror
            </div>
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">GPA</label>
            <input type="number" name="gpa" step="0.01" min="0" max="4" value="{{ old('gpa', $academic->gpa ?? '') }}" placeholder="e.g., 3.75" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
            @error('gpa')<span style="color: #dc3545; font-size: 12px;">{{ $message }}</span>@enderror
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Description</label>
            <textarea name="description" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">{{ old('description', $academic->description ?? '') }}</textarea>
            @error('description')<span style="color: #dc3545; font-size: 12px;">{{ $message }}</span>@enderror
        </div>

        <div style="display: flex; gap: 10px;">
            <button type="submit" style="background: #00f2fe; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">{{ isset($academic) ? '💾 Update Record' : '➕ Create Record' }}</button>
            <a href="{{ route('admin.academics.index') }}" style="background: #6c757d; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">← Back</a>
        </div>
    </form>
</div>

@endsection
