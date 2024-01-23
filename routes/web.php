<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipoController;

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
