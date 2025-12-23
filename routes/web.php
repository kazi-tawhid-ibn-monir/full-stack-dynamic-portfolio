<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\AcademicController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\Admin\SkillController as AdminSkillController;
use App\Http\Controllers\Admin\AcademicController as AdminAcademicController;
use App\Http\Controllers\Admin\AchievementController as AdminAchievementController;
use App\Http\Controllers\Admin\AboutController as AdminAboutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ==================== PUBLIC ROUTES ====================

Route::get('/', [HomeController::class, 'index']);
Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/skills', [SkillController::class, 'index']);
Route::get('/academic', [AcademicController::class, 'index']);
Route::get('/achievements', [AchievementController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);

// ==================== ADMIN ROUTES ====================

Route::prefix('admin')->name('admin.')->group(function () {
    
    // Auth Routes (Not Protected)
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    
    // Protected Routes (Require Authentication)
    Route::middleware('auth:admin')->group(function () {
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
        
        // Dashboard
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        
        // Projects CRUD
        Route::resource('projects', AdminProjectController::class);
        
        // Skills CRUD
        Route::resource('skills', AdminSkillController::class);
        
        // Academic CRUD
        Route::resource('academics', AdminAcademicController::class);
        
        // Achievements CRUD
        Route::resource('achievements', AdminAchievementController::class);
        
        // About (Edit Only)
        Route::get('/about/edit', [AdminAboutController::class, 'edit'])->name('about.edit');
        Route::put('/about', [AdminAboutController::class, 'update'])->name('about.update');
    });
});