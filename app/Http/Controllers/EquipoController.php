<?php
// app/Http/Controllers/EquipoController.php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller{
    public function index(){
        $equipos = Equipo::all();
        return view('equipos.index', ['equipos' => $equipos]);
    }

    public function create(){
        return view('equipos.create');
    }

    public function store(Request $request){
    
        // Validación de los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        // Crear un nuevo equipo en la base de datos
        $equipo = new Equipo([
            'nombre' => $request->input('nombre'),
        ]);

        $equipo->save();

        return redirect('/equipos')->with('success', 'Equipo creado exitosamente.');
    }
    //controladores para formulario ELIMINAR
    public function mostrarFormularioEliminar(){
        $equipos = Equipo::all();
        return view('equipos.formulario_eliminar', compact('equipos'));
    }
    public function eliminar(Request $request){
        $equipoId = $request->input('equipo_id');
    
        //verificar si existen partidos asociados al equipo
        $equipo = Equipo::findOrFail($equipoId);
        if ($equipo->partidosLocal()->exists() || $equipo->partidosVisitante()->exists()) {
            return redirect('/equipos')->with('error', 'No se puede eliminar el equipo porque tiene partidos asociados.');
        }
    
        //si no hay partidos asociados, eliminar equipo
        $equipo->delete();
    
        return redirect('/equipos')->with('success', 'Equipo eliminado exitosamente.');
    }
    //controladores para formulario EDITAR
    public function mostrarFormularioEditar(){
        $equipos = Equipo::all();
        return view('equipos.formulario_editar', compact('equipos'));
    }
    
    public function editar(Request $request){
        $equipoId = $request->input('equipo_id');
        $nuevoNombre = $request->input('nuevo_nombre');
    
        // Validación de los datos del formulario
        $request->validate([
            'equipo_id' => 'required|exists:equipos,id',
            'nuevo_nombre' => 'required|string|max:255',
        ]);
    
        $equipo = Equipo::findOrFail($equipoId);
        $equipo->nombre = $nuevoNombre;
        $equipo->save();
    
        return redirect('/equipos')->with('success', 'Nombre del equipo actualizado exitosamente.');
    }
}
?>