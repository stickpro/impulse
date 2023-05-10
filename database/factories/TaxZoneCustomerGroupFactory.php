<?php

namespace Database\Factories;

use App\Models\CustomerGroup;
use App\Models\TaxZone;
use App\Models\TaxZoneCustomerGroup;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaxZoneCustomerGroupFactory extends Factory
{
    protected $model = TaxZoneCustomerGroup::class;

    public function definition(): array
    {
        return [
            'tax_zone_id'       => TaxZone::factory(),
            'customer_group_id' => CustomerGroup::factory(),
        ];
    }
}
