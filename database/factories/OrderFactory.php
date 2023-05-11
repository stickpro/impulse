<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition(): array
    {
        return [
            'channel_id'            => $this->faker->word(),
            'status'                => $this->faker->word(),
            'reference'             => $this->faker->word(),
            'customer_reference'    => $this->faker->word(),
            'sub_total'             => $this->faker->randomNumber(),
            'discount_total'        => $this->faker->word(),
            'shipping_total'        => $this->faker->word(),
            'tax_breakdown'         => $this->faker->word(),
            'tax_total'             => $this->faker->word(),
            'total'                 => $this->faker->word(),
            'notes'                 => $this->faker->word(),
            'currency_code'         => $this->faker->word(),
            'compare_currency_code' => $this->faker->word(),
            'exchange_rate'         => $this->faker->word(),
            'placed_at'             => Carbon::now(),
            'meta'                  => $this->faker->word(),
        ];
    }
}
