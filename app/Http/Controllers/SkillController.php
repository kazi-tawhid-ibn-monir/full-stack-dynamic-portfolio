<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\View\View;

class SkillController extends Controller
{
    public function index(): View
    {
        $skills = Skill::all();
        $backend = $skills->where('category', 'Backend')->values();
        $frontend = $skills->where('category', 'Frontend')->values();
        $specialized = $skills->where('category', 'Specialized')->values();
        $all_skills = $skills;

        return view('pages.skills', compact('backend', 'frontend', 'specialized', 'all_skills'));
    }
}
