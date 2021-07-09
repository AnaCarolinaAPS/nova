<template>
    <div v-bind:class="defineClass">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4 v-if="titulo">
            <i v-bind:class="defineIcone"></i>
            {{titulo}}
        </h4>
        <slot></slot>
    </div>
</template>

<script>
    export default {
        props:['classe', 'titulo', 'icone'],
        computed:{
            defineClass: function() {
                return "alert alert-dismissable " + (this.classe || "bg-primary");
            },
            defineIcone: function() {
                return "icon " + (this.icone || "fa fa-info");
            },
        }
    }
</script>

<style>
    .alert {
        padding: 15px;
        margin-bottom: 20px;
        border: 0 solid rgba(0,0,0,.125);
        border-radius: .25rem;
        box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);
    }
    .alert .close {
        color: #000;
        opacity: .2;
        filter: alpha(opacity=20);
    }
    .alert-dismissable {
        padding-right: 35px;
    }
    .alert-dismissable .close, .alert-dismissible .close {
        position: relative;
        top: -2px;
        right: -21px;
        color: inherit;
    }
    button.close {
        padding: 0;
        cursor: pointer;
        background: 0 0;
        border: 0;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }
    .close {
        float: right;
        font-size: 21px;
        font-weight: 700;
        line-height: 1;
        color: #000;
        text-shadow: 0 1px 0 #fff;
        filter: alpha(opacity=20);
        opacity: .2;
    }
    .alert .icon {
        margin-right: 10px;
    }
    .alert h4 {
        font-size: 18px;
        font-weight: 600;
        font-family: 'Source Sans Pro',sans-serif;
    }
    .alert p {
        margin-bottom: 0;
    }
    .bg-primary{
        background-color: #3c8dbc !important;
        color: #fff !important;
        border-color: #357ca5;
    }
    .bg-info{
        background-color: #00c0ef !important;
        color: #fff !important;
        border-color: #0097bc;
    }
    .bg-success {
        background-color: #00a65a !important;
        color: #fff !important;
        border-color: #00733e;
    }
    .bg-warning {
        background-color: #f39c12 !important;
        color: #fff !important;
        border-color: #c87f0a;
    }
    .bg-danger {
        background-color: #dd4b39 !important;
        color: #fff !important;
        border-color: #c23321;
    }
    .bg-navy {
        background-color: #193552 !important;
        color: #fff !important;
        border-color: #001a35;
    }
    .bg-teal {
        background-color: #39CCCC !important;
        color: #fff !important;
        border-color: #30bbbb;
    }
    .bg-purple {
        background-color: #605ca8 !important;
        color: #fff !important;
        border-color: #555299;
    }
    .bg-orange {
        background-color: #ff851b !important;
        color: #fff !important;
        border-color: #e57718;
    }
    .bg-maroon {
        background-color: #D81B60 !important;
        color: #fff !important;
        border-color: #ac154c;
    }
</style>
