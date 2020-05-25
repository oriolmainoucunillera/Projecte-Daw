<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class comandaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function realizarCompra()
    {
        $auth = $_ENV['AUTH_URL'];

        $respuesta2 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($auth . 'cistells/all');
        $productos = $respuesta2->json();

        foreach ($productos as $producto) {
            $respuesta2 = Http::withToken($_COOKIE["token"])
                ->withHeaders([
                    'Content-Type' => 'application/json',
                    'X-Requested-With' => 'XMLHttpRequest'
                ])->post($auth . 'afegirComanda', [
                    'cistella_id' => $producto['cistella_id'],
                    'user_id' => $producto['user_id'],
                    'producte_id' => $producto['producte_id'],
                    'preu' => $producto['preu'],
                    'quantitat' => $producto['quantitat'],
                    'preu_final' => $producto['preu_final']
                ]);
        }

        foreach ($productos as $producto) {
            $response = Http::withToken($_COOKIE["token"])
                ->withHeaders([
                    'Content-Type' => 'application/json',
                    'X-Requested-With' => 'XMLHttpRequest'
                ])->post($auth . 'eliminarProductoCarrito/' . $producto['id']);
        }

        return redirect()->route('home')->with('message', 'Producte comanda realitzada');


    }
}
