<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(), //Valor único en toda la tabla
            'email_verified_at' => now(), //Día y hora actual con carbon
            'password' => static::$password ??= Hash::make('12345678'), //?? -> Si no hay password, se crea uno
            'role' => fake()->randomElement($array = array ('admin', 'user')), // Crea un elemento aleatorio de un array con esos 2 valores
            'remember_token' => Str::random(10), //10 letras aleatorias
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
