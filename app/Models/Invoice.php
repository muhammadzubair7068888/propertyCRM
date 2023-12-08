<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'lease_id',
        'invoice_number',
        'status',
       ];

      public function leaseInfo(){
        return $this->belongsTo(Lease::class,'lease_id');
      }

      public function user(){
        return $this->belongsTo(User::class,'user_id');
      }
}


