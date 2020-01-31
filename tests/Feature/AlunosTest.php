<?php

namespace Tests\Feature;

use Tests\TestCase;

class TasksTest extends TestCase
{
    // use DatabaseMigrations;

    public function testGetAlunos()
    {
        $aluno = factory('App\Aluno')->create();

        $response = $this->get('alunos');

        $response->assertSee($aluno->nome);
    }

    // public function testCreateAluno()
    // {
    //     $aluno = factory('App\Aluno')->make();
        
    //     $this->post('/alunos/create', $aluno->toArray());

    //     $this->assertEquals(1, Aluno::all()->count());
    // }

    public function testUpdateAluno()
    {
        $aluno = factory('App\Aluno')->create();

        $aluno->nome = "Nome Atualizado";

        $this->put('/alunos/' . $aluno->id, $aluno->toArray());

        $this->assertDatabaseHas('alunos', ['id' => $aluno->id, 'nome' => 'Nome Atualizado']);
    }

    public function testDeleteAluno()
    {
        $aluno = factory('App\Aluno')->create();

        $this->delete('/alunos/' . $aluno->id);

        $this->assertDatabaseMissing('alunos', ['id' => $aluno->id]);
    }

}
