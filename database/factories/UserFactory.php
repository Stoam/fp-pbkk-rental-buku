<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    // protected static ?string $password;
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => fake()->unique()->name(),
            'password' => bcrypt('password'),
            // 'password' => static::$password ??= Hash::make('password'),
            'phone' => fake()->phoneNumber(),
            'address' => fake()->address(),
            'status' => fake()->randomElement(['active', 'inactive']),
            'created_at' => now(),
            'updated_at' => now(),
            // 'email' => fake()->unique()->safeEmail(),
            // 'email_verified_at' => now(),
            // 'remember_token' => Str::random(10),
        ];
            // 'username' => $this->faker->unique()->userName,
            // 'password' => bcrypt('password'), // You might want to use Hash::make() in a real application
            // 'phone' => $this->faker->phoneNumber,
            // 'address' => $this->faker->address,
            // 'status' => $this->faker->randomElement(['active', 'inactive']),
            // 'created_at' => now(),
            // 'updated_at' => now(),
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    // public function unverified(): static
    // {
    //     return $this->state(fn (array $attributes) => [
    //         'email_verified_at' => null,
    //     ]);
    // }
}
