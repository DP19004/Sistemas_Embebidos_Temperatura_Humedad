<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alarma extends Model
{
    use HasFactory;
    protected $fillable=['nombre', 'temperaturaMax', 'temperaturaMin','humedadMax','humedadMin','importancia','status','recomendacion'];
}
