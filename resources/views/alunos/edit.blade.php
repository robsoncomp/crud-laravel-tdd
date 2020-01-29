@extends('alunos.layout')  
@section('content')
<br/><br/>
<div class="row">
    <div class="col-lg-12 margin-tb">        
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('alunos.index') }}"> << Voltar</a>
        </div>
    </div>
</div>
<br/>
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Opss!</strong> Algo deu errado.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('alunos.update',$aluno->id) }}" method="POST">
@csrf
@method('PUT')
<fieldset>
<div class="panel panel-default" >
    <div class="panel-heading"><strong>Editar Aluno</strong></div>
    @csrf
    <div class="panel-body">
    <div class="form-group">
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                <input type="text" name="nome" class="form-control" placeholder="Nome" value="{{ $aluno->nome }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>RG:</strong>
                <input type="text" name="rg" class="form-control" placeholder="RG" value="{{ $aluno->rg }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CPF:</strong>
                <input type="text" name="cpf" maxlength="11" class="form-control" placeholder="Apenas números" value="{{ $aluno->cpf }}">                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">                          
                    <label for="sexo">Sexo:</label>
                    <select class="form-control" name="sexo" id="sexo">
                    <option>SELECIONE</option>
                    <option selected="{{ $aluno->sexo == 'masculino' }}" value="masculino" >MASCULINO</option>
                    <option selected="{{ $aluno->sexo == 'feminino' }}" value="feminino" >FEMININO</option>                   
                </select>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Data Nascimento:</strong>
                <div class='input-group date' id='data_nascimento'>
                    <input id='data_nascimento' name='data_nascimento' type='text' class="form-control" value="{{ $aluno->data_nascimento }}" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telefone:</strong>
                <input type="fone" name="telefone" class="form-control" placeholder="(99) 99999-9999" value="{{ $aluno->telefone }}">
            </div>
        </div>
       
        <script type="text/javascript">
        $('#data_nascimento').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd'
            
         });
    </script>
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
               <button type="reset" class="btn btn-danger">Limpar</button> |
               <button type="submit" class="btn btn-success">Salvar</button>                
        </div>
</div>
</div>
</div>
</div>
</fieldset>
   
</form>
@endsection