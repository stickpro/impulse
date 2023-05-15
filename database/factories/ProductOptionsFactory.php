<?php

namespace Database\Factories;

use App\Models\ProductOptions;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductOptionsFactory extends Factory
{
    private static int $position = 1;

    protected $model = ProductOptions::class;

    public function definition(): array
    {
        $name = $this->faker->name;
        return [
            'handle' => Str::slug($name),
            'name' => [
                'en' => $this->faker->name,
            ],
            'position' => self::$position++,
        ];
    }
}
