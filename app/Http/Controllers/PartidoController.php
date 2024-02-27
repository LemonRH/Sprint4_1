<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partido;
use App\Models\Equipo;

class PartidoController extends Controller
{
    // Obtener todos los equipos
    public function create(){
        $equipos = Equipo::all(); // Obtener todos los equipos
        return view('partidos.create', compact('equipos')); // Pasar los equipos a la vista
    }

    // Validar formulario y crear partido
    public function store(Request $request){
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

    // Obtener todos los partidos
    public function index(){
        // Obtener todos los partidos
        $partidos = Partido::all();

        // Retornar vista de índice de partidos con los datos
        return view('partidos.index', ['partidos' => $partidos]);
    }

    // Mostrar formulario de eliminación de partido
    public function mostrarFormularioEliminar(){
        $partidos = Partido::all();
        return view('partidos.eliminar-formulario', compact('partidos'));
    }

    // Eliminar partido
    public function eliminar(Request $request){
        $partido = Partido::findOrFail($request->input('partido_id')); // Corregir aquí
        $partido->delete();
        
        return redirect()->route('partidos.index')->with('success', 'Partido eliminado exitosamente.');
    }
    

    // Mostrar formulario de edición de partido
    public function mostrarFormularioEditar(){
        $partidos = Partido::all();
        $equipos = Equipo::all();
        return view('partidos.editar', compact('partidos', 'equipos'));
    }

    // Actualizar partido
// Actualizar partido
public function update(Request $request){
    $request->validate([
        'fecha' => 'required|date',
        'resultado_local' => 'nullable|integer',
        'resultado_visitante' => 'nullable|integer',
        'equipo_local' => 'required|string', // Cambiado a 'string'
        'equipo_visitante' => 'required|string', // Cambiado a 'string'
    ]);

    $partido = Partido::findOrFail($request->input('partido_id'));

    // Buscar el ID del equipo local por su nombre
    $equipoLocal = Equipo::where('nombre', $request->input('equipo_local'))->first();
    // Buscar el ID del equipo visitante por su nombre
    $equipoVisitante = Equipo::where('nombre', $request->input('equipo_visitante'))->first();

    $partido->update([
        'fecha' => $request->input('fecha'),
        'resultado_local' => $request->input('resultado_local'),
        'resultado_visitante' => $request->input('resultado_visitante'),
        'equipo_local_id' => $equipoLocal->id, // Asignar el ID del equipo local encontrado
        'equipo_visitante_id' => $equipoVisitante->id, // Asignar el ID del equipo visitante encontrado
    ]);

    return redirect()->route('partidos.index')->with('success', 'Partido actualizado exitosamente.');
}

}