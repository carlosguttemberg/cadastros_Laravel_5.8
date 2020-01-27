@extends('layouts.app', ["current" => "home"])

@section('body')
    <div class="jumbotron bg-light border border-secondary">
        <div class="row">
            <div class="card-deck">
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title"> Cadastro de Produtos</h5>
                        <p class="card-text"> 
                            Tela para cadastrar os produtos vendidos...
                        </p>
                        <a href="/produtos" class="btn btn-primary"> Novo produto</a>
                    </div>
                </div>

                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title"> Cadastro de Departamentos</h5>
                        <p class="card-text"> 
                            Tela para cadastrar os depatamentos dos produtos...
                        </p>
                        <a href="/produtos" class="btn btn-primary"> Novo departamento</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection