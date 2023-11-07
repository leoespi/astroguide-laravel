<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foro extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table = 'foros';

    public function comentarios(){
        return $this->BelongsToMany(respuestasforo::class, );
    }
}
