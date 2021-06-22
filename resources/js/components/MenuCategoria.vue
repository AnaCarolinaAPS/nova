<template>
    <carousel :margin="20" :nav="false" :loop="true" :responsive="{0:{items:3,nav:false},600:{items:7,nav:false}}" class="menu-categoria">
        <a v-for="(item, index) in categorias" :key="item.id" v-bind:href="'#'+item.id" v-on:click="setActive(index)" class="menu-icones">
            <img v-bind:id="index" class="rounded-circle" v-bind:class="{ ' carousel-active':isActive(index) }" v-bind:alt="item.titulo" v-bind:src="item.icone">
            <div class="text-center">
                <p v-bind:id="'title-'+index" class="menu-title" v-bind:class="{ ' menu-active':isActive(index) }">{{item.titulo}}</p>
            </div>
        </a>
    </carousel>
</template>

<script>
    import carousel from 'vue-owl-carousel'

    export default {
        components: { carousel },
        props: ['categorias', 'ativo'],
        data:function(){
            return {
                activeItem: this.ativo || 0,
            }
        },
        methods: {
            changeActive:function(id) {
                var all = document.getElementsByClassName('rounded-circle');
                for (var i = 0; i < all.length; i++) {
                    all[i].className = 'rounded-circle';
                }
                document.getElementById(id).className = 'rounded-circle carousel-active';

                var all = document.getElementsByClassName('menu-title');
                for (var i = 0; i < all.length; i++) {
                    all[i].className = 'menu-title';
                }
                document.getElementById('title-'+id).className = 'menu-title menu-active';
            },
            isActive: function (menuItem) {
                return this.activeItem === menuItem
            },
            setActive: function (menuItem) {
                this.activeItem = menuItem // no need for Vue.set()
            }
        },
    }
</script>
<style>
    .menu-categoria {
        text-decoration: none;
    }
    .menu-categoria a{
        text-decoration: none;
    }
    .menu-categoria a:hover{
        text-decoration: none;
        font-weight: bold;
        color: red !important;
    }
    .menu-categoria a:hover img{
        filter: brightness(90%);
    }
    .menu-categoria a:hover .menu-title{
        color: red !important;
    }
    .carousel-active {
        filter: brightness(85%);
    }
    .menu-title {
        padding-top: 5px;
        font-size: 11pt;
        font-family: 'Ubuntu', sans-serif;
        line-height: 1.2;
        color: #5a5a5a;
    }
    .menu-active {
        color: #d91e18 !important;
        font-weight: bold;
    }
</style>
