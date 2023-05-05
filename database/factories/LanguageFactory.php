<?php

namespace Database\Factories;

use App\Models\Language;
use Illuminate\Database\Eloquent\Factories\Factory;

class LanguageFactory extends Factory
{
    protected $model = Language::class;

    public function definition(): array
    {
        return [
            'code'    => $this->faker->unique()->languageCode,
            'name'    => $this->faker->name(),
            'default' => $this->faker->boolean(),
        ];
    }
}
