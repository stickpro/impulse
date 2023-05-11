<?php

namespace Database\Factories;

use App\Models\CollectionGroup;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CollectionGroupFactory extends Factory
{
    protected $model = CollectionGroup::class;

    public function definition(): array
    {
        $name = $this->faker->unique()->word;

        return [
            'name'   => $name,
            'handle' => Str::slug($name),
        ];
    }
}
