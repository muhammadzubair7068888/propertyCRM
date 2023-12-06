<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user = [
            [
                'first_name' => 'John',
                'middle_name' => 'Wick',
                'last_name' => 'Doe',
                'phone_number' => '09090909090',
                'email' => 'admin@example.com',
                'registration_date' => '2023-03-23',
                'country' => 'Pakistan',
                'national_id' => '12131234242',
                'state' => 'Punjab',
                'city' => 'Gujranwala',
                'postal_address' => 'Sui Gas Society',
                'physical_address' => 'Sui Gas Society',
                'residential_address' => 'Sui Gas Society',
                'password' => 123456, // Hash the password
                'user_type' => 'admin',
                'gender' => 'male',
                'DOB' => '1990-03-13',
                'martial_status' => 'married',
                'postal_code' => '5252',
                'status' => '1'
            ],
            [
                'first_name' => 'Xacan',
                'middle_name' => 'Cabdi',
                'last_name' => 'Ismaacil',
                'phone_number' => '09090909090',
                'email' => 'tenant@example.com',
                'registration_date' => '2023-03-23',
                'country' => 'Pakistan',
                'national_id' => '45544234523',
                'state' => 'Punjab',
                'city' => 'Gujranwala',
                'postal_address' => 'Sui Gas Society',
                'physical_address' => 'Sui Gas Society',
                'residential_address' => 'Sui Gas Society',
                'password' => 123456,
                'user_type' => 'tenant',
                'gender' => 'male',
                'DOB' => '1995-02-28',
                'martial_status' => 'single',
                'postal_code' => '5252',
                'status' => '1'
            ],
            [
                'first_name' => 'Konshens',
                'middle_name' => 'Otieno',
                'last_name' => 'Doe',
                'phone_number' => '09090909090',
                'email' => 'landlord@example.com',
                'registration_date' => '2023-03-23',
                'country' => 'Pakistan',
                'national_id' => 'wewew',
                'state' => 'Punjab',
                'city' => 'Gujranwala',
                'postal_address' => 'Sui Gas Society',
                'physical_address' => 'Sui Gas Society',
                'residential_address' => 'Sui Gas Society',
                'password' =>123456,
                'user_type' => 'landlord',
                'gender' => 'male',
                'DOB' => '1985-11-15',
                'martial_status' => 'married',
                'postal_code' => '5252',
                'status' => '1'
            ]
        ];

        foreach ($user as $userData) {
            User::create($userData);
        }
    }
}

