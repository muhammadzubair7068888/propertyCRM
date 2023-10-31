<?php

namespace Database\Seeders;

use App\Models\PropertyAmenities;
use Illuminate\Database\Seeder;

class PropertyAmenitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amenties = [
            [
               'name' => 'a_c',
               'display_name' => "a_c",
               'description' => "a_c",
               
           ],
           [
               'name' => 'balcony',
               'display_name' => "balcony",
               'description' => "balcony",
           ],
           [
               'name' => 'furnished',
               'display_name' => "furnished",
               'description' => "furnished",
           ],
           [
               'name' => 'hardwood_floor',
               'display_name' => "hardwood_floor",
               'description' => "hardwood_floor",
           ],
           [
               'name' => 'parking',
               'display_name' => "parking",
               'description' => "parking",
           ],
           [
               'name' => 'pets_allowed',
               'display_name' => "pets_allowed",
               'description' => "pets_allowed",
           ],
           [
               'name' => 'pool',
               'display_name' => "pool",
               'description' => "pool",
           ],
           [
               'name' => 'wheelchair_access',
               'display_name' => "wheelchair_access",
               'description' => "wheelchair_access",
           ],
         
          
           ];
        foreach($amenties as $amentie){
            PropertyAmenities::create($amentie);
        }
    }
}
