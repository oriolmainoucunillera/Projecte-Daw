<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;


class AdminController
{

    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function administrador()
    {
        return view('administrador');
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
