<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EstateMedia>
 */
class EstateMediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'estate_id' => \App\Models\Estate::factory(),
            'type' => $this->faker->randomElement(['image', 'video']),
            'file_path' => 'https://via.placeholder.com/800x400.png?text=Estate+Media',
            'title' => $this->faker->name(),
        ];
    }
}
