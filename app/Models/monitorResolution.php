<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class monitorResolution extends Model
{
    use HasFactory;

    protected $fillable=[
        'statu_id',
        'name',
        'description'
    ];

    //protected $table = "monitor_resolutions";

    public function statu(){
        return $this->belongsTo(statu::class);
    }
}
