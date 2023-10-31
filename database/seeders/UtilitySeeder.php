<?php

namespace Database\Seeders;
use App\Models\Utility;
use Illuminate\Database\Seeder;

class UtilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $utility = [
            [
               'name' => 'Water',
               'display_name' => "Water",
               'description' => "bhi",
               
           ],
           [
               'name' => 'Electricity',
               'display_name' => "Electricity",
               'description' => "bhi",
           ],
           [
               'name' => 'Garbage',
               'display_name' => "Garbage",
               'description' => "bhi",
           ],
         
          
           ]
       ;
        foreach($utility as $utilities){
            Utility::create($utilities);
        }
    }
}
