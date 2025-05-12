<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogMedia>
 */
class BlogMediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'blog_id' => Blog::factory(),
            'type' => $this->faker->randomElement(['image', 'video']),
            'file_path' => 'https://via.placeholder.com/800x400.png?text=Blog+Media',
        ];
    }
}
