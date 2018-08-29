@extends('layouts.app')

@section('content')
    <pagina tamanho="12">
        <painel titulo="Clientes">
            <a href="#">Novo</a>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Usuário</th>
                        <th>Cliente Desde</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>João</td>
                        <td>email@email</td>
                        <td>joao</td>
                        <td>01/01/2000</td>
                        <td>
                            <a href="#">Editar</a> |
                            <a href="#">Excluir</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </painel>
    </pagina>
@endsection
