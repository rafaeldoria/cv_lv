@extends('layouts.app')

@section('content')
    <pagina tamanho="12">
        <painel titulo="Clientes">
            <breadcrumb v-bind:listapaginas="{{$listaPaginas}}"></breadcrumb>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTeste">Large modal</button>
            <tabela 
                v-bind:titulos="['#','Nome','E-mail','Usuário','Cliente Desde']"
                v-bind:itens="[['1','João','email@email','joao','01/01/2000'],['2','Cláudio','email@email','jose','02/02/2002']]"
                ordem="asc" ordemcol="0"
                criar="#novo"
                detalhe="#detalhe"
                editar="#editar"
                excluir="#delete"
                token="132465"
            >
            </tabela>
        </painel>
    </pagina>
    <modal nome="modalTeste">
        <painel titulo="teste">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </painel>
    </modal>
@endsection
