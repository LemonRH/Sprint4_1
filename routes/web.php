<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipoController;//permite usar rutas equipo
use App\Http\Controllers\PartidoController;//'' partido


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// routes/web.php

//creacion de equipos
Route::get('/equipos/create', [EquipoController::class, 'create'])->name('equipos.create');
Route::post('/equipos', [EquipoController::class, 'store'])->name('equipos.store');
Route::get('/equipos', [EquipoController::class, 'index'])->name('equipos.index');
//eliminar equipos
Route::match(['get', 'delete'], '/equipos/eliminar-formulario', [EquipoController::class, 'mostrarFormularioEliminar'])->name('equipos.eliminar-formulario');
Route::post('/equipos/eliminar-formulario', [EquipoController::class, 'eliminar'])->name('equipos.eliminar');
Route::delete('/equipos/eliminar-formulario', [EquipoController::class, 'eliminar'])->name('equipos.eliminar');
//editar equipos
Route::get('/equipos/editar-formulario', [EquipoController::class, 'mostrarFormularioEditar'])->name('equipos.editar-formulario');
Route::post('/equipos/editar', [EquipoController::class, 'editar'])->name('equipos.editar');

//creacion de partidos
Route::get('/partidos/create', [PartidoController::class, 'create'])->name('partidos.create');
Route::get('/partidos', [PartidoController::class, 'index'])->name('partidos.index');
Route::post('/partidos', [PartidoController::class, 'store'])->name('partidos.store');
//eliminación de partidos
Route::match(['get', 'delete'], '/partidos/eliminar-formulario', [PartidoController::class, 'mostrarFormularioEliminar'])->name('partidos.eliminar-formulario');
Route::delete('/partidos/eliminar-formulario', [PartidoController::class, 'eliminar'])->name('partidos.eliminar');
//editar partidos
Route::get('/partidos/edit', [PartidoController::class, 'mostrarFormularioEditar'])->name('partidos.edit');
Route::put('/partidos/update', [PartidoController::class, 'update'])->name('partidos.update');
