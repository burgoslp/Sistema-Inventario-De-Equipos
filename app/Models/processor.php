<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class processor extends Model
{
    use HasFactory;

    protected $fillable=[
        'brand_id',
        'computer_id',
        'serial',
        'name',
        'observation',
    ];

    protected $table="processors";

    public function brand(){
        return $this->belongsTo(brand::class);
    }
    
    public function computer(){
        return $this->belongsTo(computer::class);
    }
}
