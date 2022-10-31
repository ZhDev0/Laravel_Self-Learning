<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = fake()->realText($maxNbChars = 50, $indexSize = 2);
        return [
            //
            'title' => $title,
            'slug' => Str::slug($title),
            'body' => fake()->text(),
            'image' => fake()->imageUrl(640, 480),
        ];
    }
}
