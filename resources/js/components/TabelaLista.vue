<template>
    <div>
        <div class="row">
            <div class="col-3">
                <modal-link-component tipo="button" v-bind:nome="criar" titulo="Criar" v-bind:css="btncolor"></modal-link-component>
            </div>
            <div class="col">
            </div>
            <div class="col">
                <div class="form-group pull-right">
                    <input type="search" class="form-control" placeholder="Buscar" v-model="buscar">
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th v-on:click="ordenaColuna(index)" v-for="(titulo, index) in titulos" :key="index" style="cursor:pointer;"> {{ titulo }} </th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-if="!lista.length">
                        <td v-bind:colspan="titulos.length" class="text-center">No matching records found</td>
                    </tr>
                    <tr v-for="(item, index) in lista" :key="index" v-on:click="preencheFormulario(item)" data-toggle="modal" v-bind:data-target="'#'+editar">
                        <td v-for="campo in item" :key="campo">
                            <img v-if="isImage(campo+'')" v-bind:src="img_url+'/'+campo" v-bind:alt="campo">
                            <span v-if="!isImage(campo+'')">{{ campo }}</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['titulos', 'img_url', 'itens', 'ordem', 'ordemcol', 'criar', 'editar', 'deletar', 'token', 'btncolor'],
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
            },
            preencheFormulario:function(item){
                this.$store.commit('setItem', item);
            },
            isImage(coluna) {
                if (coluna.indexOf('.png') > -1)
                    return true;
                if (coluna.indexOf('.jpg') > -1)
                    return true;
                if (coluna.indexOf('.jpeg') > -1)
                    return true;
                return false;
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

<style>
    .table-list {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 1.1rem;
        font-weight: 400;
    }
</style>
