<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $listaBanner = json_encode([
        // ["id" => 1, "url" => "https://www.youtube.com/embed/6hgVihWjK2c?rel=0", "texto" => "Teste 1"],
        // ["id" => 2, "url" => "https://player.vimeo.com/video/84910153?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;color=ffffff", "text" => "Teste 2"],
        ["id" => 1, "url" => "https://images.unsplash.com/photo-1506260408121-e353d10b87c7?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&w=1600&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ", "texto" => "Teste 1"],
        ["id" => 2, "url" => "https://images.unsplash.com/photo-1523712999610-f77fbcfc3843?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&w=1600&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ", "text" => "Teste 2"],
        ["id" => 3, "url" => "https://images.unsplash.com/photo-1526080676457-4544bf0ebba9?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&w=1600&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ", "text" => "Teste 2"],
        // ["id" => 4, "url" => "", "text" => "Teste 2"],
    ]);
    $listaCategorias = json_encode([
        ["id" => 0, "titulo" => "Relojes Inteligentes", "icone" => "img/categorias/1.png", "url" => ""],
        ["id" => 1, "titulo" => "Tv y Accesorios", "icone" => "img/categorias/2.png", "url" => ""],
        ["id" => 2, "titulo" => "Informática", "icone" => "img/categorias/3.png", "url" => ""],
        ["id" => 3, "titulo" => "Smartphone", "icone" => "img/categorias/4.png", "url" => ""],
        ["id" => 4, "titulo" => "Tablet", "icone" => "img/categorias/5.png", "url" => ""],
        ["id" => 5, "titulo" => "Auriculares", "icone" => "img/categorias/6.png", "url" => ""],
        ["id" => 6, "titulo" => "Cargadores y Cables", "icone" => "img/categorias/7.png", "url" => ""],
        ["id" => 7, "titulo" => "Salud", "icone" => "img/categorias/8.png", "url" => ""],
        ["id" => 8, "titulo" => "Hogar", "icone" => "img/categorias/9.png", "url" => ""],
        ["id" => 9, "titulo" => "Vape", "icone" => "img/categorias/10.png", "url" => ""],
        ["id" => 10, "titulo" => "Games", "icone" => "img/categorias/11.png", "url" => ""],
        ["id" => 11, "titulo" => "Belleza", "icone" => "img/categorias/12.png", "url" => ""],
        ["id" => 12, "titulo" => "Cámaras y Drones", "icone" => "img/categorias/13.png", "url" => ""],
        ["id" => 13, "titulo" => "Herramientas", "icone" => "img/categorias/14.png", "url" => ""],
        ["id" => 14, "titulo" => "Cosmeticos", "icone" => "img/categorias/15.png", "url" => ""],
    ]);
    $listaProductos = json_encode([
        ["id" => 0, "idCategoria" => 6, "destacado" => 1, "titulo" => "CABLE RECRSI CA-13 IOS", "precio" => "500.000 gs","url" => "img/productos/CABLE RECRSI CA-13 IOS.jpg"],
        ["id" => 1, "idCategoria" => 6, "destacado" => 0, "titulo" => "CABLE RECRSI CA-13 MICRO USB", "precio" => "600.000 gs","url" => "img/productos/CABLE RECRSI CA-13 MICRO USB.jpg"],
        ["id" => 2, "idCategoria" => 6, "destacado" => 0, "titulo" => "CABLE RECRSI CA-13 TIPO C", "precio" => "520.000 gs","url" => "img/productos/CABLE RECRSI CA-13 TIPO C.png"],
        ["id" => 3, "idCategoria" => 6, "destacado" => 0, "titulo" => "CABLE RECRSI CA-33", "precio" => "550.000 gs","url" => "img/productos/CABLE RECRSI CA-33.jpg"],
        ["id" => 4, "idCategoria" => 6, "destacado" => 0, "titulo" => "CABLE RECRSI CA-221 IOS", "precio" => "501.000 gs","url" => "img/productos/CABLE RECRSI CA-221 IOS.jpg"],
        ["id" => 5, "idCategoria" => 6, "destacado" => 0, "titulo" => "CABLE RECRSI CA-221 TIPO C", "precio" => "500.000 gs","url" => "img/productos/CABLE RECRSI CA-221 TIPO C.jpg"],
        ["id" => 6, "idCategoria" => 6, "destacado" => 1, "titulo" => "CARGADOR RECRSI  DE GARGA RAPIDA CH-29", "precio" => "200.000 gs","url" => "img/productos/CARGADOR RECRSI  DE GARGA RAPIDA CH-29.jpg"],
        ["id" => 7, "idCategoria" => 6, "destacado" => 0, "titulo" => "CARGADOR RECRSI CH-14 (CARGA RAPIDA) 2", "precio" => "100.000 gs","url" => "img/productos/CARGADOR RECRSI CH-14 (CARGA RAPIDA) 2.jpg"],
        ["id" => 8, "idCategoria" => 10, "destacado" => 1, "titulo" => "JOYSTICK GAT QTJGS02 2", "precio" => "550.000 gs","url" => "img/productos/JOYSTICK GAT QTJGS02 2.jpg"],
        ["id" => 9, "idCategoria" => 10, "destacado" => 1, "titulo" => "JOYSTICK GAT QTJGS02", "precio" => "560.000 gs","url" => "img/productos/JOYSTICK GAT QTJGS02.jpg"],
        ["id" => 10, "idCategoria" => 7, "destacado" => 1, "titulo" => "NEBUKIZADOR PORTATIL MEGA STAR", "precio" => "800.000 gs","url" => "img/productos/NEBUKIZADOR PORTATIL MEGA STAR.jpg"],
        ["id" => 11, "idCategoria" => 7, "destacado" => 1, "titulo" => "NEBULIZADOR MEGA STAR", "precio" => "900.000 gs","url" => "img/productos/NEBULIZADOR MEGA STAR.jpg"],
    ]);
    $primeraCategoria = 0;
    return view('main', compact('listaBanner', 'listaCategorias', 'primeraCategoria', 'listaProductos'));

    // return view('main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
