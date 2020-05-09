@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="addProducto" enctype="multipart/form-data" method="post">
            @csrf

            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">

                    <div class="row">
                        <div class="col-12"><h1>Editar usuario</h1></div>
                    </div>

                    <div class="form-group row">

                        <div class="col-12 col-md-6">
                            <label for="email">Email</label>
                            <select id="email" name="email" class="form-control">
                                <option selected>Categoria</option>
                                <option>Snow</option>
                                <option>Skis</option>
                                <option>Ropa</option>
                            </select>
                        </div>

                    <div class="col-12 col-md-6">
                        <label for="administrador">¿Es administrador?</label>
                        <select id="email" name="email" class="form-control">
                            <option selected>Seleccionar</option>
                            <option value="true" id="esAdmin" name="esAdmin">Si</option>
                            <option value="false" id="esAdmin" name="esAdmin">No</option>
                        </select>
                    </div>
                </div>

                    <div class="row pt-4">
                        <div class="col-12">
                            <button class="btn btn-success">Aceptar cambios</button>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
@endsection

