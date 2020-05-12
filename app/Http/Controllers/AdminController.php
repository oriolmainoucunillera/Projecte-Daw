<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class AdminController
{

    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function administrador()
    {
        $respuesta2 = Http::get('http://127.0.0.1:8000/api/admin/allProductes');
        $productos = $respuesta2->json();
        return view('administrador', compact('productos'));
    }

    public function formAddProducto()
    {
        return view('formAddProducto');
    }

    public function formEditProducto()
    {
        return view('formEditProducto');
    }

    public function deleteProducto()
    {
        return redirect("/administrador");
    }

    public function formEditUsuario()
    {
        return view('formEditUsuario');
    }

}
