<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Academic;
use App\Models\Achievement;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $projectCount = Project::count();
        $skillCount = Skill::count();
        $academicCount = Academic::count();
        $achievementCount = Achievement::count();

        return view('admin.dashboard', compact(
            'projectCount',
            'skillCount',
            'academicCount',
            'achievementCount'
        ));
    }
}
