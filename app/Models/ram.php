<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ram extends Model
{
    use HasFactory;

    protected $fillable=[
        'brand_id',
        'computer_id',
        'notebook_id',
        'serial',
        'capacidad',
        'unidad',
        'frecuencia',
        'modelo',
        'tipo_memoria',
    ];

    protected $table="rams";

    public function brand(){
        return $this->belongsTo(brand::class);
    }

    public function computers(){
        return $this->belongsTo(computer::class);
    }
}
