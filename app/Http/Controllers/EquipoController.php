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

    public function mostrarFormularioEliminar(){
        $equipos = Equipo::all();
        return view('equipos.formulario_eliminar', compact('equipos'));
    }
    public function eliminar(Request $request){
        $equipoId = $request->input('equipo_id');
        $equipo = Equipo::findOrFail($equipoId);
        $equipo->delete();

        return redirect('/equipos')->with('success', 'Equipo eliminado exitosamente.');
    }
}
?>