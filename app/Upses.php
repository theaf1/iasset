<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upses extends Model
{
    protected $fillable = [
        'id',
        'sapid',
        'pid',
        'location_id',
        'is_mobile',
        'response_person',
        'section',
        'tel_no',
        'owner',
        'asset_status',
        'asset_use_status',
        'brand',
        'model',
        'serial_no',
        'form_factor',
        'topology',
        'capacity',
        'is_modular',
        'battery_type',
        'has_external_battery',
        'device_management_address',
        'issues',
        'remarks',
    ];
    
}
