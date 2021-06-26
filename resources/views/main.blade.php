@extends('layouts.main')

@section('banner')
    <carousel-component v-bind:banner="{{ $listaBanner }}">
    </carousel-component>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <lista-component v-bind:itens="{{ $listaProductos }}" ativo="{{ $primeraCategoria }}" v-bind:categorias="{{ $listaCategorias }}"></lista-component>
            <modal-component nome="detalle" v-bind:titulo="$store.state.item.titulo">
                <prod-detalle-component v-bind:item="$store.state.item" celular="{{ $whatsapp }}" texto="{{ $textowp }}"></prod-detalle-component>
            </modal-component>
        </div>
    </div>
</div>
@endsection
