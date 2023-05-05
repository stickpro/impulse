<?php

namespace Database\Factories;

use App\Models\Attribute;
use App\Models\AttributeGroup;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttributeFactory extends Factory
{
    private static int $position = 1;
    protected $model = Attribute::class;

    public function definition(): array
    {
        return [
            'attribute_type'     => 'className',
            'attribute_group_id' => AttributeGroup::factory(),
            'position'           => self::$position++,
            'name' => [
                'en' => $this->faker->name(),
            ],
            'handle'             => $this->faker->word(),
            'section'            => $this->faker->word(),
            'type'               => $this->faker->word(),
            'required'           => $this->faker->boolean(),
            'configuration'      => $this->faker->words(),
            'system'             => $this->faker->boolean(),
        ];
    }
}
