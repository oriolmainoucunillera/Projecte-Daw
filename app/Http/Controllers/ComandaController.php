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

        $response = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($auth . 'user');
        $user = $response->json();
        $user_id = $user['id'];

        $respuesta2 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($auth . 'cistella' . $user_id);
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

    public function allComandes() {
        $auth = $_ENV['AUTH_URL'];

        $response = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($auth . 'allComandes');
        $comandes = $response->json();

        return view('comandes', compact('comandes'));
    }
}
