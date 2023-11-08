<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UtilityReading extends Model
{
    use HasFactory;
    protected $fillable=[
      'property_unit_id',
      'main_utilities_id',
      'reading_date',
      'current_reading',
    ];
    public function main_utilities(){
        return $this->belongsTo(MainUtility::class);
    }
    public function property_unit(){
        return $this->belongsTo(PropertyUnit::class);
    }
    
}
