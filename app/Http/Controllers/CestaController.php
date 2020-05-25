<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Ramsey\Uuid\Generator\RandomBytesGenerator;

class CestaController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth');
    }

    public function getAll()
    {
        $auth = $_ENV['AUTH_URL'];

        $respuesta2 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($auth . 'cistells/all');
        $productos = $respuesta2->json();

        $preuTotal = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($auth . 'preuCistella');

        return view('cesta', compact('productos', 'preuTotal'));
    }

    public function random()
    {
        $random = random_int(0, 100000);
        return $random;
    }

    public function afegirCarrito(Request $request)
    {

        $auth = $_ENV['AUTH_URL'];

        $nElementos = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($auth . 'elementsCistella');
        $nElementos2 = $nElementos->json();

        $identificador = null;
        if ($nElementos2 == 0) {
            $variableRandom = $this->random();
            $identificador = $variableRandom;
        } else {
            $consulta = Http::withToken($_COOKIE["token"])
                ->withHeaders([
                    'Content-Type' => 'application/json',
                    'X-Requested-With' => 'XMLHttpRequest'
                ])->get($auth . 'getCistellaId');
            $identificador = $consulta->json();
        }

        $preuFinal = $request->cantidad * $request->preuOferta;


        $response = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get('http://127.0.0.1:8000/api/auth/user');
        $user = $response->json();
        $user_id = $user['id'];

        $response = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->post($auth . 'afegirCarrito', [
                'cistella_id' => $identificador,
                'user_id' => $user_id,
                'producte_id' => $request->producte_id,
                'preu' => $request->preuOferta,
                'quantitat' => $request->cantidad,
                'preu_final' => $preuFinal
            ]);

        return redirect()->route('home')->with('message', 'Producte afegit correctament');
    }

    public function borrarProducto($id)
    {
        $auth = $_ENV['AUTH_URL'];

        $response = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->post($auth . 'eliminarProductoCarrito/' . $id);
        return redirect()->route('cesta');
    }

    public function cestaDetalle($id)
    {
        $url = $_ENV['API_URL'];

        $respuesta2 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($url . 'cistells' . $id);
        $producto = $respuesta2->json();
        return view('cestaDetalle', compact('producto'));
    }

}
