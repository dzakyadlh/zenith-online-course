<?php

namespace App\Models;

class Course
{
    private static $course_list = [
        [
            'title' => 'Course Title',
            'slug' => 'course-title-1',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adip',
            'price' => 'Price',
            'thumbnail' => 'images/exampleimg.png',
        ],
        [
            'title' => 'Course Title',
            'slug' => 'course-title-2',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adip',
            'price' => 'Price',
            'thumbnail' => 'images/exampleimg.png',
        ],
        [
            'title' => 'Course Title',
            'slug' => 'course-title-3',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adip',
            'price' => 'Price',
            'thumbnail' => 'images/exampleimg.png',
        ],
    ];

    public static function all(){
        return collect(self::$course_list);
    }

    public static function find($slug){
        $courses = static::all();
        return $courses->firstWhere('slug', $slug);
    }
}
