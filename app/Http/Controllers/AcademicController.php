<?php

namespace App\Http\Controllers;

use App\Models\Academic;
use Illuminate\View\View;

class AcademicController extends Controller
{
    public function index(): View
    {
        $academics = Academic::orderBy('start_date', 'desc')->get();
        return view('pages.academic', compact('academics'));
    }
}
