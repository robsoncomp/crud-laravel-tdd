<?php

namespace App\Http\Controllers;

use App\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::latest()->paginate(5);
  
        return view('alunos.index',compact('alunos'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('alunos.create');
    }
  
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:100',
            'cpf' => 'required|unique:alunos|max:11|cpf',
        ]);
  
        Aluno::create($request->all());
   
        return redirect()->route('alunos.index')
                        ->with('success','Aluno criado com successo.');
    }
    
    public function show(Aluno $aluno)
    {
        return view('alunos.show',compact('aluno'));
    }
    
    public function edit(Aluno $aluno)
    {
        return view('alunos.edit',compact('aluno'));
    }    
    public function update(Request $request, Aluno $aluno)
    {
        $request->validate([
            'nome' => 'required|max:100',
            'cpf' => 'required|max:11|cpf',
        ]);
  
        $aluno->update($request->all());
  
        return redirect()->route('alunos.index')
                        ->with('success','Aluno atualizado com sucesso');
    }
    
    public function destroy(Aluno $aluno)
    {
        $aluno->delete();
  
        return redirect()->route('alunos.index')
                        ->with('success','Aluno excluido com sucesso.');
    }
}
