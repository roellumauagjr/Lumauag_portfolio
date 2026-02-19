<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\http\Controllers\ExperienceController;
use App\http\Controllers\ProjectController;
use App\http\Controllers\SkillController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/',[HomeController::class, 'index']);
Route::get('/experiences',[ExperienceController::class, 'index']);
Route::get('/projects',[ProjectController::class, 'index']);
Route::get('/skills',[SkillController::class, 'index']);
