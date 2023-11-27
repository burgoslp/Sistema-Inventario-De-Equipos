<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class disk extends Model
{
    use HasFactory;

    protected $fillable=[
        'brand_id',
        'computer_id',
        'notebook_id',
        'serial',
        'capacidad',
        'unidad',
        'modelo',
        'tipo_memoria',
    ];

    protected $table="disks";

    public function brand(){
        return $this->belongsTo(brand::class);
    }

    public function computer(){
        return $this->belongsTo(computer::class);
    }
    public function notebook(){
        return $this->belongsTo(notebook::class);
    }
}
