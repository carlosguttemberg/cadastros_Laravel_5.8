@extends('layouts.app', ["current" => "produtos"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/produtos" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeCategoria">Nome</label>
                    <input  type="text" class="form-control" 
                            id="nomeCategoria" name="nomeProduto" placeholder="Produto">

                    <label for="precoProduto">Preço</label>
                    <input  type="number" step="any" class="form-control" 
                            id="precoProduto" name="precoProduto" placeholder="Preço">

                    <label for="estoqueProduto">Estoque</label>
                    <input  type="number" step="any" class="form-control" 
                            id="estoqueProduto" name="estoqueProduto" placeholder="Estoque">

                    <label for="idCategoria">Categoria</label>
                    <select name="idCategoria" id="idCategoria" class="form-control" >
                        @foreach ($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
@endsection