<?php

namespace Database\Factories;

use App\Models\Cart;
use App\Models\Currency;
use Illuminate\Database\Eloquent\Factories\Factory;

class CartFactory extends Factory
{
    protected $model = Cart::class;

    public function definition()
    {
        return [
            'user_id'      => null,
            'customer_id'  => null,
            'merged_id'    => null,
            'currency_id'  => Currency::factory(),
            'completed_at' => null,
            'meta'         => [],
        ];
    }
}
