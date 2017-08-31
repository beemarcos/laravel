@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Produtos</div>
                <div class="panel-body">
                    @if ($errors->any())
                        <ul class="alert alert-warning">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <h1>Novo Produto</h1>
                    {!! Form::open(['route'=>'produtos.store']) !!}

                    <div class="form-group">
                        {!!Form::label('nome','Nome')!!}
                        {!!Form::text('nome',null,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('descricao', 'Descrição:') !!}
                        {!! Form::textarea('descricao', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('preco','Preço')!!}
                        {!!Form::number('preco',null,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Criar Produto', ['class'=>'btn btn-primary']) !!}
                    </div>
                    
                    
                    

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection