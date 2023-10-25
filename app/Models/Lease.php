<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lease extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_id',
        'property_unit_id',
        'lease_type_id',
        'lease_code',
        'rent_amount',
        'start_date',
        'due_on',
        'rental_deposit_amount',
        'tenant_info_id',
        'generate_invoice',
    ];
}
