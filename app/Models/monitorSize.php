<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class monitorSize extends Model
{
    use HasFactory;


    protected $fillable=[
        'statu_id',
        'cantidad',
        'unidad',
        'description'
    ];

    //protected $table = "monitor_sizes";

    public function statu(){
        return $this->belongsTo(statu::class);
    }
}
