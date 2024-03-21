<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Villes;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Villes>
 */
class VillesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nom' => $this->faker->city
        ];
    }
}
