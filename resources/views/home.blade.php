@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <painel titulo="Dashboard">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <painel titulo="Cont1" cor="blue">
                                Usuários
                            </painel>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <painel titulo="Cont2" cor="red">
                                Usuários
                            </painel>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <painel titulo="Cont3" cor="panel-success">
                                Usuários
                            </painel>
                        </div>
                    </div>
                </painel>
            </div>
        </div>
    </div>
@endsection
