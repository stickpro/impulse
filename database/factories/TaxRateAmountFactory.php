<?php

namespace Database\Factories;

use App\Models\TaxClass;
use App\Models\TaxRate;
use App\Models\TaxRateAmount;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TaxRateAmountFactory extends Factory
{
    use HasFactory;

    protected $model = TaxRateAmount::class;

    public function definition(): array
    {
        return [
            'tax_rate_id'  => TaxRate::factory(),
            'tax_class_id' => TaxClass::factory(),
            'percentage'   => 20,
        ];
    }
}
