<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CompraController
{

    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function cesta()
    {
        return view('cesta');
    }

    public function comprar(Request $request)
    {
        $url = $_ENV['API_URL'];

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
            ])->post($url . 'comprar', [
                'cantidad' => $request->cantidad,
                'producte_id' => $request->producte_id,
                'user_id' => $user_id,
            ]);


        return redirect()->route('home')->with('message', 'Compra realitzada correctament');
    }

}
