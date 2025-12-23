@extends('admin.layouts.app')

@section('title', 'Manage Skills')

@section('content')

<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
    <h3>⚙️ All Skills ({{ $skills->count() }})</h3>
    <a href="{{ route('admin.skills.create') }}" style="background: #f5576c; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">+ Add New Skill</a>
</div>

@if($skills->count() > 0)
    <table style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr style="background: #f9f9f9; border-bottom: 2px solid #ddd;">
                <th style="padding: 12px; text-align: left;">Skill Name</th>
                <th style="padding: 12px; text-align: left;">Category</th>
                <th style="padding: 12px; text-align: center;">Proficiency</th>
                <th style="padding: 12px; text-align: center;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($skills as $skill)
                <tr style="border-bottom: 1px solid #eee;">
                    <td style="padding: 12px;"><strong>{{ $skill->skill_name }}</strong></td>
                    <td style="padding: 12px;">
                        <span style="background: #fff3cd; color: #856404; padding: 4px 8px; border-radius: 3px;">{{ $skill->category }}</span>
                    </td>
                    <td style="padding: 12px; text-align: center;">
                        {{ str_repeat('⭐', $skill->proficiency) }}
                    </td>
                    <td style="padding: 12px; text-align: center;">
                        <a href="{{ route('admin.skills.edit', $skill) }}" style="background: #4caf50; color: white; padding: 6px 12px; border-radius: 3px; text-decoration: none; font-size: 12px;">Edit</a>
                        <form action="{{ route('admin.skills.destroy', $skill) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background: #dc3545; color: white; padding: 6px 12px; border-radius: 3px; border: none; cursor: pointer; font-size: 12px;" onclick="return confirm('Delete this skill?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div style="margin-top: 20px;">
        {{ $skills->links() }}
    </div>
@else
    <div style="text-align: center; padding: 40px; color: #999;">
        <p>No skills yet. <a href="{{ route('admin.skills.create') }}">Add your first skill</a>!</p>
    </div>
@endif

@endsection
