<?php

use App\Http\Controllers\CourseController;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Support\Facades\Route;


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

Route::get('/login', function () {
    return view('login', [
        'title' => 'Login',
    ]);
});

Route::get('/signup', function () {
    return view('signup', [
        'title' => 'Sign Up',
    ]);
});

Route::get('/home', function () {
    return view('home', [
        'title' => 'Home',
        'username' => 'admin',
        'email' => 'admin@gmail.com',
        'token' => 'A123B456'
    ]);
});

Route::get('/courses', [CourseController::class, 'index']);

Route::get('/courses/{course:slug}', [CourseController::class, 'show']);

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('courses', [
        'title' => "$category->name Courses",
        'courses' => $category->courses
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About'
    ]);
});
