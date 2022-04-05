<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vizsga>
 */
class VizsgaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'targy'=>$this->faker->name(),
            'tipus'=>$this->faker->randomElement(['erettsegi','szakmai']),
            'kezdes'=>$this->faker->dateTime()
        ];
    }
}
