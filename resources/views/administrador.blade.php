@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-4"><h2>Administradors</h2></div>
            <div class="col-6 col-md-2 p-3">
                <a href="tasques" class="btn btn-secondary">Tasques</a>
            </div>
            <div class="col-6 col-md-2 p-3">
                <a href="formAddUsuario" class="btn btn-secondary">Añadir Admin</a>
            </div>
            <div class="col-6  col-md-2 p-3">
                <a href="formEditUsuario" class="btn btn-secondary">Editar Admin</a>
            </div>
            <div class="col-6 col-md-2 p-3">
                <a href="formAddProducto" class="btn btn-secondary">Añadir Producto</a>
            </div>
        </div>

        <div class="row">
            <div class="dropdown p-3">
                <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Marca
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    @if (is_array($marcas ?? ''))
                        @foreach($marcas as $marca)
                            <a class="dropdown-item" href="/filtroMarca{{ $marca['id'] }}">{{ $marca['nom'] }}</a>
                        @endforeach
                    @endif
                </div>
            </div>

            <div class="dropdown p-3">
                <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Color
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    @if (is_array($colors ?? ''))
                        @foreach($colors as $color)
                            <a class="dropdown-item" href="/filtroColor{{ $color['id'] }}">{{ $color['nom'] }}</a>
                        @endforeach
                    @endif
                </div>
            </div>

            <div class="dropdown p-3">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ordenar per
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="ordenar_preu_desc" id="preu_asc" name="preu_asc">Preu major</a>
                    <a class="dropdown-item" href="ordenar_preu_asc" id="preu_desc" name="preu_desc">Preu menor</a>
                    <a class="dropdown-item" href="ordenar_nom_asc" id="nom_asc" name="nom_asc">Nom A-Z</a>
                    <a class="dropdown-item" href="ordenar_nom_desc" id="nom_asc" name="nom_asc">Nom Z-A</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            @foreach($productos as $producto)
                <div class="col-12 col-md-6 col-lg-3 py-3">
                    <div class="row">
                        <div class="col-12">
                            <img src="/images/{{ $producto['imatge'] }}" class="img-fluid pb-2" alt="Responsive image">
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12"><h5>{{ $producto['nom'] }}</h5></div>
                                <div class="col-12"><p>{{ $producto['descripcio_curta'] }}</p></div>
                                <div class="col-12"><h4><b>{{ $producto['preu'] }}€</b></h4></div>
                            </div>
                            <a class="btn btn-warning my-2 my-sm-0" href="formEditProducto{{ $producto['id'] }}">Editar</a>
                            <a class="btn btn-danger my-2 my-sm-0 " href="#deleteModal" data-toggle="modal">Borrar</a>
                        </div>
                    </div>
                </div>
                @endforeach

                <div id="deleteModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">¿Borrar producto?</h4>
                            </div>
                            <div class="modal-body">
                                <form name="deleteProducto" id="deleteProducto" action="deleteProducto/{{ $producto['id'] }}" method="post"
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
        <!--
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
        -->

    </div>

@endsection
