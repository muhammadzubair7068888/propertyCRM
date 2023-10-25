<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable=[

        'tenant_info_id',
        'lease_id',
        'payment_method_id',
        'amount',
        'payment_date',
        'paid_by',
        'reference_number',
        'payment_for',
        'extra_note',

    ];

    public function payment_method(){
        return $this->belongsTo(PaymentMethod::class);
    }
    public function tenant_info(){
            return $this->belongsTo(TenantInfo::class);
    }
    public function lease(){
        return $this->belongsTo(Lease::class);
}
}
