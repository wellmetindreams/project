<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KnifeType>
 */
class KnifeTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->randomElement(['bread_knife','boning_knife','chef_knife','cleaver','nakiri_knife','paring_knife','santoku_knife','utility_knife'])
        ];
    }
}
