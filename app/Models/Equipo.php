<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $table = 'equipos'; // Indica la tabla asociada al modelo

    protected $fillable = ['nombre']; // Especifica los campos que pueden ser asignados en masa

    // Relación con partidos como equipo local
    public function partidosLocal()
    {
        return $this->hasMany(Partido::class, 'equipo_local_id');
    }

    // Relación con partidos como equipo visitante
    public function partidosVisitante()
    {
        return $this->hasMany(Partido::class, 'equipo_visitante_id');
    }
}
