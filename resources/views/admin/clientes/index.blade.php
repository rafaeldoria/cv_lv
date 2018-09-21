@extends('layouts.app')

@section('content')
    <pagina tamanho="12">

        @if($errors->all())
        <div class="alert alert-warning alert-dismissible text-center" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            @foreach ($errors->all() as $key => $value)
                <li>{{$value}}</li>
            @endforeach
        </div>
        @endif

        <painel titulo="Clientes">
            <breadcrumb v-bind:listapaginas="{{$listaPaginas}}"></breadcrumb>
            
            <tabela 
                v-bind:titulos="['#','Nome','E-mail','Usuário','Cliente Desde']"
                v-bind:itens="{{$clientes}}"
                ordem="asc" ordemcol="0"
                detalhe="/admin/clientes/"
                editar="#editar"
                excluir="#delete"
                token="132465"
                modal="sim"
            >
            </tabela>
        </painel>
    </pagina>
    <modal nome="adicionar" titulo="Adicionar">
        <formulario id="addCliente" css="" action="{{route('clientes.store')}}" method="post" token="{{csrf_token()}}">
            <div class="form-group">
                <label for="Nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="{{old('nome')}}">
            </div>
            <div class="form-group">
                <label for="E-mail">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" value="{{old('email')}}">
            </div>
            <div class="form-group">
                <label for="Usuario">Usuário</label>
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuário">
            </div>
        </formulario>
        <span slot="buttons">
            <button form="addCliente" class="btn btn-info">Adicionar</button>
        </span>
    </modal>

    <modal nome="editar" titulo="Editar">
        <formulario id="editCliente" css="" action="#" method="delete" enctype="" token="">
            <div class="form-group">
                <label for="Nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" v-model="$store.state.registro.nome" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="E-mail">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" v-model="$store.state.registro.email" placeholder="E-mail">
            </div>
            <div class="form-group">
                <label for="Usuario">Usuário</label>
                <input type="text" class="form-control" id="usuario" name="usuario" v-model="$store.state.registro.usuario" placeholder="Usuário">
            </div>
        </formulario>
        <span slot="buttons">
            <button form="editCliente" class="btn btn-info">Atualizar</button>
        </span>
    </modal>

    <modal nome="detalhes" v-bind:titulo="$store.state.registro.nome">
        <p>@{{$store.state.registro.email}}</p> <!-- @ diferencia javascript do php-->
        <p>@{{$store.state.registro.usuario}}</p>
    </modal>
@endsection
