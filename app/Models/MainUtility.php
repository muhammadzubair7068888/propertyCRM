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

    ];

    public function utility() {
        return $this->belongsTo(Utility::class);
    }

    public function property(){
        return $this->belongsTo(Property::class);
    }
 

}
