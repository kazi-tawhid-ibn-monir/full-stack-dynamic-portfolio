<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class AcademicController extends Controller
{
    public function index(): View
    {
        return view('pages.academic');
    }
}
