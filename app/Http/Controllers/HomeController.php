<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        // Get featured projects (limit 3)
        $featured_projects = Project::limit(3)->get();
        
        // Get all skills
        $skills = Skill::all();

        return view('pages.home', compact('featured_projects', 'skills'));
    }
}
