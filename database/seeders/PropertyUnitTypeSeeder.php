<?php

namespace Database\Seeders;

use App\Models\PropertyUnitType;
use Illuminate\Database\Seeder;

class PropertyUnitTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $units = [
            [
               'name' => 'bed_sitter',
               'display_name' => "bed_sitter",
               'description' => "bed_sitter",
               
           ],
           [
               'name' => 'Commercial Space',
               'display_name' => "Commercial Space",
               'description' => "Commercial Space",
           ],
           [
               'name' => 'Five Bed Room',
               'display_name' => "Five Bed Room",
               'description' => "Five Bed Room",
           ],
           [
               'name' => 'Four Bed Room',
               'display_name' => "Four Bed Room",
               'description' => "Four Bed Room",
           ],
           [
               'name' => 'one_bed_apartment',
               'display_name' => "one_bed_apartment",
               'description' => "one_bed_apartment",
           ],
           [
               'name' => 'single_room',
               'display_name' => "single_room",
               'description' => "single_room",
           ],
           [
               'name' => 'Three Bed Room',
               'display_name' => "Three Bed Room",
               'description' => "Three Bed Room",
           ],
           [
               'name' => 'two_bed_apartment',
               'display_name' => "two_bed_apartment",
               'description' => "two_bed_apartment",
           ],
         
          
           ]
       ;
        foreach($units as $unit){
            PropertyUnitType::create($unit);
        }
    }
}
