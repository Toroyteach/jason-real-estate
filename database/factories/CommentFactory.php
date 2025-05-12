<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
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
            'name' => $this->faker->name,
            'email' => $this->faker->safeEmail,
            'content' => $this->faker->paragraph,
            'approved' => $this->faker->boolean(70),
        ];
    }
}
