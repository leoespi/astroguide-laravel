<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuestas extends Model
{
    use HasFactory;
    protected $table = 'respuestas';

    public function comentarios(){
        return $this->BelongsToMany(foro::class, );
    }
}
