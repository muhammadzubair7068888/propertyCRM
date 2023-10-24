<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyPaymentMethod extends Model
{
    use HasFactory;
    protected $fillable=[
       'property_id',
       'payment_method_id',
       'payment_description',
     

    ];

    public function payment_name(){
        return $this->belongsTo(PaymentMethod::class,'payment_method_id');
    }
}
