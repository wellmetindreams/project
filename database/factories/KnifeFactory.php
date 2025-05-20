<?php

namespace Database\Factories;

use App\Models\MaterialType;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Maker;
use App\Models\Collection;
use App\Models\KnifeType;
use App\Models\Country;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Knife>
 */
class KnifeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'maker_id'=> Maker::inRandomOrder()->first()->id(),
            'collection_id'=>function(array $attributes) {
                return Collection::where('maker_id', $attributes['mkaer_id'])->inRandomOrder()->first()->id;
            },
            'knife_type'=>KnifeType::inRandomOrder()->first()->id(),
            'price'=> ((int)fake()->randomFloat(2,5,100))*1000,
            'full_length'=>(int)fake()->randomFloat(2,3.5,5.5)*100,
            'blade_length'=>(int)fake()->randomFloat(2,1.5,2.5)*100,
            'blade_width'=>(int)fake()->randomFloat(2,1.5,4.5)*10,
            'butt_thickness'=>(int)fake()->randomFloat(2,1,2)*10,
            'weight'=>(int)fake()->randomFloat(2,1.5,3.5)*100,
            'material' => MaterialType::inRandomOrder()->first()->id,
            'country'=>Country::inRandomOrder()->first()->id,
            'desctiption'=>fake()->text(200)
        ];
    }
}
