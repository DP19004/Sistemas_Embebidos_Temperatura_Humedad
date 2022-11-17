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
    
}
