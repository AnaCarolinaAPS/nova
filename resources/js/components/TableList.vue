<template>
    <div>
        <div class="form-in-line">
            <a v-if="criar && !modal" v-bind:href="criar">Criar</a>
            <modal-link-component v-if="criar && modal" tipo="link" nome="adicionar" titulo="Criar" css=""></modal-link-component>
            <div class="form-group pull-right">
                <input type="search" class="form-control" placeholder="Buscar" v-model="buscar">
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th v-on:click="ordenaColuna(index)" v-for="(titulo, index) in titulos" scope="col" style="cursor:pointer;"> {{ titulo}} </th>
                <th v-if="detalhe || editar || deletar">Ação</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(item, index) in lista">
                <th v-for="campo in item" scope="row">{{campo}}</th>
                <td v-if="detalhe || editar || deletar">
                    <form v-bind:id="index" v-if="deletar && token" v-bind:action="deletar" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" v-bind:value="token">
                        <a v-if="detalhe && !modal" v-bind:href="detalhe">Detalhe |</a>
                        <modal-link-component v-if="detalhe && modal" v-bind:item="item" tipo="link" nome="detalhe" titulo="Detalhe |" css=""></modal-link-component>

                        <a v-if="editar && !modal" v-bind:href="editar">Editar |</a>
                        <modal-link-component v-if="editar && modal" v-bind:item="item" tipo="link" nome="editar" titulo="Editar |" css=""></modal-link-component>

                        <a href="#" v-on:click="executaForm(index)"> Deletar</a>
                    </form>
                    <span v-if="!token">
                        <a v-if="detalhe && !modal" v-bind:href="detalhe">Detalhe |</a>
                        <modal-link-component v-if="detalhe && modal" v-bind:item="item" tipo="link" nome="detalhe" titulo="Detalhe |" css=""></modal-link-component>

                        <a v-if="editar && !modal" v-bind:href="editar">Editar |</a>
                        <modal-link-component v-if="editar && modal" tipo="link" nome="editar" titulo="Editar |" css=""></modal-link-component>

                        <a v-if="deletar" v-bind:href="deletar">Deletar</a>
                    </span>
                    <span v-if="token && !deletar">
                        <a v-if="detalhe && !modal" v-bind:href="detalhe">Detalhe |</a>
                        <modal-link-component v-if="detalhe && modal" v-bind:item="item" tipo="link" nome="detalhe" titulo="Detalhe |" css=""></modal-link-component>

                        <a v-if="editar && !modal" v-bind:href="editar">Editar </a>
                        <modal-link-component v-if="editar && modal" tipo="link" nome="editar" titulo="Editar" css=""></modal-link-component>
                    </span>
                </td>
              </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        props: ['titulos', 'itens', 'criar', 'ordem', 'ordemcol', 'detalhe', 'editar', 'deletar', 'token', 'modal'],
        data:function(){
            return {
                buscar:'',
                ordemAux: this.ordem || 'asc',
                ordemColAuxs: this.ordemcol || 0
            }
        },
        methods: {
            executaForm:function(index) {
                document.getElementById(index).submit();
            },
            ordenaColuna:function(coluna) {
                this.ordemColAuxs = coluna;
                if (this.ordemAux.toLowerCase() == "asc") {
                    this.ordemAux = 'desc';
                } else {
                    this.ordemAux = 'asc';
                }
            }
        },
        computed: {
            lista:function(){
                let ordem = this.ordemAux;
                let ordemCol = this.ordemColAuxs;

                ordem = ordem.toLowerCase();
                ordemCol = parseInt(ordemCol);

                if (ordem == "asc") {
                    this.itens.sort(function(a,b) {
                        if (Object.values(a)[ordemCol] > Object.values(b)[ordemCol]) { return 1; }
                        if (Object.values(a)[ordemCol] < Object.values(b)[ordemCol]) { return -1; }
                        return 0;
                    });
                } else {
                    this.itens.sort(function(a,b) {
                        if (Object.values(a)[ordemCol] < Object.values(b)[ordemCol]) { return 1; }
                        if (Object.values(a)[ordemCol] > Object.values(b)[ordemCol]) { return -1; }
                        return 0;
                    });

                }

                if (this.buscar) {
                    // Faz uma iteração sobre itens, aplicando a função... res no caso é cada item que recebe, ou seja, todo o objeto com os campos
                    return this.itens.filter(res => {
                        for (let k = 0; k<Object.values(res).length; k++) {
                            if((Object.values(res)[k]+"").toLowerCase().indexOf(this.buscar.toLowerCase()) >= 0) {
                                return true;
                            }
                        }
                        return false;
                    });
                }
                return this.itens;
            }
        }
    }
</script>

<style media="screen">

</style>
