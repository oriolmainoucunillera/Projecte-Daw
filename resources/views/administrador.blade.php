@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-8"><h2>Administradors</h2></div>
            <div class="col-6  col-md-2 p-3">
                <a href="formEditUsuario" class="btn btn-secondary">Editar Usuario</a>
            </div>
            <div class="col-6 col-md-2 p-3">
                <a href="formAddProducto" class="btn btn-secondary">Añadir Producto</a>
            </div>
        </div>

        <div class="row">
            <div class="dropdown p-3">
                <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Marca
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>

            <div class="dropdown p-3">
                <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Color
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>

            <div class="dropdown p-3">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ordenar per
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">

            <div class="col-12 col-md-6 col-lg-3 py-3">
                <div class="row">
                    <div class="col-12">
                        <img src="img2.jpg" class="img-fluid pb-2" alt="Responsive image">
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12"><h3>titulo</h3></div>
                            <div class="col-12"><p>Descripcion cortaaa</p></div>
                            <div class="col-12"><h2><b>76€</b></h2></div>
                        </div>
                        <a class="btn btn-warning my-2 my-sm-0" href="formEditProducto">Editar</a>
                        <a class="btn btn-danger my-2 my-sm-0 " href="#deleteModal" data-toggle="modal">Borrar</a>
                    </div>
                </div>

                <div id="deleteModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">¿Borrar producto?</h4>
                            </div>
                            <div class="modal-body">
                                <form name="deleteProducto" id="deleteProducto" action="deleteProducto" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-12 col-md-6 col-lg-3 py-3">
                <div class="row">
                    <div class="col-12">
                        <img src="img2.jpg" class="img-fluid pb-2" alt="Responsive image">
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12"><h3>titulo</h3></div>
                            <div class="col-12"><p>Descripcion cortaaa</p></div>
                            <div class="col-12"><h2><b>76€</b></h2></div>
                        </div>
                        <a class="btn btn-warning my-2 my-sm-0">Editar</a>
                        <a class="btn btn-danger my-2 my-sm-0">Borrar</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 py-3">
                <div class="row">
                    <div class="col-12">
                        <img src="img2.jpg" class="img-fluid pb-2" alt="Responsive image">
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12"><h3>titulo</h3></div>
                            <div class="col-12"><p>Descripcion cortaaa</p></div>
                            <div class="col-12"><h2><b>76€</b></h2></div>
                        </div>
                        <a class="btn btn-warning my-2 my-sm-0">Editar</a>
                        <a class="btn btn-danger my-2 my-sm-0">Borrar</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 py-3">
                <div class="row">
                    <div class="col-12">
                        <img src="img2.jpg" class="img-fluid pb-2" alt="Responsive image">
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12"><h3>titulo</h3></div>
                            <div class="col-12"><p>Descripcion cortaaa</p></div>
                            <div class="col-12"><h2><b>76€</b></h2></div>
                        </div>
                        <a class="btn btn-warning my-2 my-sm-0">Editar</a>
                        <a class="btn btn-danger my-2 my-sm-0">Borrar</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 py-3">
                <div class="row">
                    <div class="col-12">
                        <img src="img2.jpg" class="img-fluid pb-2" alt="Responsive image">
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12"><h3>titulo</h3></div>
                            <div class="col-12"><p>Descripcion cortaaa</p></div>
                            <div class="col-12"><h2><b>76€</b></h2></div>
                        </div>
                        <a class="btn btn-warning my-2 my-sm-0">Editar</a>
                        <a class="btn btn-danger my-2 my-sm-0">Borrar</a>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
