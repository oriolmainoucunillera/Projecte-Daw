@extends('layouts.app')

@section('content')
    <div class="container">
        @csrf
        <div class="row">
            <div class="col-12 col-sm-6">
                <img src="/images/{{ $producto['imatge'] }}" class="img-fluid pb-2" alt="Responsive image">
            </div>
            <div class="col-12 col-sm-6">
                <h3>{{ $producto['nom'] }}</h3>
                <p>{{ $producto['descripcio_llarga'] }}</p>
                <div class="row">
                    <div class="col-6">
                        <form action="/comprar" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="number" class="form-control" id="cantidad" name="cantidad" value="1" placeholder="1">
                                <input type="hidden" class="form-control" id="producte_id" name="producte_id" value="{{$producto['id']}}">
                            </div>
                            <button type="submit" class="btn btn-outline-success">Comprar producto</button>
                        </form>
                    </div>
                    <div class="col-6"><h2><b>{{ $producto['preu'] }}€/ud</b></h2></div>
                </div>
            </div>
            <div class="row p-3">
                <div class="col-12">
                    <a href="javascript:history.back()" class="btn btn-primary">Volver</a>
                </div>
            </div>
        </div>

    </div>

@endsection
