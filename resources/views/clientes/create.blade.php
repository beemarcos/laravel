@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Clientes</div>
                <div class="panel-body">
                    @if ($errors->any())
                        <ul class="alert alert-warning">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <h1>Novo Cliente</h1>
                    {!! Form::open(['route'=>'clientes.store']) !!}

                    <div class="form-group">
                        {!!Form::label('nome','Nome')!!}
                        {!!Form::text('nome',null,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('nascimento', 'Nascimento:') !!}
                        {!! Form::date('nascimento', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('sexo','Sexo')!!}
                        {!!Form::text('sexo',null,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('responsavel','Responsavel')!!}
                        {!!Form::number('responsavel',null,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('limite','Limite')!!}
                        {!!Form::number('limite',null,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('bloqvenda','Bloqueio de venda')!!}
                        {!!Form::text('bloqvenda',null,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('restalimentar','Restricao alimentar')!!}
                        {!!Form::text('restalimentar',null,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('limitediario','Limite diario')!!}
                        {!!Form::number('limitediario',null,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('telefone','Telefone')!!}
                        {!!Form::text('telefone',null,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Criar Cliente', ['class'=>'btn btn-primary btn-block']) !!}
                    </div>
                    
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection