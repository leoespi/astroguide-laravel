<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logros extends Model
{
    use HasFactory;
    protected $fillable = ['Nombre del logro', 'rareza', 'user_id'];
    public $timestamps = false;

    public function users(){
        return $this->belongsToMany(User::class, 'user_id', 'id');
    }
}
