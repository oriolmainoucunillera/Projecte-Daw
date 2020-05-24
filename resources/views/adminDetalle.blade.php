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
                    @if($producto['oferta'] == 0)
                        <div class="col-8"><h2><b>{{ $producto['preuOferta'] }}€/ud</b></h2></div>
                    @else
                        <div class="col-4" style="color: red"><h4><b><strike>{{ $producto['preu'] }}€/ud</strike></b>
                            </h4></div>
                        <div class="col-4"><h4><b>{{ $producto['preuOferta'] }}€/ud</b></h4></div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-6"><h4><b>{{ $producto['stock'] }}</b> unidades disponibles</h4></div>
                </div>
                <a class="btn btn-danger my-2 my-sm-0 " href="#deleteModal" data-toggle="modal">Borrar</a>
            </div>
            <div class="row p-3">
                <div class="col-12">
                    <a href="javascript:history.back()" class="btn btn-primary">Volver</a>
                </div>
            </div>
        </div>

        <div id="deleteModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">¿Borrar producto?</h4>
                        <p>Id: {{ $producto['id'] }}</p>
                    </div>
                    <div class="modal-body">
                        <form name="deleteProducto" id="deleteProducto" action="deleteProducto/{{ $producto['id'] }}"
                              method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar
                                </button>
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
