<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class computer extends Model
{
    use HasFactory;

    protected $fillable=[
        'statu_id',
        'brand_id',
        'cant_slot_ram',
        'cant_slot_processor',
        'observation',
        'serial',
        'image',
        'qrcode'
    ];

    public function statu(){
        return $this->belongsTo(statu::class);
    }

    public function brand(){
        return $this->belongsTo(brand::class);
    }

    public function rams(){
        return $this->hasMany(ram::class);
    }

    public function disks(){
        return $this->hasMany(disk::class);
    }

    public function processors(){
        return $this->hasMany(processor::class);
    }

    public function equipment(){
        return $this->hasOne(equipment::class);
    }
}
