<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $fillable = [
        "nombres",
        "apellidos",
        "direccion",
        "correo_electronico",
        "fecha_nacimiento",
        "profesion_id"
    ];
    function profesion()
    {
        return $this->belongsTo(Profesion::class,'profesion_id' , 'id');
    }
}
