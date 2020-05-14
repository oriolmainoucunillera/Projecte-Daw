<?php


namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use mysql_xdevapi\Session;


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

        $respuesta3 = Http::get('http://127.0.0.1:8000/api/marca/all');
        $marcas = $respuesta3->json();

        $respuesta5 = Http::get('http://127.0.0.1:8000/api/color/all');
        $colors = $respuesta5->json();
        return view('categoria', compact('productos','marcas', 'colors'));
    }

    public function ofertas()
    {
        $respuesta2 = Http::get('http://127.0.0.1:8000/api/productes_oferta');
        $productos = $respuesta2->json();

        $respuesta3 = Http::get('http://127.0.0.1:8000/api/marca/all');
        $marcas = $respuesta3->json();

        $respuesta5 = Http::get('http://127.0.0.1:8000/api/color/all');
        $colors = $respuesta5->json();
        return view('categoria', compact('productos', 'marcas', 'colors'));
    }

    public function snows()
    {
        $respuesta2 = Http::get('http://127.0.0.1:8000/api/productes/categoria/1');
        $productos = $respuesta2->json();

        $respuesta3 = Http::get('http://127.0.0.1:8000/api/marca/all');
        $marcas = $respuesta3->json();

        $respuesta5 = Http::get('http://127.0.0.1:8000/api/color/all');
        $colors = $respuesta5->json();
        return view('categoria', compact('productos','marcas', 'colors'));
    }

    public function esquis()
    {
        $respuesta2 = Http::get('http://127.0.0.1:8000/api/productes/categoria/2');
        $productos = $respuesta2->json();

        $respuesta3 = Http::get('http://127.0.0.1:8000/api/marca/all');
        $marcas = $respuesta3->json();

        $respuesta5 = Http::get('http://127.0.0.1:8000/api/color/all');
        $colors = $respuesta5->json();
        return view('categoria', compact('productos','marcas', 'colors'));
    }

    public function botas()
    {
        $respuesta2 = Http::get('http://127.0.0.1:8000/api/productes/categoria/3');
        $productos = $respuesta2->json();

        $respuesta3 = Http::get('http://127.0.0.1:8000/api/marca/all');
        $marcas = $respuesta3->json();

        $respuesta5 = Http::get('http://127.0.0.1:8000/api/color/all');
        $colors = $respuesta5->json();
        return view('categoria', compact('productos','marcas', 'colors'));
    }

    public function ropa()
    {
        $respuesta2 = Http::get('http://127.0.0.1:8000/api/productes/categoria/4');
        $productos = $respuesta2->json();

        $respuesta3 = Http::get('http://127.0.0.1:8000/api/marca/all');
        $marcas = $respuesta3->json();

        $respuesta5 = Http::get('http://127.0.0.1:8000/api/color/all');
        $colors = $respuesta5->json();
        return view('categoria', compact('productos','marcas', 'colors'));
    }

    public function detalle($id)
    {
        $respuesta2 = Http::get('http://127.0.0.1:8000/api/producte'.$id);
        $producto = $respuesta2->json();

        return view('detalle', compact('producto'));
    }

    public function ordenar($orden) {
        $respuesta2 = Http::get('http://127.0.0.1:8000/api/ordenar/'.$orden);
        $productos = $respuesta2->json();

        $respuesta3 = Http::get('http://127.0.0.1:8000/api/marca/all');
        $marcas = $respuesta3->json();

        $respuesta5 = Http::get('http://127.0.0.1:8000/api/color/all');
        $colors = $respuesta5->json();
        return view('categoria', compact('productos', 'marcas', 'colors'));
    }

    public function filtroMarca($marca_id) {
        $respuesta2 = Http::get('http://127.0.0.1:8000/api/marca'.$marca_id);
        $productos = $respuesta2->json();

        $respuesta3 = Http::get('http://127.0.0.1:8000/api/marca/all');
        $marcas = $respuesta3->json();

        $respuesta5 = Http::get('http://127.0.0.1:8000/api/color/all');
        $colors = $respuesta5->json();
        return view('categoria', compact('productos', 'marcas', 'colors'));
    }

    public function filtroColor($color_id) {
        $respuesta2 = Http::get('http://127.0.0.1:8000/api/color'.$color_id);
        $productos = $respuesta2->json();

        $respuesta3 = Http::get('http://127.0.0.1:8000/api/marca/all');
        $marcas = $respuesta3->json();

        $respuesta5 = Http::get('http://127.0.0.1:8000/api/color/all');
        $colors = $respuesta5->json();
        return view('categoria', compact('productos', 'colors', 'marcas'));
    }
}
