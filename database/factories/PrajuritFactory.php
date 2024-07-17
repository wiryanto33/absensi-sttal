<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\prajurit>
 */
class PrajuritFactory extends Factory
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
            'nrp' => $this->faker->unique()->numerify('######'),
            'pangkat' => $this->faker->randomElement(['klk', 'letda', 'serka', 'mayor']),
            'korps' => $this->faker->randomElement(['elektro', 'marinir', 'pelaut', 'teknik', 'supply']),
            'name' => $this->faker->name,
            'password' => Hash::make('123'),
        ];
    }
}
