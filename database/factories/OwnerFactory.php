<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Owner>
 */
class OwnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'email' => $this->faker->email(),
            'cpf' => $this->faker->numerify('###########'),
            'birth_date' => $this->faker->date(),
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber()
        ];
    }
}
