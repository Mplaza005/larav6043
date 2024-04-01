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

// Route::get('/', function () {
//     return view('formulario');
// });


// Route::get('/formulario',[CursoController::class,'create']);
// Route::post('/formulario',[CursoController::class,'store'])->name('curso.store');



// Route::get('/frmfactorial',[FactorialController::class,'create']);
// Route::post('/resultado',[FactorialController::class,'store'])->name('facto.store');

// Route::get('/formularioProducto',[ProductController::class,'create']);
// Route::post('/storeProducto',[ProductController::class,'store'])->name('product.store');

Route::get('cursos/create',[CursoController::class,'create']);
Route::post('cursos/store', [CursoController::class,'store'])->name('cursos.store');
Route::get('cursos/listar',[CursoController::class,'index']);