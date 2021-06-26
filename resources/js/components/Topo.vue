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
                    <li  class="nav-item" v-for="(item, index) in menus" :key="index">
                        <a class="nav-link" v-bind:href="item.url">{{ item.menu }}</a>
                    </li>
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
        props:['titulo', 'url', 'logo', 'menus']
    }
</script>

<style>
    .bg-red {
        background-color: #d91e18 !important;
        color: #fff;
    }
</style>

