<?php

namespace Database\Factories;

use App\Models\Discount;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class DiscountFactory extends Factory
{
    protected $model = Discount::class;

    public function definition()
    {
        return [
            'name'        => $this->faker->name(),
            'handle'      => $this->faker->word(),
            'coupon'      => $this->faker->word(),
            'type'        => $this->faker->word(),
            'starts_at'   => $this->faker->word(),
            'ends_at'     => $this->faker->word(),
            'uses'        => $this->faker->randomNumber(),
            'max_uses'    => $this->faker->randomNumber(),
            'priority'    => $this->faker->randomNumber(),
            'stop'        => $this->faker->boolean(),
            'restriction' => $this->faker->word(),
            'data'        => $this->faker->words(),
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now(),
        ];
    }
}
