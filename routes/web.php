<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::middleware(['portfolio.access'])->group(function () {
    Route::get('/', HomeController::class)->name('home');
    Route::get('/skills', SkillsController::class)->name('skills');
    Route::get('/projects', ProjectsController::class)->name('projects');
    Route::get('/experience', ExperienceController::class)->name('experience');
    Route::get('/education', EducationController::class)->name('education');
    Route::get('/contact', ContactController::class)->name('contact');
});
