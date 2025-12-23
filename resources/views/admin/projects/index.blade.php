@extends('admin.layouts.app')

@section('title', 'Manage Projects')

@section('content')

<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
    <h3>📋 All Projects ({{ $projects->count() }})</h3>
    <a href="{{ route('admin.projects.create') }}" style="background: #667eea; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">+ Add New Project</a>
</div>

@if($projects->count() > 0)
    <table style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr style="background: #f9f9f9; border-bottom: 2px solid #ddd;">
                <th style="padding: 12px; text-align: left;">Title</th>
                <th style="padding: 12px; text-align: left;">Technologies</th>
                <th style="padding: 12px; text-align: left;">Links</th>
                <th style="padding: 12px; text-align: center;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
                <tr style="border-bottom: 1px solid #eee;">
                    <td style="padding: 12px;">
                        <strong>{{ $project->title }}</strong><br>
                        <small style="color: #666;">{{ substr($project->description, 0, 50) }}...</small>
                    </td>
                    <td style="padding: 12px;">
                        @foreach(explode(',', $project->technologies) as $tech)
                            <span style="background: #e3f2fd; color: #1976d2; padding: 3px 8px; border-radius: 3px; font-size: 12px; margin-right: 3px;">{{ trim($tech) }}</span>
                        @endforeach
                    </td>
                    <td style="padding: 12px; font-size: 12px;">
                        @if($project->github_link)
                            <a href="{{ $project->github_link }}" target="_blank" style="color: #667eea; text-decoration: none;">GitHub</a>
                        @endif
                        @if($project->live_link)
                            <a href="{{ $project->live_link }}" target="_blank" style="color: #667eea; text-decoration: none; margin-left: 10px;">Live</a>
                        @endif
                    </td>
                    <td style="padding: 12px; text-align: center;">
                        <a href="{{ route('admin.projects.edit', $project) }}" style="background: #4caf50; color: white; padding: 6px 12px; border-radius: 3px; text-decoration: none; font-size: 12px;">Edit</a>
                        <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background: #dc3545; color: white; padding: 6px 12px; border-radius: 3px; border: none; cursor: pointer; font-size: 12px;" onclick="return confirm('Delete this project?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div style="margin-top: 20px;">
        {{ $projects->links() }}
    </div>
@else
    <div style="text-align: center; padding: 40px; color: #999;">
        <p>No projects yet. <a href="{{ route('admin.projects.create') }}">Create one now</a>!</p>
    </div>
@endif

@endsection
