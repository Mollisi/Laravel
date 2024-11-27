<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $users =  User::whereIn('email', ['test email3'])->get();
        $usersIds = $users->pluck('id');

        return [

            'amount' => fake()->randomFloat(2),
            'invoice_number' => Str::random(10),
            'user_id' => fake()->randomElement($usersIds)
        ];
    }
}
