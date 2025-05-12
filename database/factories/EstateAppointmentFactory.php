<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EstateAppointment>
 */
class EstateAppointmentFactory extends Factory
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
            'email' => $this->faker->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'preferred_date' => $this->faker->date(),
            'message' => $this->faker->sentence,
        ];
    }
}
