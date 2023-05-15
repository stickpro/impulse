<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\Order;
use App\Models\OrderAddress;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderAddressFactory extends Factory
{
    protected $model = OrderAddress::class;

    public function definition(): array
    {
        return [
            'order_id'              => Order::factory(),
            'country_id'            => Country::factory(),
            'title'                 => $this->faker->title,
            'first_name'            => $this->faker->firstName,
            'last_name'             => $this->faker->lastName,
            'company_name'          => $this->faker->boolean ? $this->faker->company : null,
            'line_one'              => $this->faker->streetName,
            'line_two'              => $this->faker->boolean ? "Suite " . $this->faker->numerify() : null,
            'line_three'            => $this->faker->boolean ? $this->faker->buildingNumber : null,
            'city'                  => $this->faker->city,
            'state'                 => $this->faker->boolean ? $this->faker->state : null,
            'postcode'              => $this->faker->postcode,
            'delivery_instructions' => $this->faker->boolean ? $this->faker->sentence : null,
            'contact_email'         => $this->faker->boolean ? $this->faker->safeEmail : null,
            'contact_phone'         => $this->faker->boolean ? $this->faker->phoneNumber : null,
            'type'                  => 'shipping',
            'meta'                  => $this->faker->boolean ? ['has_dog' => 'yes'] : null,
        ];
    }
}
