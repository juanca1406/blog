<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\cursocontroller;   
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
//envia informacion
Route::get('/', Homecontroller::class);

    Route::get('curso', [cursocontroller::class, 'index'])->name('cursos.index');    

    Route::get('curso/create', [cursocontroller::class, 'create'])->name('cursos.create');

    Route::post('curso', [cursocontroller::class, 'store'])->name('cursos.store');

    Route::get('curso/{curso}', [cursocontroller::class, 'show'])->name('cursos.show');

    Route::get('curso/{curso}/edit', [cursocontroller::class, 'edit'])->name('cursos.edit');

    Route::put('curso/{curso}', [cursocontroller::class, 'update'])->name('cursos.update'); 



