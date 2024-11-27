<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\invoice;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'amount'=>fake()->randomFloat(2),
           'transaction_number'=> fake()->regexify(),
           'invoice_number'=> invoice::first()->id,
         
        ];
    }
}
