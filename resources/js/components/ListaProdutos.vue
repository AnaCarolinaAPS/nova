<template>
    <div class="container">
        <carousel :margin="20" :nav="false" :loop="true" :responsive="{0:{items:3,nav:false},600:{items:7,nav:false}}" class="menu-categoria">
            <a v-for="(item, index) in categorias" :key="item.id" v-on:click="setActive(index);changeTitle(item.titulo);" class="menu-icones">
            <!-- <a v-for="(item, index) in categorias" :key="item.id" v-bind:href="'#'+item.id" v-on:click="setActive(index);changeTitle(item.titulo);" class="menu-icones"> -->
                <img v-bind:id="index" class="rounded-circle" v-bind:class="{ ' carousel-active':isActive(index) }" v-bind:alt="item.titulo" v-bind:src="item.icone">
                <div class="text-center">
                    <p v-bind:id="'title-'+index" class="menu-title" v-bind:class="{ ' menu-active':isActive(index) }">{{item.titulo}}</p>
                </div>
            </a>
        </carousel>
        <div class="row">
            <div class="col-md-12 text-center">
                <h3 class="product-catalog">{{ titulo }}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 float-left" style="padding-left: 5px;">
                <div class="form-group">
                    <select id="ordenProductos" class="form-control" aria-label="Default select example" v-on:change="setOrden();">
                        <option value="0" selected>Mayor relevancia</option>
                        <option value="1">Mayor precio</option>
                        <option value="2">Menor precio</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4 offset-5 float-right" style="padding-right: 5px;">
                <input type="text" class="form-control" id="filtro" name="filtro" placeholder="Buscar..." v-model="buscar">
            </div>
        </div>
        <div class="row">
            <div v-for="(item, index) in lista" class="mix col-lg-3 col-md-6 product-grid text-center">
                <div class="product">
                    <a href="product.php?id=0">
                        <div class="product-image">
                            <img v-bind:src="item.url" class="img-fluid product-image" alt="producto" style="height: 230px;">
                        </div>
                        <div class="product-info">
                            <p>
                                {{item.precio}}
                            </p>
                            <h6>{{item.titulo}}</h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import carousel from 'vue-owl-carousel'
    export default {
        components: { carousel },
        props: ['itens', 'categorias', 'ativo'],
        data:function(){
            return {
                activeItem: '',
                buscar:'',
                titulo: 'Productos Destacados',
                ordemItens: 0,
            }
        },
        methods: {
            changeTitle:function(categoria) {
                this.titulo = categoria;
            },
            isActive: function (menuItem) {
                return this.activeItem === menuItem
            },
            setActive: function (menuItem) {
                this.activeItem = menuItem // no need for Vue.set()
            },
            setOrden: function () {
                this.ordemItens = document.getElementById("ordenProductos").value; // no need for Vue.set()
            },
        },
        computed: {
            lista:function(){
                let ordem = this.ordemItens;
                // let ordemCol = this.ordemColAuxs;

                // ordem = ordem.toLowerCase();
                // ordemCol = parseInt(ordemCol);

                if (ordem == "2") {
                    this.itens.sort(function(a,b) {
                        if (Object.values(a)[4] > Object.values(b)[4]) { return 1; }
                        if (Object.values(a)[4] < Object.values(b)[4]) { return -1; }
                        return 0;
                    });
                } else if (ordem == "1") {
                    this.itens.sort(function(a,b) {
                        if (Object.values(a)[4] < Object.values(b)[4]) { return 1; }
                        if (Object.values(a)[4] > Object.values(b)[4]) { return -1; }
                        return 0;
                    });
                }

                if (this.buscar) {
                    this.titulo = 'Todos los Productos';
                    this.activeItem = '';
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

                if (this.activeItem) {
                    console.log('Entra!');
                    return this.itens.filter(res => {
                        for (let k = 0; k<Object.values(res).length; k++) {
                            // console.log(Object.values(res)['1']+"");
                            // console.log(this.activeItem);
                            if((Object.values(res)[1]) === this.activeItem) {
                                return true;
                            }
                        }
                        return false;
                    });
                }
                if (!this.activeItem) {
                    console.log('Somente Destacados');
                    return this.itens.filter(res => {
                        for (let k = 0; k<Object.values(res).length; k++) {
                            if((Object.values(res)[2]) === 1) {
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
    .product-catalog {
        font-size: 24pt;
        color: #5a5a5a;
        margin: 25px 0px;
    }
    .product-grid {
        padding: 5px;
    }
    .product {
        background-color: #fff;
        border-radius: 0px;
        border: 1px solid #ced4da;
        height: 100%;
    }
    .product a {
        text-decoration: none !important;
    }
    .product-image {
        min-width: 100%;
        margin-bottom: 5px;
    }
    .product-info h6 {
        font-size: 11pt;
        /* color: #6c7a89; */
        color: #5a5a5a;
        margin-bottom: 0px;
    }
    .product-info {
        padding: 5px 5px;
    }
    .product-info p {
        font-size: 14pt;
        font-weight: bold;
        color: #cf000f;
    }
    .product-grid .add-to-cart {
        color: #fff;
        background-color: #404040;
        font-size: 15px;
        text-align: center;
        width: 100%;
        padding: 10px 0;
        display: block;
        position: absolute;
        left: 0;
        bottom: -100%;
        transition: all .3s;
    }
    .sub_div {
        bottom: 0px;
    }

</style>
