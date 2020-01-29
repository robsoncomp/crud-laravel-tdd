<?php

use App\Aluno;
use Faker\Generator as Faker;

$factory->define(App\Aluno::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'rg' => $faker->numberBetween(1,9999999),
        'cpf' => '96669330200',
        'telefone' => $faker->phoneNumber,
        'data_nascimento' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
