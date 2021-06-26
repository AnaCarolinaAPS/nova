<template>
    <!-- Modal -->
    <div class="modal fade" v-bind:id="nome" tabindex="-1" v-bind:aria-labelledby="nome" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ titulo }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <slot></slot>
                </div>
                <div class="modal-footer">
                    <slot name="botoes"></slot>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:['nome', 'titulo']
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
