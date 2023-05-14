<?php

namespace Database\Factories;

use App\Models\TaxClass;
use App\Models\TaxRate;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaxRateAmountFactoryFactory extends Factory
{
    public function definition(): array
    {
        return [
                'tax_rate_id'  => TaxRate::factory(),
                'tax_class_id' => TaxClass::factory(),
                'percentage'   => 20,
        ];
    }
}
