<?php

use App\Models\Course;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardCourseController;
use App\Http\Controllers\SignupController;

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
})->middleware('guest');

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/signup', [SignupController::class, 'create'])->middleware('guest');

Route::post('/signup', [SignupController::class, 'store']);

Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/courses', [CourseController::class, 'index']);

Route::get('/courses/{course:slug}', [CourseController::class, 'show']);

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'active' => 'about',
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' => 'Dashboard',
        'active' => 'dashboard',
    ]);
})->middleware('auth');

Route::resource('/dashboard/my_courses', DashboardCourseController::class)->middleware('auth');
