<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foro extends Model
{
    use HasFactory;
    protected $table = 'foro';

    public function comentarios(){
        return $this->BelongsToMany(respuestasforo::class, );
    }
}
