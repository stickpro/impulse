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
            'name'      => $this->faker->name(),
            'iso3'      => $this->faker->word(),
            'phonecode' => $this->faker->word(),
            'currency'  => $this->faker->word(),
            'emoji'     => $this->faker->word(),
            'emoji_u'   => $this->faker->word(),
        ];
    }
}
