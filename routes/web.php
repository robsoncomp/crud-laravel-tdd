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

//  Route::get('/alunos', 'AlunoController@index');
// Route::post('/alunos/create','AlunoController@store');
// Route::put('/alunos/{aluno}','AlunoController@update');
// Route::delete('/alunos.delete/{aluno}','AlunoController@destroy');
// Route::post('/alunos.destroy/{aluno}','AlunoController@destroy');