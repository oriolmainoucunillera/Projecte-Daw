@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table_cistella">
            <tr>
                <th>Producto id</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Precio total</th>
                <th>¿Borrar?</th>
            </tr>
            @if (is_array($productos ?? ''))
                @foreach ($productos as $producto)
                    <tr>
                        <td>{{$producto['producte_id']}}</td>
                        <td>{{$producto['preu']}}</td>
                        <td>{{$producto['quantitat']}}</td>
                        <td>{{$producto['preu_final']}}</td>
                        <td><a href="cestaDetalle{{ $producto['id'] }}"><img class="papelera" src="papelera.png"></a>
                        </td>
                    </tr>
                @endforeach
            @endif

        </table>

        <hr>

        <div class="row">
            <div class="col-8 col-md-6 col-lg-3">
                <h2>Total a pagar</h2>
            </div>
            <div class="col-4 col-md-6 col-lg-1"><h2><b>{{$preuTotal}}€</b></h2></div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="#addComanda" data-toggle="modal">
                    <button class="btn btn-success">Comprar</button>
                </a>
                <a href="javascript:history.back()" class="btn btn-primary float-right">Volver</a>
            </div>

        </div>
            <div id="addComanda" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">¿Aceptar compra?</h4>
                        </div>
                        <div class="modal-body">
                            <form name="aceptarCompra" id="aceptarCompra" action="/realizarCompra" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar
                                    </button>
                                    <button type="submit" class="btn btn-success">Comprar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
