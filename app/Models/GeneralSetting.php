<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'email',
        'p_number',
        // 'currancy',
        // 'color_theme',
        // 'language',
        'logo',
        'phy_address',
        'postal_address',
        'website_url',
        'zip_code',
        // 'date_format',
        // 'thousand_seprator',
        // 'decimal_seprator',
        // 'amount_decimal',
    ];
}
