<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\SkillController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/',[SkillController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});
Route::get('/projects', function () {
    return view('projects');
});
Route::get('/contact', function () {
    return view('contact');
});
