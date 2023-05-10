<?php

namespace Database\Factories;

use App\Models\State;
use Illuminate\Database\Eloquent\Factories\Factory;

class StateFactory extends Factory
{
    protected $model = State::class;

    public function definition(): array
    {
        return [
            'country_id' => $this->faker->word(),
            'name'       => $this->faker->name(),
            'code'       => $this->faker->word(),
        ];
    }
}
