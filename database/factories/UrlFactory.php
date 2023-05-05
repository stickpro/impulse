<?php

namespace Database\Factories;

use App\Models\Url;
use Illuminate\Database\Eloquent\Factories\Factory;

class UrlFactory extends Factory
{
    protected $model = Url::class;

    public function definition(): array
    {
        return [
            'language_id' => $this->faker->word(),
            'element'     => $this->faker->word(),
            'slug'        => $this->faker->slug(),
            'default'     => $this->faker->word(),
        ];
    }
}
