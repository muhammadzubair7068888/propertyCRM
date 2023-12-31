<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
             [
                'first_name' => 'sahil',
                'middle_name' => "mubeen",
                'last_name' => "bhi",
                'phone_number' => "09090909090",
                'email' => "admin@example.com",
                'registration_date' => "2023-03-23",
                'country' => "pak",
                'national_id' => "wewew",
                'state' => "pun",
                'city' => "grw",
                'postal_address' => "sui gas",
                'physical_address' => "sui gas",
                'residential_address'  => "sui gas",
                'password' => '123456',
                'user_type' => "admin",
                'gender' => "male",
                'DOB' => "2023-03-13",
                'martial_status' => "not",
                'postal_code' => "5252",
                'status' => "1"
            ],
            [
                'first_name' => 'sahil',
                'middle_name' => "mubeen",
                'last_name' => "bhi",
                'phone_number' => "09090909090",
                'email' => "tenant@example.com",
                'registration_date' => "2023-03-23",
                'country' => "pak",
                'national_id' => "wewew",
                'state' => "pun",
                'city' => "grw",
                'postal_address' => "sui gas",
                'physical_address' => "sui gas",
                'residential_address'  => "sui gas",
                'password' => '123456',
                'user_type' => "tenant",
                'gender' => "male",
                'DOB' => "2023-03-13",
                'martial_status' => "not",
                'postal_code' => "5252",
                'status' => "1"
            ],
            [
                'first_name' => 'sahil',
                'middle_name' => "mubeen",
                'last_name' => "bhi",
                'phone_number' => "09090909090",
                'email' => "landlord@example.com",
                'registration_date' => "2023-03-23",
                'country' => "pak",
                'national_id' => "wewew",
                'state' => "pun",
                'city' => "grw",
                'postal_address' => "sui gas",
                'physical_address' => "sui gas",
                'residential_address'  => "sui gas",
                'password' => '123456',
                'user_type' => "landlord",
                'gender' => "male",
                'DOB' => "2023-03-13",
                'martial_status' => "not",
                'postal_code' => "5252",
                'status' => "1"
            ]
            ]
        ;

       foreach( $user as $userdata) {
            User::create($userdata);
        };
    }
}
