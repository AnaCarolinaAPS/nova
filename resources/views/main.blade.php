@extends('layouts.main')

@section('banner')
    <carousel-component v-bind:banner="{{ $listaBanner }}">
    </carousel-component>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- <menu-component ativo="{{ $primeraCategoria }}" v-bind:categorias="{{ $listaCategorias }}">
            </menu-component> --}}
            <lista-component v-bind:itens="{{ $listaProductos }}" ativo="{{ $primeraCategoria }}" v-bind:categorias="{{ $listaCategorias }}"></lista-component>
        </div>
    </div>
</div>
@endsection
