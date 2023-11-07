<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecciones extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'lecciones';

    protected $fillable = [
        "Nombre_de_la_leccion",
        "Lecciones_Diarias_realizadas",
        "Lecciones_Totales_realizadas",
        "Tipo_de_leccion",
        "user_id"


    ];
}
