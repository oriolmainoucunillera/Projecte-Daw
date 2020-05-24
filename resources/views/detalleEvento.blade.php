@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="justify-content-center">
            @if (is_array($event ?? ''))
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $event['titol'] }}</h5>
                        <p class="card-text">{{ $event['data_hora'] }}</p>
                        <a href="#deleteModal" data-toggle="modal" class="btn btn-danger">Eliminar</a>
                    </div>
                </div>
            @endif

            <div id="deleteModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">¿Borrar evento?</h4>
                            <p>Id: {{ $event['id'] }}</p>
                        </div>
                        <div class="modal-body">
                            <form name="deleteEvento" id="deleteEvento" action="eventos_delete/{{ $event['id'] }}"
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

            <div class="row p-3">
                <div class="col-12">
                    <a href="javascript:history.back()" class="btn btn-primary">Volver</a>
                </div>
            </div>

        </div>
    </div>
@endsection
