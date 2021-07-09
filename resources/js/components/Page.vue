<template>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div v-bind:class="defineTamanho">
                <slot></slot>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['tamanho'],
        computed: {
            defineTamanho: function() {
                if (this.tamanho >= 12) {
                    return "col-md-12";
                }
                if (this.tamanho <= 4) {
                    return "col-md-4";
                }
                if (!this.tamanho) {
                    return "col-md-12";
                }
                return "col-md-"+this.tamanho;
            }
        }
    }
</script>

<style>

</style>
