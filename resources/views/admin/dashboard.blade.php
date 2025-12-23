@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')

<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-bottom: 30px;">
    <!-- Projects Card -->
    <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 20px; border-radius: 10px; text-align: center;">
        <div style="font-size: 40px; margin-bottom: 10px;">💼</div>
        <div style="font-size: 28px; font-weight: bold;">{{ $projectCount }}</div>
        <div style="font-size: 14px; margin-top: 5px;">Total Projects</div>
    </div>

    <!-- Skills Card -->
    <div style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); color: white; padding: 20px; border-radius: 10px; text-align: center;">
        <div style="font-size: 40px; margin-bottom: 10px;">⚙️</div>
        <div style="font-size: 28px; font-weight: bold;">{{ $skillCount }}</div>
        <div style="font-size: 14px; margin-top: 5px;">Skills Listed</div>
    </div>

    <!-- Academic Card -->
    <div style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); color: white; padding: 20px; border-radius: 10px; text-align: center;">
        <div style="font-size: 40px; margin-bottom: 10px;">🎓</div>
        <div style="font-size: 28px; font-weight: bold;">{{ $academicCount }}</div>
        <div style="font-size: 14px; margin-top: 5px;">Academic Records</div>
    </div>

    <!-- Achievements Card -->
    <div style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); color: white; padding: 20px; border-radius: 10px; text-align: center;">
        <div style="font-size: 40px; margin-bottom: 10px;">🏆</div>
        <div style="font-size: 28px; font-weight: bold;">{{ $achievementCount }}</div>
        <div style="font-size: 14px; margin-top: 5px;">Achievements</div>
    </div>
</div>

<div style="background: #f9f9f9; padding: 20px; border-radius: 10px;">
    <h3>📋 Quick Actions</h3>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 15px; margin-top: 15px;">
        <a href="{{ route('admin.projects.create') }}" style="background: #667eea; color: white; padding: 12px; border-radius: 5px; text-decoration: none; text-align: center;">+ Add Project</a>
        <a href="{{ route('admin.skills.create') }}" style="background: #f5576c; color: white; padding: 12px; border-radius: 5px; text-decoration: none; text-align: center;">+ Add Skill</a>
        <a href="{{ route('admin.academics.create') }}" style="background: #00f2fe; color: white; padding: 12px; border-radius: 5px; text-decoration: none; text-align: center;">+ Add Academic</a>
        <a href="{{ route('admin.achievements.create') }}" style="background: #fee140; color: white; padding: 12px; border-radius: 5px; text-decoration: none; text-align: center;">+ Add Achievement</a>
    </div>
</div>

@endsection
