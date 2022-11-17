<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temperatura extends Model
{
    use HasFactory;
    //protected $fillable = ['valor'];

    //relacion uno a uno (Temperatura se encuentra en un Registro)
    public function Registro(){
        return $this->hasOne('App\Models\Registro');
    }
}
