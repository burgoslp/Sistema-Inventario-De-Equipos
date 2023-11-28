<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class monitor extends Model
{   
    use HasFactory;
    
    protected $fillable=[
        'statu_id',
        'brand_id',
        'connector_id',
        'monitor_resolution_id',
        'monitor_frame_id',
        'monitor_size_id',
        'observation',
        'serial',
        'image',
        'qrcode'
    ];

    public function statu(){
        return $this->belongsTo(statu::class);
    }

    public function connector(){
        return $this->belongsTo(connector::class);
    }

    public function brand(){
        return $this->belongsTo(brand::class);
    }

    public function size(){
        return $this->belongsTo(monitorSize::class,'monitor_size_id');
    }

    public function frame(){
        return $this->belongsTo(monitorFrame::class,'monitor_frame_id');
    }

    public function resolution(){
        return $this->belongsTo(monitorResolution::class,'monitor_resolution_id');
    }
    
    public function equipment(){
        return $this->hasOne(equipment::class);
    }
}
