<template>
    <span>
        <span v-if="item">
            <!-- Button trigger modal -->
            <!-- padrão -->
            <button v-on:click="preencheFormulario()" v-if="!tipo || (tipo !='button' && tipo !='link')" type="button" v-bind:class="css || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="'#'+nome">{{titulo}}</button>
            <!-- case botão -->
            <button v-on:click="preencheFormulario()" v-if="tipo =='button'" type="button" v-bind:class="css || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="'#'+nome">{{titulo}}</button>
            <!-- case link -->
            <a v-on:click="preencheFormulario()" v-if="tipo =='link'" href="#" v-bind:class="css || ''" data-toggle="modal" v-bind:data-target="'#'+nome">{{titulo}}</a>
        </span>
        <span v-if="!item">
            <!-- Button trigger modal -->
            <!-- padrão -->
            <button v-if="!tipo || (tipo !='button' && tipo !='link')" type="button" v-bind:class="css || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="'#'+nome">{{titulo}}</button>
            <!-- case botão -->
            <button v-if="tipo =='button'" type="button" v-bind:class="css || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="'#'+nome">{{titulo}}</button>
            <!-- case link -->
            <a v-if="tipo =='link'" href="#" v-bind:class="css || ''" data-toggle="modal" v-bind:data-target="'#'+nome">{{titulo}}</a>
        </span>
    </span>
</template>

<script>
    export default {
        props:['tipo', 'nome', 'titulo', 'css', 'item'],
        methods: {
            preencheFormulario:function(){
                this.$store.commit('setItem', this.item);
            }
        }
    }
</script>

<style media="screen">

</style>
