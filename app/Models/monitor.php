<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class monitor extends Model
{   
    protected $fillable=[
        'statu_id',
        'brand_id',
        'conector_id',
        'monitor_resolution_id',
        'monitor_frame_id',
        'monitor_size_id',
        'observation',
        'serial',
        'image',
        'qrcode'
    ];

    use HasFactory;
}
