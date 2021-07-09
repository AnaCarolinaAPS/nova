@extends('layouts.adminlte')

@section('content')
<page-component>
    <breadcrumb-component v-bind:lista="{{ $listaMigalhas }}" titulo="Categorias"></breadcrumb-component>
    <panel-component titulo="Lista de Categorias" classe="card-default">
        @if ($errors->all())
            <alert-component classe="bg-danger">
                @foreach ( $errors->all() as $key=>$value)
                    {{ $value }}<br>
                @endforeach
            </alert-component>
            {{-- <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                @foreach ( $errors->all() as $key=>$value)
                <li> {{ $value }} </li>
                @endforeach
            </div> --}}
        @endif
        <tabela-lista-component
            btncolor="btn btn-danger"
            v-bind:titulos="['Nome', 'Icono', 'Icono Activo', 'Inactivo']"
            img_url="{{url('/img')}}"
            v-bind:itens="{{ $listaCategorias }}"
            ordem="asc" ordemcol="1"
            criar="adicionar" editar="editar" deletar="deletar" token="{{ csrf_token() }}"
            modal="sim"
        >
        </tabela-lista-component>
    </panel-component>
</page-component>

<modal-component nome="adicionar" titulo="Nueva Categoria">
    <form-component id="formAdicionar" css="" action="#" method="post" enctype="" token="{{ csrf_token() }}">
        <div class="row">
            <div class="col-md-6 text-center">
                <img src="{{ Session::get('newlogo') }}">
                <div class="form-group" style="margin-top: 5px;">
                    <label for="icone">Icono</label>
                    <input type="text" class="form-control" id="icone" name="icone" placeholder="Imagem" value="{{ old('icone') }}">
                    {{-- <input type="file" name="icone" class="form-control"> --}}
                </div>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ Session::get('newlogo') }}">
                <div class="form-group" style="margin-top: 5px;">
                    <label for="icone_ativo">Icono Activo</label>
                    <input type="text" class="form-control" id="icone_ativo" name="icone_ativo" placeholder="Imagem" value="{{ old('icone_ativo') }}">
                    {{-- <input type="file" name="icone_ativo" class="form-control"> --}}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="nome">Nombre</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nombre de la Categoria" value="{{ old('nombre') }}" required>
                </div>
            </div>
            <input type="checkbox" id="ativo" name="ativo" checked style="display: none;">
        </div>
    </form-component>
    <span slot="botoes">
        <button form="formAdicionar" class="btn btn-info">Adicionar</button>
    </span>
</modal-component>

<modal-component nome="editar" titulo="Editar Categoría">
    <form-component id="formEditar" css="" action="#" method="post" enctype="" token="{{ csrf_token() }}">
        <div class="row">
            <div class="col-md-6 text-center">
                <img src="{{ Session::get('newlogo') }}">
                <div class="form-group" style="margin-top: 5px;">
                    <label for="icone">Icono</label>
                    <input type="text" class="form-control" id="icone" name="icone" placeholder="Imagem" value="{{ old('icone') }}" v-model="$store.state.item.icone">
                    {{-- <input type="file" name="icone" class="form-control"> --}}
                </div>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ Session::get('newlogo') }}">
                <div class="form-group" style="margin-top: 5px;">
                    <label for="icone_ativo">Icono Activo</label>
                    <input type="text" class="form-control" id="icone_ativo" name="icone_ativo" placeholder="Imagem" value="{{ old('icone_ativo') }}" v-model="$store.state.item.icone_ativo">
                    {{-- <input type="file" name="icone_ativo" class="form-control"> --}}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="nome">Nombre</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nombre de la Categoria" value="{{ old('nombre') }}" v-model="$store.state.item.nome" required>
                </div>
            </div>
            <input type="checkbox" id="ativo" name="ativo" checked style="display: none;">
        </div>
    </form-component>
    <span slot="botoes">
        <modal-link-component tipo="button" nome="deletar" titulo="Deletar" css="btn btn-danger"></modal-link-component>
        <button form="formEditar" class="btn btn-info">Guardar</button>
    </span>
</modal-component>

<modal-component nome="deletar" v-bind:titulo="'Deletar a Categoria: '+ $store.state.item.nome">
    <p>Deseja Deletar?</p>
    <span slot="botoes">
        <form v-bind:id="$store.state.item.id" action="#" method="post">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-danger">Deletar</button>
        </form>
    </span>
</modal-component>
@endsection
