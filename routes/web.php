<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\AcademicsController;
use App\Http\Controllers\AchievementsController;
use App\Http\Controllers\AboutController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/skills', [SkillsController::class, 'index'])->name('skills');
Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');
Route::get('/academic', [AcademicsController::class, 'index'])->name('academic');
Route::get('/achievements', [AchievementsController::class, 'index'])->name('achievements');
Route::get('/about', [AboutController::class, 'index'])->name('about');
