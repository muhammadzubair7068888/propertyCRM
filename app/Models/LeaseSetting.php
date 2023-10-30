<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaseSetting extends Model
{
    use HasFactory;
    protected $fillable = [
        'lease_number_prefix',
        'invoice_number_prefix',
        'invoice_disclaimer',
        'invoice_term',
        'receipt_notes',
        'generate_invoice',
        'show_payment_method',
        'next_period_billing',
        'skip_starting_period',
     ];
}
