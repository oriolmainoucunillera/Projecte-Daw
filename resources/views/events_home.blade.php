@extends('layouts.app')

@section('content')

    <div class="container">
        <div style="text-align: center">
            @if(session('crear'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('crear') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if(session('eliminar'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('eliminar') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        </div>

        <div class="justify-content-center">
            <a href="{{route('formulari')}}" class="btn btn-primary float-right">Crear</a> <br><br>

            @foreach ($events as $event)
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $event->titol }}</h5>
                        <p class="card-text">{{ $event->data_hora }}</p>
                        <a href="javascript: document.getElementById('delete-{{$event->id}}').submit()" class="btn btn-danger">Eliminar</a>

                        <form method="post" action="{{ route('eliminar', $event->id) }}" id="delete-{{$event->id}}">
                            @method('delete')
                            @csrf
                        </form>
                    </div>
                </div> <br>
            @endforeach

        </div>
    </div>
@endsection
