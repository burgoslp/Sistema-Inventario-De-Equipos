<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class monitorFrame extends Model
{
    use HasFactory;

    protected $fillable=[
        'statu_id',
        'cantidad',
        'unidad',
        'description'
    ];

    //protected $table = "monitor_frames";

    public function statu(){
        return $this->belongsTo(statu::class);
    }

    public function monitors(){
        return $this->hasMany(monitor::class);
    }
}
