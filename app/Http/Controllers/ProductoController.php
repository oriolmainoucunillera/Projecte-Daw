<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;


class ProductoController
{

    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function categoria()
    {
        return view('categoria');
    }

    public function detalle()
    {
        return view('detalle');
    }
}
