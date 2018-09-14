@extends('layouts.app')

@section('content')
    <pagina tamanho="12">
        <painel titulo="Clientes">
            <breadcrumb v-bind:listapaginas="{{$listaPaginas}}"></breadcrumb>

            <tabela 
                v-bind:titulos="['#','Nome','E-mail','Usuário','Cliente Desde']"
                v-bind:itens="{{$clientes}}"
                ordem="asc" ordemcol="0"
                criar="#criar"
                detalhe="#detalhe"
                editar="#editar"
                excluir="#delete"
                token="132465"
                modal="sim"
            >
            </tabela>
        </painel>
    </pagina>
    <modal nome="adicionar">
        <painel titulo="Adicionar">
            <formulario css="" action="#" method="delete" enctype="" token="">
                <div class="form-group">
                    <label for="Nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                </div>
                <div class="form-group">
                    <label for="E-mail">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
                </div>
                <div class="form-group">
                    <label for="Usuario">Usuário</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuário">
                </div>
                <button class="btn btn-info">Adicionar</button>
            </formulario>
        </painel>
    </modal>

    <modal nome="editar">
        <painel titulo="Editar">
            <formulario css="" action="#" method="delete" enctype="" token="">
                <div class="form-group">
                    <label for="Nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                </div>
                <div class="form-group">
                    <label for="E-mail">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
                </div>
                <div class="form-group">
                    <label for="Usuario">Usuário</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuário">
                </div>
                <button class="btn btn-info">Atualizar</button>
            </formulario>
        </painel>
    </modal>

    <modal nome="detalhes">
        <painel titulo="Detalhes">
            <formulario css="" action="#" method="delete" enctype="" token="">
                <div class="form-group">
                    <label for="Nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                </div>
                <div class="form-group">
                    <label for="E-mail">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
                </div>
                <div class="form-group">
                    <label for="Usuario">Usuário</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuário">
                </div>
                <button class="btn btn-info">Adicionar</button>
            </formulario>
        </painel>
    </modal>
@endsection
