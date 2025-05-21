<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Knife;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KnifeImage>
 */
class KnifeImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image_path'=>fake()->imageUrl(),
            'position'=>1,
        ];
    }
}
