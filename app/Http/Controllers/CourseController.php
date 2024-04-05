<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{

    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = $category->name;
        }
        return view('courses', [
            'title' => $title . ' Courses',
            'courses' => Course::latest()->filter(request(['search', 'category']))->paginate(8)->withQueryString(),
        ]);
    }

    public function show(Course $course)
    {
        return view('course', [
            'title' => 'Course',
            'course' => $course,
        ]);
    }
}
