@extends('layouts.app', ["current" => "categorias"])

@section('body')

    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadastro de categorias</h5>
            @if (isset($categorias) and count($categorias) > 0)
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nome da Categoria</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categorias as $categoria)
                            <tr>
                                <td>{{ $categoria->id }}</td>
                                <td>{{ $categoria->nome }}</td>
                                <td>
                                    <a href="/categorias/editar/{{$categoria->id}}" class="btn btn-sm btn-primary">Editar</a>
                                    <a href="/categorias/apagar/{{$categoria->id}}" class="btn btn-sm btn-danger">Apagar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
            <div class="card-footer">
                <a href="/categorias/novo" class="btn btn-sm btn-primary">Nova Categoria</a>
            </div>
        </div>
    </div>

@endsection