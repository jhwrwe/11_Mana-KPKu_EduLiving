<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teachers>
 */
class TeachersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(2),
            'majors' => fake()->word,
            'WorkExperience' => fake()->word,
            'attended'=> fake()->word,
            'skills'=> fake()->word,
            'email' => fake()->unique()->safeEmail,
            'password' => fake()->password,
            'username' => fake()->userName,
            'nationality' => fake()->country,
            'gender' => fake()->randomElement(['Male', 'Female']),
            'Additional_information' => fake()->paragraph,
            'Hobbys' => fake()->text,
            'age' => fake()->numberBetween(18, 65),
            'image' => null,
        ];
    }
}
