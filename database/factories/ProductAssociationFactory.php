<?php

namespace Database\Factories;

use App\Models\ProductAssociation;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductAssociationFactory extends Factory
{
    protected $model = ProductAssociation::class;

    public function definition(): array
    {
        return [
            'product_parent_id' => $this->faker->word(),
            'product_target_id' => $this->faker->word(),
            'type'              => $this->faker->word(),
        ];
    }
}
