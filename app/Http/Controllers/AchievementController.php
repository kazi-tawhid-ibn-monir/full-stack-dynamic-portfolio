<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use Illuminate\View\View;

class AchievementController extends Controller
{
    public function index(): View
    {
        $achievements = Achievement::all();
        $awards = $achievements->where('category', 'award')->values();
        $certifications = $achievements->where('category', 'certification')->values();
        $honors = $achievements->where('category', 'honor')->values();

        return view('pages.achievements', compact('achievements', 'awards', 'certifications', 'honors'));
    }
}
