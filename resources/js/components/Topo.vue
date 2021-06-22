<template>
    <nav class="navbar navbar-expand-md navbar-dark bg-red shadow-sm">
        <div class="container">
            <a class="navbar-brand" v-bind:href="url">
                <!-- {{ titulo }} -->
                <img v-bind:src="logo" v-bind:alt="titulo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <!-- <li class="nav-item"><a class="nav-link" href="#">Institucional</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="#">Nuestra Empresa</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <slot></slot>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
    export default {
        props:['titulo', 'url', 'logo']
    }
</script>

<style>
    .bg-red {
        background-color: #d91e18 !important;
        color: #fff;
    }
</style>

