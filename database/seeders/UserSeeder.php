<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i <= 9; $i++){
            DB::table('users')->insert([
                'first_name' => 'sahil'.$i,
                'middle_name' => "mubeen",
                'last_name' => "bhi",
                'phone_number' => "09090909090".$i,
                'email' => "sahi".$i."@gmail.com",
                'registration_date' => "2023-03-23",
                'country' => "pak".$i,
                'national_id' => "wewew".$i,
                'state' => "pun".$i,
                'city' => "grw".$i,
                'postal_address' => "sui gas".$i,
                'physical_address' => "sui gas".$i,
                'residential_adress'  => "sui gas".$i,
                'password' => "2323".$i,
                'user_type' => "admin",
                'gender' => "male",
                'DOB' => "2023-03-13",
                'martial_status' => "not",
                'postal_code' => "5252".$i
            ]);
        }
    }
}
