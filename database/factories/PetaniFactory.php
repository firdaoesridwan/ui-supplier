<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Petani>
 */
class PetaniFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name,
            'alamat' => fake()->address,
            'no_hp' => fake()->phoneNumber,
            'luas_lahan' => fake()->randomFloat,
            'varietas_sawit' => fake()->unique()->word,
            'pupuk' => fake()->unique()->word,
            'tahun_sawit' => fake()->year
        ];
    }
}
