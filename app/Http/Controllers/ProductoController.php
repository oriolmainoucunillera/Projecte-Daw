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
        $url = $_ENV['API_URL'];

        $respuesta2 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($url . 'productes/all');
        $productos = $respuesta2->json();

        $respuesta3 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($url . 'marca/all');
        $marcas = $respuesta3->json();

        $respuesta5 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($url . 'color/all');
        $colors = $respuesta5->json();
        return view('categoria', compact('productos', 'marcas', 'colors'));
    }

    public function oferta()
    {
        $url = $_ENV['API_URL'];

        $respuesta2 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($url . 'getOfertes');
        $productos = $respuesta2->json();


        $respuesta3 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($url . 'marca/all');
        $marcas = $respuesta3->json();

        $respuesta5 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($url . 'color/all');
        $colors = $respuesta5->json();
        return view('categoria', compact('productos', 'marcas', 'colors'));
    }

    public function snows()
    {
        $url = $_ENV['API_URL'];

        $respuesta2 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($url . 'productes/categoria/1');
        $productos = $respuesta2->json();

        $respuesta3 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($url . 'marca/all');
        $marcas = $respuesta3->json();

        $respuesta5 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($url . 'color/all');
        $colors = $respuesta5->json();
        return view('categoria', compact('productos', 'marcas', 'colors'));
    }

    public function esquis()
    {
        $url = $_ENV['API_URL'];

        $respuesta2 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($url . 'productes/categoria/2');
        $productos = $respuesta2->json();

        $respuesta3 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($url . 'marca/all');
        $marcas = $respuesta3->json();

        $respuesta5 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($url . 'color/all');
        $colors = $respuesta5->json();
        return view('categoria', compact('productos', 'marcas', 'colors'));
    }

    public function botas()
    {
        $url = $_ENV['API_URL'];

        $respuesta2 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($url . 'productes/categoria/3');
        $productos = $respuesta2->json();

        $respuesta3 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($url . 'marca/all');
        $marcas = $respuesta3->json();

        $respuesta5 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($url . 'color/all');
        $colors = $respuesta5->json();
        return view('categoria', compact('productos', 'marcas', 'colors'));
    }

    public function ropa()
    {
        $url = $_ENV['API_URL'];

        $respuesta2 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($url . 'productes/categoria/4');
        $productos = $respuesta2->json();

        $respuesta3 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($url . 'marca/all');
        $marcas = $respuesta3->json();

        $respuesta5 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($url . 'color/all');
        $colors = $respuesta5->json();
        return view('categoria', compact('productos', 'marcas', 'colors'));
    }

    public function detalle($id)
    {
        $url = $_ENV['API_URL'];

        $respuesta2 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($url . 'producte' . $id);
        $producto = $respuesta2->json();

        return view('detalle', compact('producto'));
    }

    public function ordenar($orden)
    {
        $url = $_ENV['API_URL'];
        $respuesta2 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($url . 'ordenar/' . $orden);
        $productos = $respuesta2->json();

        $respuesta3 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($url . 'marca/all');
        $marcas = $respuesta3->json();

        $respuesta5 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($url . 'color/all');
        $colors = $respuesta5->json();
        return view('categoria', compact('productos', 'marcas', 'colors'));
    }

    public function filtroMarca($marca_id)
    {
        $url = $_ENV['API_URL'];

        $respuesta2 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($url . 'marca' . $marca_id);
        $productos = $respuesta2->json();

        $respuesta3 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($url . 'marca/all');
        $marcas = $respuesta3->json();

        $respuesta5 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($url . 'color/all');
        $colors = $respuesta5->json();
        return view('categoria', compact('productos', 'marcas', 'colors'));
    }

    public function filtroColor($color_id)
    {
        $url = $_ENV['API_URL'];

        $respuesta2 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($url . 'color' . $color_id);
        $productos = $respuesta2->json();

        $respuesta3 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($url . 'marca/all');
        $marcas = $respuesta3->json();

        $respuesta5 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($url . 'color/all');
        $colors = $respuesta5->json();
        return view('categoria', compact('productos', 'colors', 'marcas'));
    }
}
