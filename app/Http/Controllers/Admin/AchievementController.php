<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $achievements = Achievement::paginate(10);
        return view('admin.achievements.index', compact('achievements'));
    }

    public function create()
    {
        return view('admin.achievements.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|in:award,certification,honor',
            'date_received' => 'required|date',
            'issuer' => 'required|string|max:255',
        ]);

        Achievement::create($validated);

        return redirect()->route('admin.achievements.index')
                        ->with('success', 'Achievement created successfully!');
    }

    public function edit(Achievement $achievement)
    {
        return view('admin.achievements.edit', compact('achievement'));
    }

    public function update(Request $request, Achievement $achievement)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|in:award,certification,honor',
            'date_received' => 'required|date',
            'issuer' => 'required|string|max:255',
        ]);

        $achievement->update($validated);

        return redirect()->route('admin.achievements.index')
                        ->with('success', 'Achievement updated successfully!');
    }

    public function destroy(Achievement $achievement)
    {
        $achievement->delete();
        return redirect()->route('admin.achievements.index')
                        ->with('success', 'Achievement deleted successfully!');
    }
}
