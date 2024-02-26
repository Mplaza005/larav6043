<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('formulario');
});


Route::get('/formulario',[CursoController::class,'create']);
Route::post('/formulario',[CursoController::class,'store'])->name('curso.store');


//Route::get('/curso/{dato1}/{dato2}',[CursoController::class,'func1'])->name('curso.show');
