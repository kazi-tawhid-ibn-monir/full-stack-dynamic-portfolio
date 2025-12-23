<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Academic;
use Illuminate\Http\Request;

class AcademicController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $academics = Academic::orderBy('start_date', 'desc')->paginate(10);
        return view('admin.academics.index', compact('academics'));
    }

    public function create()
    {
        return view('admin.academics.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'degree' => 'required|string|max:255',
            'field_of_study' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'gpa' => 'nullable|numeric|between:0,4',
            'description' => 'nullable|string',
        ]);

        Academic::create($validated);

        return redirect()->route('admin.academics.index')
                        ->with('success', 'Academic record created successfully!');
    }

    public function edit(Academic $academic)
    {
        return view('admin.academics.edit', compact('academic'));
    }

    public function update(Request $request, Academic $academic)
    {
        $validated = $request->validate([
            'degree' => 'required|string|max:255',
            'field_of_study' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'gpa' => 'nullable|numeric|between:0,4',
            'description' => 'nullable|string',
        ]);

        $academic->update($validated);

        return redirect()->route('admin.academics.index')
                        ->with('success', 'Academic record updated successfully!');
    }

    public function destroy(Academic $academic)
    {
        $academic->delete();
        return redirect()->route('admin.academics.index')
                        ->with('success', 'Academic record deleted successfully!');
    }
}
