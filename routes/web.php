<?php

use App\Http\Controllers\CourseController;
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
    return view('welcome');
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

Route::get('/about', function () {
    return view('about', [
        'title' => 'About'
    ]);
});