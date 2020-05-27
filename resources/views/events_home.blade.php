@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="justify-content-center">
            <a href="eventos_form" class="btn btn-success float-right">Crear</a> <br><br>
            @if (is_array($events ?? ''))
                @foreach ($events as $event)
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $event['titol'] }}</h5>
                            <p class="card-text">{{ $event['data_hora'] }}</p>
                            <a class="btn btn-outline-success my-2 my-sm-0" href="eventoDetalle{{ $event['id'] }}">Detalle</a>
                        </div>
                    </div>

                @endforeach
            @endif

            <div class="row p-3 float-right">
                    <a href="javascript:history.back()" class="btn btn-primary">Volver</a>
            </div>

        </div>
    </div>
@endsection
