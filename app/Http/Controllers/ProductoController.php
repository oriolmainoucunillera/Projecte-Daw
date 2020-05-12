<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ProductoController
{

    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function categoria()
    {
        $respuesta2 = Http::get('http://127.0.0.1:8000/api/productes/all');
        $productos = $respuesta2->json();
        return view('categoria', compact('productos'));
    }

    public function ofertas()
    {
        $respuesta2 = Http::get('http://127.0.0.1:8000/api/productes_oferta');
        $productos = $respuesta2->json();
        return view('categoria', compact('productos'));
    }

    public function snows()
    {
        $respuesta2 = Http::get('http://127.0.0.1:8000/api/productes/categoria/1');
        $productos = $respuesta2->json();
        return view('categoria', compact('productos'));
    }

    public function esquis()
    {
        $respuesta2 = Http::get('http://127.0.0.1:8000/api/productes/categoria/2');
        $productos = $respuesta2->json();
        return view('categoria', compact('productos'));
    }

    public function botas()
    {
        $respuesta2 = Http::get('http://127.0.0.1:8000/api/productes/categoria/3');
        $productos = $respuesta2->json();
        return view('categoria', compact('productos'));
    }

    public function ropa()
    {
        $respuesta2 = Http::get('http://127.0.0.1:8000/api/productes/categoria/4');
        $productos = $respuesta2->json();
        return view('categoria', compact('productos'));
    }

    public function detalle($id)
    {
        $respuesta2 = Http::get('http://127.0.0.1:8000/api/productes/'.$id);
        $producto = $respuesta2->json();
        return view('detalle', compact('producto'));
    }
}
