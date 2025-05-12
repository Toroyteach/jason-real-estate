<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estate>
 */
class EstateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->company . ' Estate',
            'slug' => \Str::slug($this->faker->unique()->company),
            'description' => $this->faker->paragraphs(4, true),
            'type' => $this->faker->randomElement(['development', 'buy', 'rent']),
            'location' => $this->faker->city,
            'price' => $this->faker->randomFloat(2, 50000, 1000000),
            'status' => 'available',
            'cover_image' => 'https://via.placeholder.com/800x400.png?text=Estate+Cover',
        ];
    }
}
