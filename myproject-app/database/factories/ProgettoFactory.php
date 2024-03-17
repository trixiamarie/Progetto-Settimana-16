<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Progetto>
 */
class ProgettoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome_progetto' => fake()->word, 
            'descrizione' => fake()->sentence, 
            'user_id' => function () {
                return User::factory()->create()->id; 
            },
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
