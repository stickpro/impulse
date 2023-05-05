<?php

namespace Database\Factories;

use App\Models\AttributeGroup;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttributeGroupFactory extends Factory
{
    protected $model = AttributeGroup::class;

    public function definition(): array
    {
        return [
            'attributable_type' => $this->faker->word(),
            'name'              => $this->faker->name(),
            'handle'            => $this->faker->word(),
            'position'          => $this->faker->randomNumber(),
        ];
    }
}
