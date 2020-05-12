@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-12 col-sm-6">
                <img src="img2.jpg" class="img-fluid pb-2" alt="Responsive image">
            </div>
            <div class="col-12 col-sm-6">
                <h3>{{ $producto['nom'] }}</h3>
                <p>{{ $producto['descripcio_llarga'] }}</p>
                <div class="row">
                    <div class="col-6">
                        <form>
                            <div class="form-group">
                                <input type="number" class="form-control" id="number" value="1" placeholder="1">
                            </div>
                            <button type="submit" class="btn btn-outline-success">Añadir al carrito</button>
                        </form>
                    </div>
                    <div class="col-6"><h2><b>{{ $producto['preu'] }}€/ud</b></h2></div>
                </div>
            </div>
        </div>

    </div>

@endsection
