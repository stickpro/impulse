<?php

namespace Database\Factories;

use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

class CountryFactory extends Factory
{
    protected $model = Country::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->country,
            'iso3' => $this->faker->unique()->regexify('[A-Z]{3}'),
            'iso2' => $this->faker->unique()->regexify('[A-Z]{2}'),
            'phone_code' => '+7',
            'capital' => $this->faker->city,
            'currency' => $this->faker->currencyCode,
            'native' => $this->faker->languageCode,
            'emoji' => $this->faker->emoji,
            'emoji_u' => $this->faker->emoji,
        ];
    }
}
