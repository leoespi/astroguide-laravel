<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logros extends Model
{
    use HasFactory;
    protected $fillable = ['Nombre del logro', 'rareza'];
    public $timestamps = false;

    public function user(){
        return $this->belongsToMany(User::class, 'user_id', 'id');
    }
}
