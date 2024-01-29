<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partido;
use App\Models\Equipo;

class PartidoController extends Controller
{
    public function create()
    {
        $equipos = Equipo::all(); // Obtener todos los equipos
        return view('partidos.create', compact('equipos')); // Pasar los equipos a la vista
    }

    public function store(Request $request)
    {
        // Validar formulario
        $request->validate([
            'fecha' => 'required|date',
            'resultado_local' => 'nullable|integer',
            'resultado_visitante' => 'nullable|integer',
            'equipo_local_id' => 'required|exists:equipos,id',
            'equipo_visitante_id' => 'required|exists:equipos,id',
        ]);

        // Crear partido
        $partido = new Partido([
            'fecha' => $request->input('fecha'),
            'resultado_local' => $request->input('resultado_local'),
            'resultado_visitante' => $request->input('resultado_visitante'),
            'equipo_local_id' => $request->input('equipo_local_id'),
            'equipo_visitante_id' => $request->input('equipo_visitante_id'),
        ]);

        $partido->save();

        // Redireccionar a la vista de índice de partidos
        return redirect()->route('partidos.index')->with('success', 'Partido creado exitosamente.');
    }
    //funcion para el index y ver partidos
    public function index()
    {
        // Obtener todos los partidos
        $partidos = Partido::all();

        // Retornar vista de índice de partidos con los datos
        return view('partidos.index', ['partidos' => $partidos]);
    }

    //funciones para eliminar-formulario
    public function mostrarFormularioEliminar()
{
    $partidos = Partido::all();
    return view('partidos.eliminar-formulario', compact('partidos'));
}

public function eliminar(Request $request)
{
    $partido = Partido::findOrFail($request->input('partido'));
    $partido->delete();
    
    return redirect()->route('partidos.index')->with('success', 'Partido eliminado exitosamente.');
}

}
