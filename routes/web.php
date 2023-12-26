<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

//CREATE
//Route::post('/', [PagesController::class, 'fnRegistrar']) -> name('Estudiante.xRegistrar');
//READ
Route::get('/listaCurso', [PagesController::class, 'fnListaCurso']) -> name('xListaCurso');
//Route::get('/detalle/{id}', [PagesController::class, 'fnEstDetalle']) -> name('Estudiante.xDetalle');
//UPDATE
//Route::get('/actualizar/{id}', [PagesController::class, 'fnEstActualizar']) -> name('Estudiante.xActualizar');  //Paso 1
//Route::put('/actualizar/{id}', [PagesController::class, 'fnUpdate']) -> name('Estudiante.xUpdate');             //Paso 2
//DELETE
//Route::delete('/eliminar/{id}', [PagesController::class, 'fnEliminar']) -> name('Estudiante.xEliminar');




//CREATE
Route::post('/registrarSeguimiento', [PagesController::class, 'fnRegistrarSeguimiento']) -> name('Estudiante.xRegistrarSeguimiento');
//READ
Route::get('/listaSeguimiento', [PagesController::class, 'fnListaSeguimiento']) -> name('xListaSeguimiento');
Route::get('/detalleSeg/{id}', [PagesController::class, 'fnEstDetalleSeg']) -> name('Estudiante.xDetalleSeg');
//UPDATE
Route::get('/actualizarSeg/{id}', [PagesController::class, 'fnEstActualizarSeg']) -> name('Estudiante.xActualizarSeg');  //Paso 1
Route::put('/actualizarSeg/{id}', [PagesController::class, 'fnUpdateSeg']) -> name('Estudiante.xUpdateSeg');             //Paso 2
//DELETE
Route::delete('/eliminarSeg/{id}', [PagesController::class, 'fnEliminarSeg']) -> name('Estudiante.xEliminarSeg');












//PORTADA
Route::get('/', [PagesController::class, 'fnIndex']) -> name('xInicio');
//CREATE
Route::post('/', [PagesController::class, 'fnRegistrar']) -> name('Estudiante.xRegistrar');
//READ
Route::get('/lista', [PagesController::class, 'fnLista']) -> name('xLista');
Route::get('/detalle/{id}', [PagesController::class, 'fnEstDetalle']) -> name('Estudiante.xDetalle');
//UPDATE
Route::get('/actualizar/{id}', [PagesController::class, 'fnEstActualizar']) -> name('Estudiante.xActualizar');  //Paso 1
Route::put('/actualizar/{id}', [PagesController::class, 'fnUpdate']) -> name('Estudiante.xUpdate');             //Paso 2
//DELETE
Route::delete('/eliminar/{id}', [PagesController::class, 'fnEliminar']) -> name('Estudiante.xEliminar');

//Ejemplo de validar en RUTA
Route::get('/galeria/{numero?}', [PagesController::class, 'fnGaleria']) -> where('numero', '[0-9]+') -> name('xGaleria');





 
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
