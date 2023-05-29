<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title_ar' => $this->faker->word,
            'title_fr' => $this->faker->word,
            'description_ar' => $this->faker->text,
            'description_fr' => $this->faker->text,
            'status' => $this->faker->word,
            'montant' => $this->faker->randomNumber(),
        ];
    }
}
