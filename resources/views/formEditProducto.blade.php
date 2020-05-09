@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="editProducto" enctype="multipart/form-data" method="post">
            @csrf

            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">

                    <div class="row">
                        <div class="col-12"><h1>Editar producto del inventario</h1></div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12"><label for="titol">Nombre del producto</label>
                            <input class="form-control" type="text" id="nom" name="nom"></div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <label for="descripcio_llarga">Descripcion completa</label>
                            <textarea class="form-control" id="descripcio_llarga" name="descripcio_llarga" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12 col-md-6">
                            <label for="artista">Marca del producto</label>
                            <select id="marca" name="marca" class="form-control">
                                <option selected>Marca</option>
                                <option>Nike</option>
                                <option>Adidas</option>
                                <option>Puma</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="categoria">Categoria</label>
                            <select id="categoria" name="categoria" class="form-control">
                                <option selected>Categoria</option>
                                <option>Snow</option>
                                <option>Skis</option>
                                <option>Ropa</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12 col-md-6">
                            <label for="descripcio_curta">Descripcion corta</label>
                            <input class="form-control" type="text" id="descripcio_curta" name="descripcio_curta">
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="stock" >Stock</label>
                            <input class="form-control" type="number" id="stock" name="stock">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12 col-md-4">
                            <label for="preu">Preu €/ud</label>
                            <input class="form-control" type="number" id="preu" name="preu" step="any">
                        </div>
                        <div class="col-12 col-md-4">
                            <label for="oferta">Oferta</label>
                            <input class="form-control" type="number" id="oferta" name="oferta" max="100" min="0" placeholder="0" value="0">
                        </div>
                        <div class="col-12 col-md-4">
                            <label for="color">Color</label>
                            <input class="form-control" type="text" id="color" name="color">
                        </div>
                    </div>

                    <div class=" form-group row">
                        <div class="col-12">
                            <label for="imatge">Imagen del producte</label>
                            <input type="file" class="form-control-file" id="imatge" name="imatge">
                        </div>
                    </div>

                    <div class="row pt-4">
                        <div class="col-12">
                            <button class="btn btn-success">Editar producto</button>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
@endsection
