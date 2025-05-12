<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->sentence,
            'slug' => \Str::slug($this->faker->unique()->sentence),
            'excerpt' => $this->faker->text(150),
            'content' => $this->faker->paragraphs(4, true),
            'views_count' => $this->faker->numberBetween(0, 1000),
            'likes_count' => $this->faker->numberBetween(0, 300),
            'is_published' => $this->faker->boolean(80),
        ];
    }
}
