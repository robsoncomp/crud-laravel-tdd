<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('alunos','AlunoController');

Route::group(['prefix' => 'alunos'], function() {
    Route::get('/', 'AlunoController@index')->name('alunos');
    Route::get('/{aluno}', 'AlunoController@show')->name('alunos.show');
    Route::post('/', 'AlunoController@store')->name('alunos.store');
    Route::put('/{aluno}', 'AlunoController@update')->name('alunos.update');
    Route::delete('/{post}', 'AlunoController@delete')->name('alunos.delete');
});
