<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keyboard extends Model
{
    use HasFactory;

    protected $fillable=[
        'statu_id',
        'brand_id',
        'connector_id',
        'keyboard_model_id',
        'keyboard_size_id',
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

    public function model(){
        return $this->belongsTo(keyboardModel::class,'keyboard_model_id'); 
    }

    public function size(){
        return $this->belongsTo(keyboardSize::class,'keyboard_size_id');  
    }
}
