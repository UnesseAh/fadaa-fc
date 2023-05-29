<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name_ar'=>$this->faker->word(),
            'first_name_fr'=>$this->faker->word(),
            'last_name_ar'=>$this->faker->word(),
            'last_name_fr'=>$this->faker->word(),
            'cin'=>$this->faker->numberBetween(1,8),
            'email'=>$this->faker->safeEmail,
            'img'=>$this->faker->imageUrl(),
            'telephone1'=>$this->faker->phoneNumber(),
            'telephone2'=>$this->faker->phoneNumber(),
        ];
    }
}
