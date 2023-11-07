<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foro extends Model
{
    use HasFactory;
    protected $table = 'foro';

    public function users(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function comentarios(){
        return $this->BelongsToMany(respuestasforo::class, );
    }
}
