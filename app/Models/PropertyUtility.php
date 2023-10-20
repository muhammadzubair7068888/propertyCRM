<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyUtility extends Model
{
    use HasFactory;
    protected $fillable=[
        'property_id',
        'utilities_id',
        'variable_cost',
        'fixed_fee',
        
    ];
}
