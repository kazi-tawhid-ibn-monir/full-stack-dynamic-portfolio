@extends('admin.layouts.app')

@section('title', 'Manage Achievements')

@section('content')

<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
    <h3>🏆 Achievements ({{ $achievements->count() }})</h3>
    <a href="{{ route('admin.achievements.create') }}" style="background: #fee140; color: #333; padding: 10px 20px; border-radius: 5px; text-decoration: none;">+ Add Achievement</a>
</div>

@if($achievements->count() > 0)
    <table style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr style="background: #f9f9f9; border-bottom: 2px solid #ddd;">
                <th style="padding: 12px; text-align: left;">Title</th>
                <th style="padding: 12px; text-align: left;">Category</th>
                <th style="padding: 12px; text-align: left;">Issuer</th>
                <th style="padding: 12px; text-align: center;">Date</th>
                <th style="padding: 12px; text-align: center;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($achievements as $achievement)
                <tr style="border-bottom: 1px solid #eee;">
                    <td style="padding: 12px;"><strong>{{ $achievement->title }}</strong></td>
                    <td style="padding: 12px;">
                        <span style="background: #ffe0b2; color: #e65100; padding: 4px 8px; border-radius: 3px;">{{ ucfirst($achievement->category) }}</span>
                    </td>
                    <td style="padding: 12px;">{{ $achievement->issuer }}</td>
                    <td style="padding: 12px; text-align: center;">{{ $achievement->date_received->format('M d, Y') }}</td>
                    <td style="padding: 12px; text-align: center;">
                        <a href="{{ route('admin.achievements.edit', $achievement) }}" style="background: #4caf50; color: white; padding: 6px 12px; border-radius: 3px; text-decoration: none; font-size: 12px;">Edit</a>
                        <form action="{{ route('admin.achievements.destroy', $achievement) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background: #dc3545; color: white; padding: 6px 12px; border-radius: 3px; border: none; cursor: pointer; font-size: 12px;" onclick="return confirm('Delete this achievement?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div style="margin-top: 20px;">
        {{ $achievements->links() }}
    </div>
@else
    <div style="text-align: center; padding: 40px; color: #999;">
        <p>No achievements yet. <a href="{{ route('admin.achievements.create') }}">Add one now</a>!</p>
    </div>
@endif

@endsection
