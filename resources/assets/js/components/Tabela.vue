<template>
    <div class="">
        <div class="form-inline">
            <a v-if="criar" v-bind:href="criar">Novo</a>
            <div class="form-group pull-right">
                <input type="search" class="form-control" placeholder="Buscar" v-model="buscar">
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th style="cursor:pointer" v-on:click="ordernar_colunas(index)" v-for="(titulo, index) in titulos" :key="titulo.id">{{titulo}}</th>
                    <th v-if="detalhe || editar || excluir">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(item, index) in lista" :key="item.id">
                    <td v-for="i in item" :key="i.id">{{i}}</td>

                    <td v-if="detalhe || editar || excluir">
                        <form v-bind:id="index" v-if="excluir && token" v-bind:action="excluir">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" v-bind:value="token">
                            <a v-if="detalhe" v-bind:href="detalhe">Detalhes |</a>
                            <a v-if="editar" v-bind:href="editar">Editar |</a>
                            <a href="" v-on:onclick="submit_form(index)">Excluir</a>
                        </form>
                        <span v-if="!token">
                            <a v-if="detalhe" v-bind:href="detalhe">Detalhes |</a>
                            <a v-if="editar" v-bind:href="editar">Editar |</a>
                            <a v-if="excluir" v-bind:href="excluir">Excluir</a>
                        </span>
                        <span v-if="token && !excluir">
                            <a v-if="detalhe" v-bind:href="detalhe">Detalhes |</a>
                            <a v-if="editar" v-bind:href="editar">Editar</a>
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        props:['titulos','itens', 'criar', 'detalhe', 'editar', 'excluir', 'token','ordem','ordemcol'],
        data: function() {
            return {
                buscar: "",
                ordemAux: this.ordem || "asc",
                ordemAuxCol: this.ordemcol || 0,
            }
        },
        methods: {
            submit_form: function(index) {
                document.getElementById(index).submit();
            },
            ordernar_colunas: function(coluna){
                this.ordemAuxCol = coluna;
                if(this.ordemAux.toLowerCase() == "asc") { this.ordemAux = "desc";}
                else { this.ordemAux = "asc";}
            }
        },
        computed: {
            //busca e ordenação listagem
            lista:function() {

                let ordem = this.ordemAux;
                let ordemCol = this.ordemAuxCol;
                ordem = ordem.toLowerCase();
                ordemCol = parseInt(ordemCol);

                if(ordem == "asc") {
                    this.itens.sort(function(a,b){
                        if(a[ordemCol] > b[ordemCol]) { return 1;}
                        if(a[ordemCol] < b[ordemCol]) { return -1;}
                        return 0;
                    });
                }else {
                    this.itens.sort(function(a,b){
                        if(a[ordemCol] < b[ordemCol]) { return 1;}
                        if(a[ordemCol] > b[ordemCol]) { return -1;}
                        return 0;
                    });
                }


                return this.itens.filter(res => {
                    for (let k = 0; k < res.length; k++) {
                        const element = res[k];
                        if((res[k] + "").toLowerCase().indexOf((this.buscar + "").toLowerCase()) >= 0) {
                            return true;
                        }
                    }
                    return false;
                });
            }
        }
    }
</script>