<?php

namespace Database\Factories;

use App\Models\ProductOptionValue;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductOptionValueFactory extends Factory
{
    protected $model = ProductOptionValue::class;

    public function definition(): array
    {
        return [
            'product_option_id' => $this->faker->word(),
        ];
    }
}
