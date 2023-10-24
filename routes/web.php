<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
Route::get('/cursos', 'CursoController@index')->name('cursos.index');
Route::get('/cursos/create', 'CursoController@create')->name('cursos.create');
Route::post('/cursos', 'CursoController@store')->name('cursos.store');
Route::get('/cursos/{curso}/edit', 'CursoController@edit')->name('cursos.edit');
Route::put('/cursos/{curso}', 'CursoController@update')->name('cursos.update');
Route::delete('/cursos/{curso}', 'CursoController@destroy')->name('cursos.destroy');
*/



//Route::get('/cursos', [CursoController::class, 'index']);
Route::delete('/cursos/{curso}', 'CursoController@eliminar')->name('cursos.eliminar');

Route::resource('cursos', CursoController::class);