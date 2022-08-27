<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use App\Mail\Email;
use Illuminate\Support\Facades\Mail;
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
/* Route::controller(CursoController::class)->group( function(){
    // Los name no pueden repetirse
    Route::get('/cursos', 'index')->name('cursos.index');
    Route::get('/cursos/create', 'create')->name('cursos.create');
    Route::post('/cursos/create', 'store')->name('cursos.store');          
    Route::get('/cursos/{id}', 'show')->name('cursos.show');
    Route::get('/cursos/{curso}/edit', 'edit')->name('cursos.edit');    // {curso} fue puesto en lugar de {id} por el metodo edit
    Route::put('/cursos/{curso}', 'update')->name('cursos.update');
    Route::delete('/cursos/{curso}', 'destroy')->name('cursos.delete');
}); */

// Una opcion más limpia para no agrupar el código y hacerlo todo en 1 linea
Route::resource('cursos', CursoController::class );
    # Por defecto las URLs que tengan dinamismo obtendran como resultado el nombre "edit, create, etc"
    # Si quieres evitar esto, vé a app/Providers/AppServicesProvider y edita el metodo 'boot' con el metodo Route::resourceVerbs([ arreglo asociativo ])

// Dado el caso de querer cambiar por completo el nombre de las rutas, tenemos estos metodos
/* Route::resource('asignaturas', CursoController::class )->parameters(['asignaturas' => 'curso'])->names('cursos'); */
    # ->names('nombreOriginal') : El argumento que recibe indicara a los controladores de su nombre
    # ->parameters(['nuevaUrl' => 'nombreVariable']) : Como argumento recibe un array asoc y están para indicar el nombre de las variables que reciben las urls dinamicas

Route::get('/', HomeController::class)->name('home');

Route::view('/nosotros', 'nosotros')->name('nosotros');

Route::get('/contacto', function(){

    $email = new Email;

    Mail::to('email_a_enviar@remitente.com')->send($email);

    return 'Mensaje enviado OK';

});






// Tipos de variables para las urls. Estructura.
/* Route::get('/cursos/{curso}/{categoria}', function ($curso, $categoria = null) {
    if($categoria){
        return "Aqui podras ver el curso $curso de la categoría $categoria";
    }else{
        return "Aqui podras ver el curso $curso";
    }
}); */