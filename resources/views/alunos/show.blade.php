@extends('alunos.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">           
            <div class="pull-right" style="padding:20px">
            <a class="btn btn-primary" href="{{ route('alunos.index') }}"> << Voltar</a>
        </div>
        </div>
    </div>
    <fieldset>
        <div class="panel panel-default" >
            <div class="panel-heading"><strong>Detalhes Aluno</strong></div>           
            <div class="panel-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Nome:</strong>
                                {{ $aluno->nome }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>RG:</strong>
                                {{ $aluno->rg }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>CPF:</strong>
                                {{ $aluno->cpf }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Sexo:</strong>
                                {{ strtoupper($aluno->sexo) }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Data Nascimento:</strong>                          
                                {{ \Carbon\Carbon::parse($aluno->data_nascimento)->format('d/m/Y')}}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Telefone:</strong>
                                {{ $aluno->telefone }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </fieldset>     
@endsection