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
                <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Marca
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    @if (is_array($marcas ?? ''))
                        @foreach($marcas as $marca)
                            <a class="dropdown-item" href="/filtroMarca{{ $marca['id'] }}">{{ $marca['nom'] }}</a>
                        @endforeach
                    @endif
                </div>
            </div>

            <div class="dropdown p-3">
                <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Color
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    @if (is_array($colors ?? ''))
                        @foreach($colors as $color)
                            <a class="dropdown-item" href="/filtroColor{{ $color['id'] }}">{{ $color['nom'] }}</a>
                        @endforeach
                    @endif
                </div>
            </div>

            <div class="dropdown p-3">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ordenar per
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="ordenar_preu_desc" id="preu_asc" name="preu_asc">Preu major</a>
                    <a class="dropdown-item" href="ordenar_preu_asc" id="preu_desc" name="preu_desc">Preu menor</a>
                    <a class="dropdown-item" href="ordenar_nom_asc" id="nom_asc" name="nom_asc">Nom A-Z</a>
                    <a class="dropdown-item" href="ordenar_nom_desc" id="nom_asc" name="nom_asc">Nom Z-A</a>
                </div>
            </div>

        </div>
        <hr>
        <div class="row">
            @if (is_array($productos))
                @foreach($productos as $producto)
                    <div class="col-12 col-md-6 col-lg-3 py-3">
                        <div class="row py-2">
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
    </div>

@endsection

