<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\TaxZone;
use App\Models\TaxZoneCountry;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaxZoneCountryFactory extends Factory
{
    protected $model = TaxZoneCountry::class;

    public function definition(): array
    {
        return [
            'tax_zone_id' => TaxZone::factory(),
            'country_id'  => Country::factory(),
        ];
    }
}
