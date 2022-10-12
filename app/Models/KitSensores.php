<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class KitSensores extends Model
{
    use HasFactory;
    public function Zonas(){
        return $this->belongsTo(Zona::class,'id');

    }
}
