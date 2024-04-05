<?php

use App\Models\Course;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CourseController;


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

Route::get('/', function () {
    return view('landing', [
        'title' => 'Landing',
    ]);
});

Route::get('/login', [LoginController::class, 'index']);

Route::get('/signup', function () {
    return view('signup', [
        'title' => 'Sign Up',
        'active' => 'signup',
    ]);
});

Route::get('/home', function () {
    return view('home', [
        'title' => 'Home',
        'active' => 'home',
    ]);
});

Route::get('/courses', [CourseController::class, 'index']);

Route::get('/courses/{course:slug}', [CourseController::class, 'show']);

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'active' => 'about',
    ]);
});
