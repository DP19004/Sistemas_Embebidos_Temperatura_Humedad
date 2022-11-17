<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class KitSensores extends Model
{
    use HasFactory;
    //relacion uno a uno
    public function Zonas(){
        return $this->hasOne(Zona::class,'id');

    }
    
    //relacion uno a muchos (inversa) 
    public function Registro(){
        return $this->belongsTo('App\Models\Registro');
    }
}
