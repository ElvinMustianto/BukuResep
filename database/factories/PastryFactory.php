<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pastry>
 */
class PastryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_resep' => $this->faker->sentence(mt_rand(2, 8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            'bahan' => $this->faker->paragraph(),
            'cara_masak' => $this->faker->paragraph(),
            'category_id' => mt_rand(1, 3),
            'user_id' => mt_rand(1, 3),
        ];
    }
}