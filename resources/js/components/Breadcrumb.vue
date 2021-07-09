<template>
    <div class="row" style="margin-top: 1%;">
        <div class="col-md-6" style="margin-top: auto; margin-bottom: auto;">
            <h3>{{ titulo }}</h3>
        </div>
        <div class="col-md-6">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb float-right">
                    <li v-for="item in lista" v-bind:class="defineClass"><a v-if="item.url" v-bind:href="item.url">{{item.titulo}}</a><span v-if="!item.url">{{item.titulo}}</span></li>
                </ol>
            </nav>
        </div>
    </div>
</template>

<script>
    export default {
        props:['lista', 'titulo'],
        mounted:function(){
            console.log(this.lista);
        },
        computed:{
            defineClass:function(){
                if(this.url) {
                    return "breadcrumb-item active";
                } else {
                    return "breadcrumb-item";
                }
            }
        }
    }
</script>

<style media="screen">
    .breadcrumb {
        background: transparent;
        margin-bottom: 0px;
    }
</style>
