<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keyboardModel extends Model
{
    use HasFactory;

    protected $fillable=[
        'statu_id',
        'name',
        'description'
    ];

    //protected $table = "keyboard_models";

    public function statu(){
        return $this->belongsTo(statu::class);
    }
}
