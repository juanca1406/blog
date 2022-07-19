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

Route::get('/', Homecontroller::class);

route::controller(cursocontroller::class)->group(function(){
    Route::get('curso', 'index')->name('cursos.index');    
    Route::get('curso/create', 'create')->name('cursos.create');
    Route::get('curso/{curso}', 'show')->name('cursos.show');
});



