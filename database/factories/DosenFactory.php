<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dosen>
 */
class DosenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => $this->faker->unique()->userName(),
            'name' => $this->faker->name(),
            'nip' => $this->faker->nik(),
            'email' => $this->faker->unique()->safeEmail(),
            'telp' => $this->faker->phoneNumber(),
            'motto' => $this->faker->sentence(mt_rand(10, 20))
        ];
    }
}
