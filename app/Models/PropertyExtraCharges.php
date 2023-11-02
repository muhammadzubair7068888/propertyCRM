<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyExtraCharges extends Model
{
    use HasFactory;
    protected $fillable=[
          'property_id',
          'extra_charges_id',
          'extra_charges_value',
          'extra_charges_Type',
          'extra_charges_frequency',
    ];

    public function chargeName(){
        return $this->belongsTo(ExtraCharges::class, "extra_charges_id", "id");
    }
  
}
