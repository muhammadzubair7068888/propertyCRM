<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ExtraCharges;

class ExtraChargesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $extraCharges=[
        'VAT',
        'Processing Fee',
        'Service Fee',
       ];

       foreach($extraCharges as $charges){
        ExtraCharges::create(['name'=> $charges]);
       }


    }
    }

