<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(mt_rand(1, 3)),
            'slug' => fake()->slug(),
            'excerpt' => fake()->paragraph(mt_rand(1, 2)),
            'body' => fake()->paragraph(mt_rand(20, 30)),
            'thumbnail' => 'https://firebasestorage.googleapis.com/v0/b/gradee-b80f3.appspot.com/o/mathematics_hs.jpg?alt=media&token=0c870127-71e9-49c8-afe0-00cd0be2bc9a',
            'user_id' => mt_rand(1, 10),
            'category_id' => mt_rand(1, 5),
        ];
    }
}
