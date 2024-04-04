<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        Course::factory(100)->create();

        $categories = [
            [
                'name' => 'Personal Growth and Empowerment',
                'slug' => 'personal-growth-and-empowerment',
                'description' => 'Courses aimed at personal development, self-improvement, and empowerment.'
            ],
            [
                'name' => 'Financial Literacy and Wealth',
                'slug' => 'financial-literacy-and-wealth',
                'description' => 'Learn about managing finances, investments, and building wealth.'
            ],
            [
                'name' => 'Business Management and Development',
                'slug' => 'business-management-and-development',
                'description' => 'Explore strategies for starting, managing, and growing businesses.'
            ],
            [
                'name' => 'Languages',
                'slug' => 'languages',
                'description' => 'Courses to learn new languages or improve language skills.'
            ],
            [
                'name' => 'Health and Nutrition',
                'slug' => 'health-and-nutrition',
                'description' => 'Discover topics related to health, nutrition, and well-being.'
            ],
            [
                'name' => 'Engineering',
                'slug' => 'engineering',
                'description' => 'Learn about various fields of engineering, including civil, mechanical, and electrical.'
            ],
            [
                'name' => 'Information Technology',
                'slug' => 'information-technology',
                'description' => 'Explore the world of IT, including programming, networking, and cybersecurity.'
            ],
            [
                'name' => 'Art and Content Creating',
                'slug' => 'art-and-content-creating',
                'description' => 'Courses focused on creativity, art, writing, and content creation.'
            ],
        ];

        Category::insert($categories);
    }
}
