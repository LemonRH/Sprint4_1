<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Partido;
use App\Models\Equipo;
use Illuminate\Support\Carbon;

class PartidosSeeder extends Seeder
{
    public function run()
    {
        $equipos = Equipo::all();

        foreach ($equipos as $local) {
            foreach ($equipos as $visitante) {
                if ($local->id != $visitante->id) {
                    $resultadoLocal = rand(0, 5); // Resultado local aleatorio entre 0 y 5
                    $resultadoVisitante = rand(0, 5); // Resultado visitante aleatorio entre 0 y 5

                    Partido::factory()->create([
                        'equipo_local_id' => $local->id,
                        'equipo_visitante_id' => $visitante->id,
                        'fecha' => Carbon::now()->addDays(rand(1, 30)), // Generar una fecha aleatoria entre 1 y 30 días desde hoy
                        'resultado_local' => $resultadoLocal,
                        'resultado_visitante' => $resultadoVisitante,
                    ]);
                }
            }
        }
    }
}