<?php

namespace Database\Seeders;

use App\Models\TenantSetting;
use Illuminate\Database\Seeder;

class TenantSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TenantSetting::create([
            'tenant_prefix'=>"TN", 
        ]);
    }
}
