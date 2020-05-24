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
        $this->middleware('auth');

    }

    public function index()
    {
        $url = $_ENV['API_URL'];
        $respuesta2 = Http::withHeaders([
            'Content-Type' => 'application/json',
            'X-Requested-With' => 'XMLHttpRequest'
        ])->get($url . 'productes/nous/12');
        $productos = $respuesta2->json();

        $respuesta3 = Http::withHeaders([
            'Content-Type' => 'application/json',
            'X-Requested-With' => 'XMLHttpRequest'
        ])->get($url . 'productes/getUltimesUnitats');
        $ultimesUnitats = $respuesta3->json();

        $respuesta3 = Http::withHeaders([
            'Content-Type' => 'application/json',
            'X-Requested-With' => 'XMLHttpRequest'
        ])->get($url . 'productes/getUltimesUnitats2');
        $ultimesUnitats2 = $respuesta3->json();

        return view('home', compact('productos', 'ultimesUnitats', 'ultimesUnitats2'));
    }

    public function buscador(Request $request)
    {
        $nom = $request['buscador'];
        $url = $_ENV['API_URL'];
        $respuesta2 = Http::withHeaders([
            'Content-Type' => 'application/json',
            'X-Requested-With' => 'XMLHttpRequest'
        ])->get($url . 'buscador/' . $nom);
        $productos = $respuesta2->json();

        return view('categoria', compact('productos'));
    }

}
