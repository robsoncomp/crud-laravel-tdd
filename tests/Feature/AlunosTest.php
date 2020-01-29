<?php
 
namespace Tests\Feature;
 
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
 
class TasksTest extends TestCase
{
    // use DatabaseMigrations;

    public function testGetAlunos()
    {       
        $aluno = factory('App\Aluno')->create(); 
       
        $response = $this->get('alunos'); 
 
        $response->assertSee($aluno->nome);
    }

    public function testCreateAluno()
    {
        $aluno = factory('App\Aluno')->create();    
        
        $this->post('alunos.store',$aluno->toArray()); 
    
        $this->assertEquals(1,Aluno::all()->count());
    }


    public function testUpdateAluno()
    {
        $aluno = factory('App\Aluno')->create();
    
        $aluno->nome = "Nome Atualizado";
    
        $this->put('aluno.update'.$aluno->id, $aluno->toArray()); 
        
        $this->assertDatabaseHas('alunos',['id'=> $aluno->id , 'nome' => 'Nome Atualizado']);
    }


    public function testDeleteAluno()
    {
        $aluno = factory('App\Aluno')->create();
    
        $this->post('alunos.delete'.$aluno->id);     
    
        $this->assertDatabaseMissing('alunos',['id'=> $aluno->id]);
    }
     
}