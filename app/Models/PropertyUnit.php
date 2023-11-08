<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyUnit extends Model
{
    use HasFactory;
    protected $fillable=[
        'property_id',
        'unit_name',
        'unit_floor',
        'rent_amount',
        'unit_type',
        'bed_room',
        'bath_room',
        'total_room',
        'square_foot',

    ];
    public function get_lease(){
        return $this->hasMany(Lease::class);
    }

}
