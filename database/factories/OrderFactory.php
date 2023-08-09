<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition(): array
    {
        $total = $this->faker->numberBetween(200, 25000);
        $taxTotal = ($total - 100) * .2;

        return [
            'new_customer'          => $this->faker->boolean,
            'user_id'               => null,
            'status'                => 'awaiting-payment',
            'reference'             => $this->faker->unique()->regexify('[A-Z]{8}'),
            'sub_total'             => $total - $taxTotal,
            'discount_total'        => 0,
            'shipping_total'        => 0,
            'tax_breakdown'         => [
                [
                    'description' => 'VAT',
                    'total'       => 200,
                    'percentage'  => 20,
                ],
            ],
            'tax_total'             => $taxTotal,
            'total'                 => $total,
            'notes'                 => null,
            'currency_code'         => 'GBP',
            'compare_currency_code' => 'GBP',
            'exchange_rate'         => 1,
            'meta'                  => ['foo' => 'bar'],
        ];
    }
}
