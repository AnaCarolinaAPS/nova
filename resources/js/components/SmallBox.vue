<template>
    <div v-bind:class="defineClass" v-bind:style="defineCor">
        <div class="inner">
            <h3>{{ qtd }}</h3>

            <p>{{ titulo }}</p>
        </div>
        <div class="icon">
            <i  v-bind:class="icone"></i>
        </div>
        <a v-bind:href="url" class="small-box-footer">Ver mais <i class="fa fa-arrow-circle-right"></i></a>
    </div>
</template>
<script>
    export default {
        props: ['qtd', 'titulo', 'url', 'cor', 'bgcor', 'icone'],
        computed:{
            defineClass:function() {
                return "small-box " + (this.bgcor || "");
            },
            defineCor:function() {
                if(this.cor) {
                    return "background-color: "+this.cor+" !important;";
                } else {
                    return "";
                }
            }
        }

    }
</script>

<style media="screen">
    .small-box {
        border-radius: .25rem;
        box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);
        position: relative;
        display: block;
        margin-bottom: 20px;
        font-family: 'Source Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif;
        font-weight: 400;
        color: #fff !important;
    }
    .small-box:hover {
        text-decoration: none;
        color: #f9f9f9;
    }
    .small-box > .inner {
        padding: 10px;
    }
    .small-box h3, .small-box p {
        z-index: 5;
    }
    .small-box h3 {
        font-size: 38px;
        font-weight: bold;
        margin: 0 0 10px 0;
        white-space: nowrap;
        padding: 0;
    }
    .small-box p {
        font-size: 15px;
        margin: 0 0 10px;
    }
    .small-box .icon {
        -webkit-transition: all .3s linear;
        -o-transition: all .3s linear;
        transition: all .3s linear;
        position: absolute;
        top: -10px;
        right: 10px;
        z-index: 0;
        font-size: 90px;
        color: rgba(0,0,0,0.15);
    }
    .small-box:hover .icon {
        font-size: 95px;
    }
    .small-box > .small-box-footer {
        position: relative;
        text-align: center;
        padding: 3px 0;
        color: #fff;
        color: rgba(255,255,255,0.8);
        display: block;
        z-index: 10;
        background: rgba(0,0,0,0.1);
        text-decoration: none;
    }
    .small-box > .small-box-footer:hover {
        color: #fff;
        background: rgba(0,0,0,0.15);
    }
    a:hover, a:active, a:focus {
        outline: none;
        text-decoration: none;
        color: #72afd2;
    }
    /* .bg-primary{
        background-color: #3c8dbc !important;
        color: #fff !important;
    }
    .bg-info{
        background-color: #00c0ef !important;
        color: #fff !important;
    }
    .bg-success {
        background-color: #00a65a !important;
        color: #fff !important;
    }
    .bg-warning {
        background-color: #f39c12 !important;
        color: #fff !important;
    }
    .bg-danger {
        background-color: #dd4b39 !important;
        color: #fff !important;
    }
    .bg-navy {
        background-color: #001F3F !important;
        color: #fff !important;
    }
    .bg-teal {
        background-color: #39CCCC !important;
        color: #fff !important;
    }
    .bg-purple {
        background-color: #605ca8 !important;
        color: #fff !important;
    }
    .bg-orange {
        background-color: #ff851b !important;
        color: #fff !important;
    }
    .bg-maroon {
        background-color: #D81B60 !important;
        color: #fff !important;
    } */
</style>
