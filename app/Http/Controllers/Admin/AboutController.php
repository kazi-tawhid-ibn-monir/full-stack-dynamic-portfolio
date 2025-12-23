<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function edit()
    {
        $about = About::first() ?? new About();
        return view('admin.about.edit', compact('about'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'bio' => 'required|string',
            'professional_summary' => 'required|string',
            'years_experience' => 'required|integer|min:0',
            'location' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
        ]);

        $about = About::first();

        if ($about) {
            $about->update($validated);
        } else {
            About::create($validated);
        }

        return redirect()->route('admin.about.edit')
                        ->with('success', 'About section updated successfully!');
    }
}
