<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'property_name',
        'property_code',
        'location',
        'user_id',
        'property_type_id',
        'agent_commission_value',
        'agent_commission_type',
        'payment_method',
        'payment_description',
        'extra_charge_name',
        'extra_charge_value',
        'extra_charge_type',
        'extra_charge_frequency',
        'late_fee_name',
        'late_fee_type',
        'late_fee_value',
        'late_fee_grace_period',
        'late_fee_frequency',
    ];

}
