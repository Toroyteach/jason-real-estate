<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\File>
 */
class FileFactory extends Factory
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
            'slug' => $this->faker->unique()->slug,
            'description' => $this->faker->paragraph,
            'file_path' => 'files/sample.pdf',
            'property_index' => $this->faker->bothify('PROP-###-???'),
            'land_dec' => $this->faker->word,
            'is_featured' => $this->faker->boolean,
            'is_downloadable' => true,
        ];
    }
}
