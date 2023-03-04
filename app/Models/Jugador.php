<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre'.
        'pais',
        'id_equipo',
    ];

    public function equipo()
    {
        return $this->hasOne(Equipo::class,'id','id_equipo');
    }
}
