<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etudiants>
 */
class UsersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $villesExist = \App\Models\Villes::pluck('id')->toArray();

        return [
            //
            'nom' => $this->faker->name,
            'adresse' => $this->faker->address,
            'telephone' => $this->faker->phoneNumber,
            'email' => $this->faker->safeEmail,
            'date_de_naissance' => $this->faker->date,
            'ville_id' => $this->faker->randomElement($villesExist),
            'password' => bcrypt('123456')
        ];
    }
}
