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
                    <h1>Editando Produto</h1>
                    {!! Form::open(['route'=>['produtos.update',$produto->id],'method'=>'put'])!!}

                    <div class="form-group">
                        {!!Form::label('nome','Nome')!!}
                        {!!Form::text('nome',$produto->nome,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('descricao', 'Descrição:') !!}
                        {!! Form::textarea('descricao', $produto->descricao, ['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('preco','Preço')!!}
                        {!!Form::number('preco',$produto->preco,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Salvar Produto', ['class'=>'btn btn-primary']) !!}
                    </div>
                    
                    
                    

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection