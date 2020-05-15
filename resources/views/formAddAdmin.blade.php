@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="addUsuario" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">

                    <div class="row">
                        <div class="col-12"><h1>Añadir usuario</h1></div>
                    </div>

                    <div class="form-group row">

                        <div class="col-12 col-md-6">
                            <label for="usuari_id">Email</label>
                            <select id="usuari_id" name="usuari_id" class="form-control">
                                @if (is_array($usuarios))
                                    @foreach($usuarios as $usuario)
                                        <option value="{{ $usuario['id'] }}" id="usuari_id" name="usuari_id">{{ $usuario['email'] }}</option>
                                    @endforeach
                                @endif

                            </select>
                        </div>

                        <div class="col-12 col-md-6">
                            <label for="esAdmin">¿Es administrador?</label>
                            <select id="esAdmin" name="esAdmin" class="form-control">
                                <option selected>Seleccionar</option>
                                <option value="1">Si</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="row pt-4">
                        <div class="col-6">
                            <button class="btn btn-success">Aceptar cambios</button>
                        </div>
                        <div class="col-6 volver">
                            <a href="javascript:history.back()" class="btn btn-primary">Volver</a>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
@endsection
