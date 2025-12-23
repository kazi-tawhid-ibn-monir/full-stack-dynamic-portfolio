@extends('admin.layouts.app')

@section('title', 'Manage Academic Records')

@section('content')

<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
    <h3>🎓 Academic Records ({{ $academics->count() }})</h3>
    <a href="{{ route('admin.academics.create') }}" style="background: #00f2fe; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">+ Add Academic Record</a>
</div>

@if($academics->count() > 0)
    <table style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr style="background: #f9f9f9; border-bottom: 2px solid #ddd;">
                <th style="padding: 12px; text-align: left;">Degree</th>
                <th style="padding: 12px; text-align: left;">Institution</th>
                <th style="padding: 12px; text-align: left;">Field of Study</th>
                <th style="padding: 12px; text-align: center;">GPA</th>
                <th style="padding: 12px; text-align: center;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($academics as $academic)
                <tr style="border-bottom: 1px solid #eee;">
                    <td style="padding: 12px;"><strong>{{ $academic->degree }}</strong></td>
                    <td style="padding: 12px;">{{ $academic->institution }}</td>
                    <td style="padding: 12px;">{{ $academic->field_of_study }}</td>
                    <td style="padding: 12px; text-align: center;">{{ $academic->gpa ?? 'N/A' }}</td>
                    <td style="padding: 12px; text-align: center;">
                        <a href="{{ route('admin.academics.edit', $academic) }}" style="background: #4caf50; color: white; padding: 6px 12px; border-radius: 3px; text-decoration: none; font-size: 12px;">Edit</a>
                        <form action="{{ route('admin.academics.destroy', $academic) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background: #dc3545; color: white; padding: 6px 12px; border-radius: 3px; border: none; cursor: pointer; font-size: 12px;" onclick="return confirm('Delete this record?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div style="margin-top: 20px;">
        {{ $academics->links() }}
    </div>
@else
    <div style="text-align: center; padding: 40px; color: #999;">
        <p>No academic records yet. <a href="{{ route('admin.academics.create') }}">Add one now</a>!</p>
    </div>
@endif

@endsection
