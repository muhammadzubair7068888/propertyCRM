<?php

namespace Database\Seeders;

use App\Models\GeneralSetting;
use Illuminate\Database\Seeder;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GeneralSetting::create([
            'company_name'=>"Butterfly Prime Realtors", 
            'email'=>"info@butterflyprime.com", 
            'p_number'=>"+254705828000",
            // 'currancy'=>"ere",
            // 'color_theme'=>"2wewewe",
            // 'language'=>"2wewe",
            
            'phy_address'=>"Kingsway Avenue",
            'postal_address'=>"P.O Box 1234 - 568, Nairobi, Kenya",
            'website_url'=>"www.butterflyprime.com",
            'zip_code'=>"00100",
          
           
        ]);
    }
}
