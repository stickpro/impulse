<?php

namespace Database\Factories;

use App\Models\Cart;
use App\Models\CartLine;
use App\Models\ProductVariant;
use Illuminate\Database\Eloquent\Factories\Factory;

class CartLineFactory extends Factory
{
    protected $model = CartLine::class;

    public function definition()
    {
        return [
            'cart_id'          => Cart::factory(),
            'quantity'         => $this->faker->numberBetween(0, 1000),
            'purchasable_type' => ProductVariant::class,
            'purchasable_id'   => ProductVariant::factory(),
            'meta'             => null,
        ];
    }
}
