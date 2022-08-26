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
    Route::get('/cursos', 'index')->name('cursos.index');
    Route::get('/cursos/create', 'create')->name('cursos.create');
    Route::get('/cursos/{id}', 'show')->name('cursos.show');
});

// Tipos de variables para las urls. Estructura.
/* Route::get('/cursos/{curso}/{categoria}', function ($curso, $categoria = null) {
    if($categoria){
        return "Aqui podras ver el curso $curso de la categoría $categoria";
    }else{
        return "Aqui podras ver el curso $curso";
    }
}); */