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
            [
               'name' => 'duplex',
               'display_name' => "Duplex",
               'description' => "bhi",
               
           ],
           [
               'name' => 'apartment',
               'display_name' => "Apartment",
               'description' => "bhi",
           ],
           [
               'name' => 'commercial',
               'display_name' => "Commercial",
               'description' => "bhi",
           ],
           [
               'name' => 'house',
               'display_name' => "House",
               'description' => "bhi",
           ],
           [
               'name' => 'mixed',
               'display_name' => "Mixed",
               'description' => "bhi",
           ],
           [
               'name' => 'other',
               'display_name' => "Other",
               'description' => "bhi",
           ],
          
           ]
       ;
       
        foreach ($propertyTypes as $type) {
            PropertyType::create($type);
        }
    }

}
