<?php

namespace Database\Factories;

use App\Exceptions\FieldTypeException;
use App\FieldType\Text;
use App\Models\Collection;
use App\Models\CollectionGroup;
use Illuminate\Database\Eloquent\Factories\Factory;

class CollectionFactory extends Factory
{
    protected $model = Collection::class;

    /**
     * @throws FieldTypeException
     */
    public function definition(): array
    {
        return [
            'collection_group_id' => CollectionGroup::factory(),
            'attribute_data'      => collect([
                'name' => new Text($this->faker->name)
            ]),
        ];
    }
}
