<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notebook extends Model
{
    use HasFactory;

    protected $fillable=[
        'statu_id',
        'brand_id',
        'observation',
        'processor',
        'graphiccards',
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

    public function equipment(){
        return $this->hasOne(equipment::class);
    }
}
