<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaseDepositAmount extends Model
{
    use HasFactory;

    protected $fillable = [
        'lease_id',
        'utility_name',
        'deposit_amount',
         ];
}
