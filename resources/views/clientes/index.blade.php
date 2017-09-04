@extends('layouts.app')


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Clientes</div>
                <a href="{{ route('clientes.create') }}" class="btn btn-primary btn-block">Novo cliente</a>

                <div class="panel-body">
                    
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Nascimento</th>
                                <th>Sexo</th>
                                <th>Responsavel</th>
                                <th>Limite</th>
                                <th>Bloq.Venda</th>
                                <th>Rest.Alimentar</th>
                                <th>LimiteDiario</th>
                                <th>Telefone</th>
                                <th>Acao</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clientes as $cliente)
                            <tr>
                                <td>{{$cliente->id}}</td>
                                <td>{{$cliente->nome}}</td>
                                <td>{{$cliente->nascimento}}</td>
                                <td>{{$cliente->sexo}}</td>
                                <td>{{$cliente->responsavel}}</td>
                                <td>{{$cliente->limite}}</td>
                                <td>{{$cliente->bloqvenda}}</td>
                                <td>{{$cliente->restalimentar}}</td>
                                <td>{{$cliente->limitediario}}</td>
                                <td>{{$cliente->telefone}}</td>
                                <td>
                                    <a href="{{ route('clientes.edit',['id'=>$cliente->id]) }}"class="btn-sm btn-success">Editar</a>
                                    <a href="{{ route('clientes.destroy',['id'=>$cliente->id]) }}" class="btn-sm btn-danger">Remover</a>
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