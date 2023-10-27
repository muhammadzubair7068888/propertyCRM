<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VacateNotice extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'tenant_info_id',
        'lease_id',
        'vacate_reason',
        'vacate_date'
    ];

    public function tenantInfo(){
        return $this->belongsTo(TenantInfo::class,'tenant_info_id');
    }
    public function leaseInfo(){
        return $this->belongsTo(Lease::class,'lease_id');
    }
}



