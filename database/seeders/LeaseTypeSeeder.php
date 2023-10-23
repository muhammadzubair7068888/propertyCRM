<?php

namespace Database\Seeders;

use App\Models\LeaseType;
use Illuminate\Database\Seeder;

class LeaseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tenantType = [
            [
                'name' => "Residential",
                
            ],
            [
                'name' => "Commercial",
               
            ]
        ];

        foreach ($tenantType as $data) {
            LeaseType::create($data);
        }
    }
}
