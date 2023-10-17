<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PropertyType;

class PropertyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $propertyTypes = [
            'duplex',
            'apartment',
            'commercial',
            'house',
            'mixed-use',
            'other',
        ];

        foreach ($propertyTypes as $type) {
            PropertyType::create(['name' => $type]);
        }
    }

}
