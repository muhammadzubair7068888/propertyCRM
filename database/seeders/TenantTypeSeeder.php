<?php

namespace Database\Seeders;

use App\Models\TenantType;
use Illuminate\Database\Seeder;

class TenantTypeSeeder extends Seeder
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
                'name' => "individual",
                'display_name' => "Individual",
                'description' => "Individual",
            ],
            [
                'name' => "business",
                'display_name' => "Business",
                'description' => "Business",
            ]
        ];

        foreach ($tenantType as $data) {
            TenantType::create($data);
        }
    }
}
