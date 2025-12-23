<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\AcademicController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\AboutController;


// Home Page Route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Projects Page Route
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');

// Skills Page Route
Route::get('/skills', [SkillController::class, 'index'])->name('skills');

// Academic Page Route
Route::get('/academic', [AcademicController::class, 'index'])->name('academic');

// Achievements Page Route
Route::get('/achievements', [AchievementController::class, 'index'])->name('achievements');

// About Page Route
Route::get('/about', [AboutController::class, 'index'])->name('about');
