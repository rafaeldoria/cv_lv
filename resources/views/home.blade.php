@extends('layouts.app')

@section('content')
    <pagina tamanho="10">
        <painel titulo="Dashboard">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <caixa qtd="25" titulo="Clientes" url="{{route('clientes.index')}}" cor="#f39c12 " icone="ion ion-pie-graph"></caixa>
                </div>
                <div class="col-md-4 col-sm-4">
                    <caixa qtd="9" titulo="Usuários" url="#" cor="#7b0234" icone="ion ion-person"></caixa>
                </div>
                <div class="col-md-4 col-sm-4">
                    <caixa qtd="32" titulo="Animais" url="#" cor="#00a65a" icone="fa fa-paw"></caixa>
                </div>
            </div>
        </painel>
    </pagina>
@endsection
