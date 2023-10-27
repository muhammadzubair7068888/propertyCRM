<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    use HasFactory;
    protected $fillable=[
        'property_id',
        'property_unit_id',
        'complaint_date',
        'complaint_description',
    ];
    public function property(){
        return $this->belongsTo(Property::class);
    }
    public function property_unit(){
        return $this->belongsTo(PropertyUnit::class);
    }
}
