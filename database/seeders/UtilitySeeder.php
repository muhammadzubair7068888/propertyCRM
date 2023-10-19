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
        $utility=[
            'Water',
            'Electricity',
            'Garbage'
        ];
        foreach($utility as $utilities){
            Utility::create(['name'=>$utilities]);
        }
    }
}
