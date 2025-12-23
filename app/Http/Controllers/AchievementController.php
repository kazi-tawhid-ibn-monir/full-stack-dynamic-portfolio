<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class AchievementController extends Controller
{
    public function index(): View
    {
        return view('pages.achievements');
    }
}
