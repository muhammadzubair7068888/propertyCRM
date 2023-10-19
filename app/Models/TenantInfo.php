<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenantInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tenant_type',
        'kin_name',
        'kin_phone_number',
        'kin_relation',

        'kin_emergency_name',
        'kin_emergency_phone_number',
        'kin_emergency_emial',
        'kin_emergency_relation',

        'kin_emergency_postal_address',
        'kin_emergency_physical_address',
        'employment_status',

        'employment_position',
        'employment_contact_phone',
        'employment_contact_email',
        
        
        'employment_postal_address',
        'employment_physical_address',
        'business_name',
        'licence_name',
        'tax_id',
        'bussiness_address',
        'bussiness_industry',
        'bussiness_description',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
