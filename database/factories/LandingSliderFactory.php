<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LandingSlider>
 */
class LandingSliderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'subtitle' => $this->faker->sentence,
            'image_path' => 'https://via.placeholder.com/1200x500.png?text=Landing+Slide',
            'button_text' => 'Learn More',
            'button_link' => '#',
            'order' => $this->faker->numberBetween(0, 10),
        ];
    }
}
