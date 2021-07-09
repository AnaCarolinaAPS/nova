<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        $listaMigalhas = json_encode([
            ["titulo" => "Inicio", "url" => ""],
        ]);
        $split = true;
        return view('admin.home', compact('listaMigalhas', 'split'));
    }
}
