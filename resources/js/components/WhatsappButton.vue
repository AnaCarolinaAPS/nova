<template>
    <div>
        <a v-bind:href="'https://api.whatsapp.com/send?phone='+this.celular+'&text='+this.texto+this.titulo" class="wap-btn" target="_blank">
            <i class="fa fa-whatsapp my-float"></i> Más informaciones
        </a>
    </div>
</template>

<script>
    export default {
        props:['celular', 'texto', 'titulo'],
        data:function(){
            return {
                texturl: this.texto,
                variavelurl: this.titulo,
            }
        },
        computed:{
            defineLink:function() {
                return "https://api.whatsapp.com/send?phone="+this.celular+"&text="+this.texturl+this.variavelurl;
            }
        }
    }
</script>

<style>
    .wap-btn {
        background-color:#25d366;
        color:#FFF;
        border-radius:30px;
        text-align:center;
        font-size: 14pt;
        padding: 5px 10px;
        box-shadow: 2px 2px 3px #999;
    }
    .wap-btn:hover {
        text-decoration: none;
        color:#FFF;
        background-color:#1ea952;
    }
</style>
