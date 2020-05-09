@extends('layouts.app')

@section('content')
    <div class="container categoria-page">

        <div class="row">
            <div class="col-12">
                <h1>Categoría</h1>
            </div>
        </div>
        <div class="row">
            <div class="dropdown p-3">
                <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Marca
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>

            <div class="dropdown p-3">
                <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Color
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>

            <div class="dropdown p-3">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ordenar per
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>

        </div>
        <hr>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3 py-3">
                <div class="row py-2">
                    <div class="col-8 col-lg-12">
                        <img src="img2.jpg" class="img-fluid pb-2" alt="Responsive image">
                    </div>
                    <div class="col-4 col-lg-12">
                        <div class="row">
                            <div class="col-12"><h3>titulo</h3></div>
                            <div class="col-12"><p>descripcion corta de este producto</p></div>
                            <div class="col-12"><h2><b>76€</b></h2></div>
                            <div class="col-12"><a class="btn btn-outline-success my-2 my-sm-0" href="detalle">Detalle</a></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 py-3">
                <div class="row  py-2">
                    <div class="col-8 col-lg-12">
                        <img src="img2.jpg" class="img-fluid pb-2" alt="Responsive image">
                    </div>
                    <div class="col-4 col-lg-12">
                        <div class="row">
                            <div class="col-12"><h3>titulo</h3></div>
                            <div class="col-12"><p>descripcion corta de este producto</p></div>
                            <div class="col-12"><h2><b>76€</b></h2></div>
                            <div class="col-12"><a class="btn btn-outline-success my-2 my-sm-0">Detalle</a></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 py-3">
                <div class="row  py-2">
                    <div class="col-8 col-lg-12">
                        <img src="img2.jpg" class="img-fluid pb-2" alt="Responsive image">
                    </div>
                    <div class="col-4 col-lg-12">
                        <div class="row">
                            <div class="col-12"><h3>titulo</h3></div>
                            <div class="col-12"><p>descripcion corta de este producto</p></div>
                            <div class="col-12"><h2><b>76€</b></h2></div>
                            <div class="col-12"><a class="btn btn-outline-success my-2 my-sm-0">Detalle</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 py-3">
                <div class="row  py-2">
                    <div class="col-8 col-lg-12">
                        <img src="img2.jpg" class="img-fluid pb-2" alt="Responsive image">
                    </div>
                    <div class="col-4 col-lg-12">
                        <div class="row">
                            <div class="col-12"><h3>titulo</h3></div>
                            <div class="col-12"><p>descripcion corta de este producto</p></div>
                            <div class="col-12"><h2><b>76€</b></h2></div>
                            <div class="col-12"><a class="btn btn-outline-success my-2 my-sm-0">Detalle</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 py-3">
                <div class="row  py-2">
                    <div class="col-8 col-lg-12">
                        <img src="img2.jpg" class="img-fluid pb-2" alt="Responsive image">
                    </div>
                    <div class="col-4 col-lg-12">
                        <div class="row">
                            <div class="col-12"><h3>titulo</h3></div>
                            <div class="col-12"><p>descripcion corta de este producto</p></div>
                            <div class="col-12"><h2><b>76€</b></h2></div>
                            <div class="col-12"><a class="btn btn-outline-success my-2 my-sm-0">Detalle</a></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

