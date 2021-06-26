<template>
    <div class="row">
        <div class="col-md-5">
            <img v-bind:src="item.url" v-bind:alt="item.titulo" class="img-thumbnail" style="width: 100%;">
        </div>
        <div class="col-md-7 text-center">
            <p style="color: #5a5a5a;">{{ item.idCategoria }}</p>
            <p style="color: #5a5a5a;">CÓDIGO: {{ item.id }}</p>
            <hr style="width: 90%">
            <p style="font-size: 12pt;">{{ item.descripcion }}</p>
            <p style="color: #cf000f; font-weight: bold; font-size: 16pt;">{{ item.precio }}</p>
            <whats-component v-bind:titulo="item.titulo+' [COD.'+item.id+']'" v-bind:celular="this.celular" v-bind:texto="this.texto">
            </whats-component>
        </div>
    </div>
</template>

<script>
    export default {
        props:['item', 'celular', 'texto', 'titulo'],
    }
</script>

<style>

</style>
