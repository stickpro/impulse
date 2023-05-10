<?php

namespace Database\Factories;

use App\Models\State;
use App\Models\TaxZone;
use App\Models\TaxZoneState;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaxZoneStateFactory extends Factory
{
    protected $model = TaxZoneState::class;

    public function definition(): array
    {
        return [
            'tax_zone_id' => TaxZone::factory(),
            'state_id'    => State::factory(),
        ];
    }
}
