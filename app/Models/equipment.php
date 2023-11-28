<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipment extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'statu_id',
        'computer_id',
        'notebook_id',
        'monitor_id',
        'keyboard_id',
        'mouse_id',
        'cod_oficina'
    ];

    public function statu(){
        return $this->belongsTo(statu::class);
    }
    
    public function computer(){
        return $this->belongsTo(computer::class);
    }
    public function notebook(){
        return $this->belongsTo(notebook::class);
    }

    public function monitor(){
        return $this->belongsTo(monitor::class);
    }

    public function keyboard(){
        return $this->belongsTo(keyboard::class);
    }

    public function mouse(){
        return $this->belongsTo(mouse::class,'mouse_id');
    }

}
