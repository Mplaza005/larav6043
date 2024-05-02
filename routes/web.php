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


////////////////////         CURSO          ///////////////////////

Route::get('cursos/listar',[CursoController::class,'index'])->name('curso.index');
Route::get('cursos/create',[CursoController::class,'create']);
Route::post('cursos/store', [CursoController::class,'store'])->name('cursos.store');
Route::get('curso/{curso}',[CursoController::class,'show'])->name('curso.show');
Route::put('curso/{curso}',[CursoController::class,'update'])->name('curso.update');
Route::delete('curso/{curso}',[CursoController::class,'destroy'])->name('curso.destroy');
Route::get('curso/{curso}/editar',[CursoController::class,'edit'])->name('curso.edit');

////////////////////         PROFILE          ///////////////////////

Route::get('profile/create',[ProfileController::class,'create']);
Route::post('profile/store', [ProfileController::class,'store'])->name('profile.store');