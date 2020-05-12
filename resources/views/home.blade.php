@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12"><h3><b>Lo último</b></h3></div>
        </div>
        <div class="row">
            @foreach($productos as $producto)
            <div class="col-12 col-md-6 col-lg-3 py-3">
                <div class="row">
                    <div class="col-8 col-lg-12">
                        <img src="img2.jpg" class="img-fluid pb-2" alt="Responsive image">
                    </div>
                    <div class="col-4 col-lg-12">
                        <div class="row">
                            <div class="col-12"><h5>{{ $producto['nom'] }}</h5></div>
                            <div class="col-12"><p>{{ $producto['descripcio_curta'] }}</p></div>
                            <div class="col-12"><h4><b>{{ $producto['preu'] }}€</b></h4></div>
                            <div class="col-12"><a class="btn btn-outline-success my-2 my-sm-0" href="/detalle/{{ $producto['id'] }}">Detalle</a></div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
    <!--
            <div class="col-12 col-md-6 col-lg-3 py-3">
                <div class="row">
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
                <div class="row">
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
                <div class="row">
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
                <div class="row">
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
                <div class="row">
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
-->
        </div>

        <hr>
        <div class="row">
            <div class="col-9"><h3><b>Top ventas</b></h3></div>
        </div>
        <div class="row">
            <div id="carouselExampleControls" class="carousel slide w-100" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row  carousel-class">
                            <div class="col-6 col-md-6 col-lg-3">
                                <a href="#"><img src="img1.jpg" alt=""/></a>
                            </div>
                            <div class="col-6 col-md-6 col-lg-3">
                                <a href="#"><img src="img2.jpg" alt=""/></a>
                            </div>
                            <div class="col-6 col-md-6 col-lg-3">
                                <a href="#"><img src="img1.jpg" alt=""/></a>
                            </div>
                            <div class="col-6 col-md-6 col-lg-3">
                                <a href="#"><img src="img2.jpg" alt=""/></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row carousel-class">
                            <div class="col-6 col-md-6 col-lg-3">
                                <a href="#"><img src="img2.jpg" alt=""/></a>
                            </div>
                            <div class="col-6 col-md-6 col-lg-3">
                                <a href="#"><img src="img1.jpg" alt=""/></a>
                            </div>
                            <div class="col-6 col-md-6 col-lg-3">
                                <a href="#"><img src="img2.jpg" alt=""/></a>
                            </div>
                            <div class="col-6 col-md-6 col-lg-3">
                                <a href="#"><img src="img1.jpg" alt=""/></a>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </div>

@endsection

