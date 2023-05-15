<?php

namespace Database\Factories;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    protected $model = Transaction::class;

    public function definition(): array
    {
        return [
            'order_id'  => $this->faker->word(),
            'success'   => $this->faker->boolean(),
            'refund'    => $this->faker->boolean(),
            'driver'    => $this->faker->word(),
            'amount'    => $this->faker->randomNumber(),
            'reference' => $this->faker->word(),
            'status'    => $this->faker->word(),
            'card_type' => $this->faker->randomNumber(),
            'last_four' => $this->faker->randomNumber(),
        ];
    }
}
