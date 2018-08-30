@extends('layouts.app')

@section('content')
    <pagina tamanho="12">
        <painel titulo="Clientes">
            <tabela 
                v-bind:titulos="['#','Nome','E-mail','Usuário','Cliente Desde']"
                v-bind:itens="[['1','João','email@email','joao','01/01/2000'],['2','José','email@email','jose','02/02/2002']]"
                criar="#novo"
                detalhe="#detalhe"
                editar="#editar"
                excluir="#delete"
                token="132465"
            >
            </tabela>
        </painel>
    </pagina>
@endsection
