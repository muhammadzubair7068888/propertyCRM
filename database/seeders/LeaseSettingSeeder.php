<?php

namespace Database\Seeders;

use App\Models\LeaseSetting;
use Illuminate\Database\Seeder;

class LeaseSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LeaseSetting::create([
            'lease_number_prefix'=>"LS", 
            'invoice_number_prefix'=>"IN", 
            'invoice_disclaimer'=>"Sample Invoice disclaimer",
            'invoice_term'=>"Sample Invoice terms",
            'receipt_notes'=>"Thank you for the payment and tenancy with us.            If you have any queries regarding this official receipt, kindly contact us with 7 days.",
            'generate_invoice'=>"25",
            'show_payment_method'=>"1",
            'next_period_billing'=>"0",
            'skip_starting_period'=>"1",
           ]);
    }
}








