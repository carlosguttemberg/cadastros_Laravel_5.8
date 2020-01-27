@extends('layouts.app', ["current" => "Categorias"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/categorias/{{$categoria->id}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeCategoria">Nome</label>
                    <input type="text" class="form-control" id="nomeCategoria" 
                            name="nomeCategoria" placeholder="Categoria" value="{{$categoria->nome}}">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
@endsection