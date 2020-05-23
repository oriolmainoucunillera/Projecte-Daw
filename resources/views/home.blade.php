@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12"><h3><b>Lo más nuevo</b></h3></div>
        </div>
        <div class="row">
            @if (is_array($productos ?? ''))
                @foreach($productos as $producto)
                    <div class="col-12 col-md-6 col-lg-3 py-3">
                        <div class="row">
                            <div class="col-8 col-lg-12">
                                <img src="/images/{{ $producto['imatge'] }}" class="img-fluid pb-2" alt="Responsive image">
                            </div>
                            <div class="col-4 col-lg-12">
                                <div class="row">
                                    <div class="col-12"><h5>{{ $producto['nom'] }}</h5></div>
                                    <div class="col-12"><p>{{ $producto['descripcio_curta'] }}</p></div>
                                    @if($producto['oferta'] == 0)
                                        <div class="col-12"><h4><b>{{ $producto['preuOferta'] }}€</b></h4></div>
                                    @else
                                        <div class="col-6" style="color: red"><h4><b><strike>{{ $producto['preu'] }}€</strike></b></h4></div>
                                        <div class="col-6"><h4><b>{{ $producto['preuOferta'] }}€</b></h4></div>
                                    @endif
                                    <div class="col-12"><a class="btn btn-outline-success my-2 my-sm-0" href="detalle{{ $producto['id'] }}">Detalle</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

        <hr>
        <div class="row">
            <div class="col-9"><h3><b>Últimas unidades</b></h3></div>
        </div>
        <div class="row">
            <div id="carouselExampleControls" class="carousel slide w-100" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row  carousel-class">
                            @if (is_array($ultimesUnitats ?? ''))
                                @foreach($ultimesUnitats as $ultimaUnitat)
                                    <div class="col-6 col-md-6 col-lg-3">
                                        <a href="/detalle{{ $ultimaUnitat['id'] }}"><img src="/images/{{  $ultimaUnitat['imatge'] }}" alt=""/></a>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row carousel-class">
                            @if (is_array($ultimesUnitats2 ?? ''))
                                @foreach($ultimesUnitats2 as $ultimaUnitat2)
                                    <div class="col-6 col-md-6 col-lg-3">
                                        <a href="/detalle{{ $ultimaUnitat2['id'] }}"><img src="/images/{{  $ultimaUnitat2['imatge'] }}" alt=""/></a>
                                    </div>
                                @endforeach
                            @endif
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

