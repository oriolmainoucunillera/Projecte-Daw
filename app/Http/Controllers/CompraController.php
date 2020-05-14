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
        $response = Http::post('http://127.0.0.1:8000/api/comprar', [
            'cantidad' => $request->cantidad,
            'producte_id' => $request->producte_id,
            'user_id' => '1',
        ]);


        return redirect()->route('home')->with('message', 'Compra realitzada correctament');
    }

}
