<template>
    <div v-bind:class="defineClass">
        <div class="card-header">
            <h3 class="card-title">{{ titulo }}</h3>

            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
            <slot></slot>
        </div>
        <div class="card-footer"  v-if="hasFooterSlot">
            <slot name="footer"></slot>
            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
        </div>
    </div>
</template>

<script>
    export default {
        props:['titulo', 'classe'],
        computed:{
            defineClass: function() {
                return "card " + (this.classe || "");
            },
            hasFooterSlot() {
                return !!this.$slots.footer
            }
        }
    }
</script>

<style>
    .card {
        box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);
        margin-bottom: 1rem;
        position: relative;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0,0,0,.125);
        border-radius: .25rem;
    }

    .card-title {
        margin-bottom: 0px;
    }
    .card-footer {
        padding: .75rem 1.25rem;
        background-color: rgba(0,0,0,.03);
        border-top: 0 solid rgba(0,0,0,.125);
    }
    .card-header {
        background-color: transparent;
        border-bottom: 1px solid rgba(0,0,0,.125);
        padding: .75rem 1.25rem;
        position: relative;
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem;
    }
</style>
