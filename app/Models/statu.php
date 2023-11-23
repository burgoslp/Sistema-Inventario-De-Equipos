<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class statu extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'descripcion'
    ];

    public function brands(){

        return $this->hasMany(brand::class);
    }

    public function connectors(){

        return $this->hasMany(connector::class);
    }

    public function connections(){

        return $this->hasMany(connection::class);
    }

    public function monitorFrames(){

        return $this->hasMany(monitorFrame::class);
    }

    public function monitorResolutions(){

        return $this->hasMany(monitorResolution::class);
    }

    public function monitorSizes(){

        return $this->hasMany(monitorSize::class);
    }

    public function keyboardModels(){

        return $this->hasMany(keyboardModel::class);
    }

    public function keyboardSizes(){

        return $this->hasMany(keyboardSize::class);
    }

    public function users(){

        return $this->hasMany(User::class);
    }

    public function monitors(){

        return $this->hasMany(monitor::class);
    }
}
