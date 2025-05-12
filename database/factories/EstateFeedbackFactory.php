<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EstateFeedback>
 */
class EstateFeedbackFactory extends Factory
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
            'name' => $this->faker->name,
            'message' => $this->faker->paragraph,
            'rating' => $this->faker->numberBetween(3, 5),
            'approved' => $this->faker->boolean(80),
        ];
    }
}
