<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = ['quiz'];
    public $timestamp = false;

    public function preguntas(){
        return $this->BelongsToMany(Pregunta::class, );
    }


}
