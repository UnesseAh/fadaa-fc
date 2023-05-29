<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Session>
 */
class SessionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'amount' => $this->faker->randomFloat(2, 0, 999),
            'formation_id' => $this->faker->numberBetween(1, 10),
            'promotion'=> $this->faker->year(),
            'status' => $this->faker->randomElement(['Publier', 'Non Publier']),


        ];
    }
}
