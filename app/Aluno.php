<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = [
           'cpf',
           'rg',
           'sexo', 
           'data_nascimento',
           'nome',
           'telefone'
    ];
}
