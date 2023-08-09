<?php

namespace Database\Factories;

use App\Models\AttributeGroup;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AttributeGroupFactory extends Factory
{
    protected $model = AttributeGroup::class;

    public function definition(): array
    {
        return [
            'attributable_type' => $this->faker->word(),
            'name'              => collect([
                'en' => $this->faker->name(),
            ]),
            'handle'            => Str::slug($this->faker->name()),
            'position'          => $this->faker->randomNumber(),
        ];
    }
}
