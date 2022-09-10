<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', HomeController::class);

// CURSO RUTAS

Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');

Route::get('cursos/{id}', [CursoController::class, 'show'])->name('cursos.show')
->where('id','[0-9]+');

Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');



/*
// GRUPO DE RUTAS Curso
Route::controller(CursoController::class)-> group(function(){
    Route::get('cursos', 'index');

    Route::get('cursos/create', 'create');
    
    Route::get('cursos/{curso}', 'show');
}); */


/********* 
// el "?" significa que puede ser opcional

Route::get('cursos/{curso}/{categoria?}', function($curso, $categoria = null){

    if ($categoria) {
        return "Bienvenido al curso de $curso de la categoria $categoria";
    } else {
        return "Bienvenido al curso de $curso";
    }
    
 
});***************** */