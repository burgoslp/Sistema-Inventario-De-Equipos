<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brand extends Model
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

    public function rams(){
        return $this->hasMany(ram::class);
    }

    public function disks(){
        return $this->hasMany(disk::class);
    }

    public function processors(){
        return $this->hasMany(disk::class);
    }

    public function computers(){
        return $this->hasMany(computer::class);
    }

    public function notebooks(){
        return $this->hasMany(notebook::class);
    }
}
