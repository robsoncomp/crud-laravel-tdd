<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'alunos'], function() {
    Route::get('/', 'AlunoController@index')->name('alunos');
    Route::get('/{aluno}', 'AlunoController@show')->name('alunos.show');
    Route::post('/', 'AlunoController@store')->name('alunos.store');
    Route::put('/{aluno}', 'AlunoController@update')->name('alunos.update');
    Route::delete('/{post}', 'AlunoController@delete')->name('alunos.delete');
});