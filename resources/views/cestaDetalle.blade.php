@extends('layouts.app')

@section('content')
    <div class="container">
        @csrf
        <div class="row">
            <div class="col-6 col-sm-3">
                <label>Cistella id</label>
                <h3>{{ $producto['cistella_id'] }}</h3>
            </div>
            <div class="col-6 col-sm-3">
                <label>Producte id</label>
                <h3>{{ $producto['producte_id'] }}</h3>
            </div>
            <div class="col-6 col-sm-3">
                <label>Preu</label>
                <h3>{{ $producto['preu'] }}</h3>
            </div>
            <div class="col-6 col-sm-3">
                <label>Quantitat</label>
                <h3>{{ $producto['quantitat'] }}</h3>
            </div>
            <div class="col-4 col-sm-6">
                <a class="btn btn-danger my-2 my-sm-0 " href="#deleteModal" data-toggle="modal">Borrar</a>
            </div>
            <div class="col-4 volver">
                <a href="javascript:history.back()" class="btn btn-primary my-2 my-sm-0">Volver</a>
            </div>
        </div>

        <div id="deleteModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">¿Borrar producto?</h4>
                    </div>
                    <div class="modal-body">
                        <form name="deleteProducto" id="deleteProducto"
                              action="/borrarProductoCarrito/{{$producto['id']}}" method="post"
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
