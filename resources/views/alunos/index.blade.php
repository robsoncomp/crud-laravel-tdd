@extends('alunos.layout') 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">            
            <div class="pull-right" style="padding:20px;">
                <a class="btn btn-success" href="{{ route('alunos.create') }}"> Criar Novo Aluno</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="col-lg-12 margin-tb"> 
    <fieldset>
        <div class="panel panel-default">
            <div class="panel-heading"><strong>Alunos Cadastrados</strong></div>           
                <div class="panel-body " >
                    <table class="table table-bordered table-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th>Nome</th>
                                <th>CPF</th>
                                <th>RG</th>
                                <th>Data Nascimento</th>            
                                <th width="280px">Ações</th>
                            </tr>
                        </thead>    
                        @foreach ($alunos as $aluno)
                        <tr>
                        
                            <td>{{ $aluno->nome }}</td>
                            <td>{{ $aluno->cpf }}</td>
                            <td>{{ $aluno->rg }}</td>
                            <td>{{ \Carbon\Carbon::parse($aluno->data_nascimento)->format('d/m/Y')}} </td>
                            <td>
                                <form action="{{ route('alunos.destroy',$aluno->id) }}" method="POST">   
                                    <a class="btn btn-info" href="{{ route('alunos.show',$aluno->id) }}">Visualizar</a>    
                                    <a class="btn btn-primary" href="{{ route('alunos.edit',$aluno->id) }}">Editar</a>   
                                    @csrf
                                    @method('DELETE')      
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>

  
    {!! $alunos->links() !!}