<?php

namespace Database\Seeders;

use App\Models\TenantSetting;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            
            UserSeeder::class,
            TenantTypeSeeder::class,
            PaymentMethodSeeder::class,
            UtilitySeeder::class,
            ExtraChargesSeeder::class,
            TenantInfoSeeder::class,
            PropertyTypeSeeder::class,
            LeaseTypeSeeder::class,
            PropertyUnitTypeSeeder::class,
            PropertyAmenitiesSeeder::class,
            GeneralSettingSeeder::class,
            TenantSettingSeeder::class,
            LeaseSettingSeeder::class,
                       
        ]);
    }
}
