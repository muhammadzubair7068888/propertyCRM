<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
    public function run()
    {
        DB::table('tenants')->insert([
            'user_id'=>"2", 
            'kin_name'=>"sdsd",
            'kin_phone_number'=>"ere",
            'kin_relation'=>"2wewewe",
            'kin_emergency_name'=>"2wewe",
            'kin_emergency_phone_number'=>"2sdsds",
            'kin_emergency_emial'=>"2qwqwq",
            'kin_emergency_relation'=>"2sdsdsds",
            'kin_emergency_postal_address'=>"2asaasa",
            'kin_emergency_physical_address'=>"2asasas",
            'employment_status'=>"2asasasa",
            'employment_position'=>"2asasasa",
            'employment_contact_phone'=>"2sdsd",
            'employment_contact_email'=>"2asasa",
            'employment_postal_address'=>"2asasasa",
            'employment_physical_address'=>"2asasasas",
            'business_name'=>"2asasasa",
            'licence_name'=>"2erer",
            'tax_id'=>"2wwwe3",
            'bussiness_address'=>"2erere",
            'bussiness_industry'=>"2wewew",
            'bussiness_description'=>"2wqwqwqrtr"
        ]);
    }
}
