<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;


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
}
