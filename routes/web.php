<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

// Agrupar codigo y tenerlo más organizado
Route::controller(CursoController::class)->group( function(){
    // Los name no pueden repetirse
    Route::get('/cursos', 'index')->name('cursos.index');
    Route::get('/cursos/create', 'create')->name('cursos.create');
    Route::post('/cursos/create', 'store')->name('cursos.store');          
    Route::get('/cursos/{id}', 'show')->name('cursos.show');
    Route::get('/cursos/{curso}/edit', 'edit')->name('cursos.edit');    // {curso} fue puesto en lugar de {id} por el metodo edit
    Route::put('/cursos/{curso}', 'update')->name('cursos.update');
});

// Tipos de variables para las urls. Estructura.
/* Route::get('/cursos/{curso}/{categoria}', function ($curso, $categoria = null) {
    if($categoria){
        return "Aqui podras ver el curso $curso de la categoría $categoria";
    }else{
        return "Aqui podras ver el curso $curso";
    }
}); */