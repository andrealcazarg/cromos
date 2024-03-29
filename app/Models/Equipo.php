<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre'
    ];

    public function jugadores()
    {
        return $this->hasMany(Jugador::class,'id_equipo','id');
    }

}
