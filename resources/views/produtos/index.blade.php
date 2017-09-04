@extends('layouts.app')


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Produtos</div>
                
                <a href="{{ route('produtos.create') }}" class="btn btn-primary btn-block">Novo produto</a>  
                
                <div class="panel-body">
                    
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Descricao</th>
                                <th>Preco</th>
                                <th>Acao</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($produtos as $produto)
                            <tr>
                                <td>{{$produto->id}}</td>
                                <td>{{$produto->nome}}</td>
                                <td>{{$produto->descricao}}</td>
                                <td>R$ {{$produto->preco}}</td>
                                <td>
                                    <a href="{{ route('produtos.edit',['id'=>$produto->id]) }}"class="btn-sm btn-success">Editar</a>
                                    <a href="{{ route('produtos.destroy',['id'=>$produto->id]) }}" class="btn-sm btn-danger">Remover</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection