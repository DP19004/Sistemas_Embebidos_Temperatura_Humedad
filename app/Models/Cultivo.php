<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cultivo extends Model
{
    //Relacion uno a muchos inversa
    use HasFactory;
    public function Zonas(){
        return $this->belongsTo(Zona::class,'id');

    }
}
