@extends('layouts.adminlte')

@section('content')
<page-component>
    <breadcrumb-component v-bind:lista="{{ $listaMigalhas }}" titulo="Dashboard"></breadcrumb-component>
    <div class="row">
        <div class="col-md-3">
            <small-box-component qtd="0" titulo="Productos" url="#" bgcor="bg-info" icone="fas fa-box-open"></small-box-component>
        </div>
        <div class="col-md-3">
            <small-box-component qtd="17" titulo="Categorias" url="#" bgcor="bg-teal" icone="fas fa-tag"></small-box-component>
        </div>
        <div class="col-md-3">
            <small-box-component qtd="0" titulo="Visitantes" url="#" bgcor="bg-success" icone="fas fa-chart-line"></small-box-component>
        </div>
        <div class="col-md-3">
            <small-box-component qtd="1" titulo="Usuários" url="#" bgcor="bg-danger" icone="fa fa-users"></small-box-component>
        </div>
    </div>
</page-component>
@endsection
