<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }


    public function index()
    {

        $respuesta2 = Http::get('http://127.0.0.1:8000/api/productes/nous/12');
        $productos = $respuesta2->json();

        $respuesta3 = Http::get('http://127.0.0.1:8000/api/productes/getUltimesUnitats');
        $ultimesUnitats = $respuesta3->json();

        $respuesta3 = Http::get('http://127.0.0.1:8000/api/productes/getUltimesUnitats2');
        $ultimesUnitats2 = $respuesta3->json();

        return view('home', compact('productos', 'ultimesUnitats', 'ultimesUnitats2'));
    }

    public function buscador(Request $request) {
        $nom = $request['buscador'];
        $respuesta2 = Http::get('http://127.0.0.1:8000/api/buscador/'. $nom);
        $productos = $respuesta2->json();

        return view('categoria', compact('productos'));
    }

}
