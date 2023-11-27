<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mouse extends Model
{
    use HasFactory;

    protected $fillable=[
        'statu_id',
        'brand_id',
        'connector_id',
        'connection_id',
        'ergonomic',
        'observation',
        'serial',
        'image',
        'qrcode'
    ];

    
    public function statu(){
        return $this->belongsTo(statu::class);
    }

    public function connector(){
        return $this->belongsTo(connector::class);
    }

    public function connection(){
        return $this->belongsTo(connection::class);
    }

    public function brand(){
        return $this->belongsTo(brand::class);
    }

}
