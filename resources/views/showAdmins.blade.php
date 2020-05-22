@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">

                <div class="row">
                    <div class="col-8 col-sm-10"><h1>Editar Administrador</h1></div>
                    <div class="col-2 volver">
                        <a href="javascript:history.back()" class="btn btn-primary">Volver</a>
                    </div>
                </div>

                <div class="row">
                    @if(is_array($admins ?? ''))
                    @foreach($admins as $admin)
                        <div class="col-12 col-md-6 col-lg-6 p-3">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <label class="col-4">Id del usuario</label>
                                        <div class="col-3"><h2>{{ $admin['usuari_id'] }}</h2></div>
                                    </div>
                                    <div class="row p-3">
                                        <a class="btn btn-warning my-2 my-sm-0 col-3 p-2"
                                           href="formEditUsuario{{ $admin['id'] }}">Editar</a>
                                        <a class="btn btn-danger my-2 my-sm-0 col-3 p-2" href="#deleteModal"
                                           data-toggle="modal">Borrar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @endif

                    <div id="deleteModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">¿Borrar administrador?</h4>
                                </div>
                                <div class="modal-body">
                                    <form name="deleteAdministrador" id="deleteAdministrador"
                                          action="deleteAdmin/{{ $admin['id'] }}" method="post"
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
            </div>
        </div>
    </div>
@endsection

