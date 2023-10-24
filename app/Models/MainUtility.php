<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainUtility extends Model
{
    use HasFactory;
    protected $fillable = [
        'property_id',
        'utility_id',
        'property_unit_id',
        'reading_date',
        'current_reading',
    ];

    public function utility() {
        return $this->belongsTo(Utility::class);
    }

    public function property(){
        return $this->belongsTo(Property::class);
    }
    public function property_unit(){
        return $this->belongsTo(PropertyUnit::class);
    }
}
