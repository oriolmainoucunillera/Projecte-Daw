@extends('layouts.app')

@section('content')
    <div class="container">
        @csrf
        <div class="row">
            <div class="col-12 col-sm-6">
                <img src="/images/{{ $producto['imatge'] }}" class="img-fluid pb-2 zoom" alt="Responsive image">
            </div>
            <div class="col-12 col-sm-6">
                <h3>{{ $producto['nom'] }}</h3>
                <p>{{ $producto['descripcio_llarga'] }}</p>
                <div class="row">
                    <div class="col-4">
                        <!--<form action="/comprar" method="post" enctype="multipart/form-data">-->
                        <form action="/afegirCarrito" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="number" class="form-control" id="cantidad" name="cantidad" value="1"
                                       placeholder="1" max="{{$producto['stock']}}">
                                <input type="hidden" class="form-control" id="producte_id" name="producte_id"
                                       value="{{$producto['id']}}">
                                <input type="hidden" class="form-control" id="preuOferta" name="preuOferta"
                                       value="{{$producto['preuOferta']}}">
                            </div>
                            @if($producto['stock'] > 0)
                                <button type="submit" class="btn btn-outline-success">Añadir al carrito</button>
                            @else
                                <button type="submit" class="btn btn-outline-success" disabled>Añadir al carrito
                                </button>
                                <p style="color: red">Producto no disponible</p>
                            @endif
                        </form>
                    </div>
                    @if($producto['oferta'] == 0)
                        <div class="col-8"><h2><b>{{ $producto['preuOferta'] }}€/ud</b></h2></div>
                    @else
                        <div class="col-4" style="color: red"><h4><b><strike>{{ $producto['preu'] }}€/ud</strike></b>
                            </h4></div>
                        <div class="col-4"><h4><b>{{ $producto['preuOferta'] }}€/ud</b></h4></div>
                    @endif
                </div>
            </div>
                <div class="col-12">
                    <a href="javascript:history.back()" class="btn btn-primary float-right">Volver</a>
                </div>
        </div>

    </div>

@endsection
