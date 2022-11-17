<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;
    //relacion uno a muchos (Registro tiene muchos kits)
    public function Kits(){
        return $this->hasMany('App\Models\KitSensores');
    }

    //relacion uno a uno (un Registro tiene una Humedad)
    public function Humedad(){
        return $this->hasOne('App\Models\Humedad');
    }

    //relacion uno a uno (un Registro tiene una Temperatura)
    public function Temperatura(){
        return $this->hasOne('App\Models\Temperatura');
    }
}
