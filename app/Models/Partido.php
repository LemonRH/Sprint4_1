<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    use HasFactory;

    protected $table = 'partidos'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'fecha',
        'resultado_local',
        'resultado_visitante',
        'equipo_local_id',
        'equipo_visitante_id',
    ];

    // Definir relaciones con el modelo Equipo
    public function equipoLocal()
    {
        return $this->belongsTo(Equipo::class, 'equipo_local_id');
    }

    public function equipoVisitante()
    {
        return $this->belongsTo(Equipo::class, 'equipo_visitante_id');
    }
}
