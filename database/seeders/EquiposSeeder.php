<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Equipo;

class EquiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crear los equipos especificados
        Equipo::create(['nombre' => 'Real Madrid']);
        Equipo::create(['nombre' => 'Barcelona']);
        Equipo::create(['nombre' => 'Betis']);
        Equipo::create(['nombre' => 'Sevilla']);
        Equipo::create(['nombre' => 'Valencia']);
    }
}
