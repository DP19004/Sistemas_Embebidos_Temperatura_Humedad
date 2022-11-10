<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Zona extends Model
{
    use HasFactory;

    public function kitSensores(){

        return $this->hasOne(kitSensores::class,'id_Kit');
        
    }
    public function alarmas(){

        return $this->hasMany(Alarma::class,'id_Alarma', 'id');
        
    }
    
    public function cultivos(){

        return $this->hasMany(cultivo::class,'id_Cultivo');
        
    }
    
}
