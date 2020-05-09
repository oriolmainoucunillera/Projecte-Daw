@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row p-3">
            <div class="col-12 col-md-4 col-lg-2">
                <img src="img2.jpg" class="img-fluid pb-2" alt="Responsive image">
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <div class="row">
                    <div class="col-12"><h3>titulo</h3></div>
                    <div class="col-12"><p>Descripcion cortaaa</p></div>
                    <div class="col-6"><h2><b>76€</b></h2></div>
                    <div class="col-6"><input class="form-control" type="number" id="quantitat" name="quantitat" placeholder="2"></div>
                </div>
            </div>
        </div>

        <div class="row p-3">
            <div class="col-12 col-md-4 col-lg-2">
                <img src="img2.jpg" class="img-fluid pb-2" alt="Responsive image">
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <div class="row">
                    <div class="col-12"><h3>titulo</h3></div>
                    <div class="col-12"><p>Descripcion cortaaa</p></div>
                    <div class="col-6"><h2><b>76€</b></h2></div>
                    <div class="col-6"><input class="form-control" type="number" id="quantitat" name="quantitat" placeholder="2"></div>
                </div>
            </div>
        </div>

    <hr>

        <div class="row">
                <div class="col-8 col-md-6 col-lg-3">
                <h2>Total a pagar</h2>
                </div>
            <div class="col-4 col-md-6 col-lg-1"><h2><b>67€</b></h2></div>
                <div class="col-12"><button class="btn btn-success">Comprar</button></div>
        </div>
    </div>
@endsection
