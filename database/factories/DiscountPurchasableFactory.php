<?php

namespace Database\Factories;

use App\Models\DiscountPurchasable;
use App\Models\ProductVariant;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class DiscountPurchasableFactory extends Factory
{
    protected $model = DiscountPurchasable::class;

    public function definition()
    {
        return [
            'purchasable_id'   => ProductVariant::factory(),
            'purchasable_type' => ProductVariant::class,
            'type'             => $this->faker->word(),
            'created_at'       => Carbon::now(),
            'updated_at'       => Carbon::now(),
        ];
    }
}
