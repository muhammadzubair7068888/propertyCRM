<?php

namespace Database\Seeders;


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
        ]);
    }
}
