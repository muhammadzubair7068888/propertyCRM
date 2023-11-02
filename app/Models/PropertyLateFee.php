<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyLateFee extends Model
{
    use HasFactory;
    protected $fillable=[
'property_id',
'late_fee_name',
'late_fee_value',
'late_fee_type',
'late_fee_grace_period',
'late_fee_frequency',
    ];

    
}
