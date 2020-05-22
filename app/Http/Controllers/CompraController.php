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

    public function comprar(Request $request) {
        $url = $_ENV['API_URL'];

        $response = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->post($url . 'comprar', [
            'cantidad' => $request->cantidad,
            'producte_id' => $request->producte_id,
            'user_id' => '1',
        ]);


        return redirect()->route('home')->with('message', 'Compra realitzada correctament');
    }

}
