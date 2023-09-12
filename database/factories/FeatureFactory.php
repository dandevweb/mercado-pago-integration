<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Feature>
 */
class FeatureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement(['Cor', 'Tamanho', 'Peso', 'Altura', 'Largura', 'Comprimento']),
            'unit' => $this->faker->randomElement(['cm', 'g', 'kg', 'm', 'mm', '']),

        ];
    }
}
