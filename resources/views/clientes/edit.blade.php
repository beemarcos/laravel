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
                    <h1>Editando Cliente</h1>
                    {!! Form::open(['route'=>['clientes.update',$cliente->id],'method'=>'put'])!!}

                    <div class="form-group">
                        {!!Form::label('nome','Nome')!!}
                        {!!Form::text('nome',cliente->nome,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('nascimento', 'Nascimento:') !!}
                        {!! Form::date('nascimento', $cliente->nascimento, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('sexo','Sexo')!!}
                        {!!Form::text('sexo',$cliente->sexo,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('responsavel','Responsavel')!!}
                        {!!Form::number('responsavel',$cliente->responsavel,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('limite','Limite')!!}
                        {!!Form::number('limite',$cliente->limite,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('bloqvenda','Bloqueio de venda')!!}
                        {!!Form::text('bloqvenda',$cliente->bloqvenda,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('restalimentar','Restricao alimentar')!!}
                        {!!Form::text('restalimentar',$cliente->restalimentar,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('limitediario','Limite diario')!!}
                        {!!Form::number('limitediario',$cliente->limitediario,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('telefone','Telefone')!!}
                        {!!Form::text('telefone',$cliente->telefone,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Salvar Cliente', ['class'=>'btn btn-primary']) !!}
                    </div>
                    
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection