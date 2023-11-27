<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class connector extends Model
{
    use HasFactory;

    protected $fillable=[
        'statu_id',
        'name',
        'description'
    ];

    public function statu(){
        return $this->belongsTo(statu::class);
    }

    public function monitors(){
        return $this->hasMany(monitor::class);
    }

    public function keyboards(){
        return $this->hasMany(keyboard::class);
    }

    public function mice(){
        return $this->hasMany(mouse::class);
    }
    
}
