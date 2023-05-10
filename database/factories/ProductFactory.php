<?php

namespace Database\Factories;

use App\Exceptions\FieldTypeException;
use App\FieldType\Text;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * @throws FieldTypeException
     */
    public function definition(): array
    {
        return [
            'brand_id'        => Brand::factory()->create()->id,
            'product_type_id' => ProductType::factory(),
            'status'          => 'published',
            'attribute_data'  => collect([
                'name'        => new Text($this->faker->name),
                'description' => new Text($this->faker->sentence),
            ]),
        ];
    }
}
