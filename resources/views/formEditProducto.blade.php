@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="editProducto{{$producto['id']}}" enctype="multipart/form-data" method="post">
            @csrf

            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">

                    <div class="row">
                        <div class="col-12"><h1>Editar producto del inventario</h1></div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12"><label for="titol">Nombre del producto</label>
                            <input class="form-control" value="{{ $producto['nom'] }}" type="text" id="nom" name="nom">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <label for="descripcio_llarga">Descripcion completa</label>
                            <textarea class="form-control" id="descripcio_llarga" name="descripcio_llarga"
                                      rows="3">{{ $producto['descripcio_llarga'] }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12 col-md-6">
                            <label for="artista">Marca del producto</label>
                            <select id="marca_id" name="marca_id" class="form-control">
                                @if (is_array($marcas))
                                    @foreach($marcas as $marca)
                                        <option value="{{ $producto['marca_id'] }}" id="marca_id"
                                                name="marca_id">{{ $marca['nom'] }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="categoria_id">Categoria</label>
                            <select id="categoria_id" name="categoria_id" class="form-control">
                                @if (is_array($categorias))
                                    @foreach($categorias as $categoria)
                                        <option value="{{ $producto['categoria_id'] }}" id="categoria_id"
                                                name="categoria_id">{{ $categoria['nom'] }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12 col-md-6">
                            <label for="descripcio_curta">Descripcion corta</label>
                            <input class="form-control" value="{{ $producto['descripcio_curta'] }}" type="text"
                                   id="descripcio_curta" name="descripcio_curta">
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="stock">Stock</label>
                            <input class="form-control" value="{{ $producto['stock'] }}" type="number" id="stock"
                                   name="stock">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12 col-md-4">
                            <label for="preu">Preu €/ud</label>
                            <input class="form-control" value="{{ $producto['preu'] }}" type="number" id="preu"
                                   name="preu" step="any">
                        </div>
                        <div class="col-12 col-md-4">
                            <label for="oferta">Oferta</label>
                            <input class="form-control" value="{{ $producto['oferta'] }}" type="number" id="oferta"
                                   name="oferta" max="100" min="0" placeholder="0" value="0">
                        </div>
                        <div class="col-12 col-md-4">
                            <label for="color_id">Color</label>
                            <select id="color_id" name="color_id" class="form-control">
                                @if (is_array($colors))
                                    @foreach($colors as $color)
                                        <option value="{{ $producto['color_id'] }}" id="color_id"
                                                name="color_id">{{ $color['nom'] }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class=" form-group row">
                        <div class="col-12">
                            <label for="imatge">Imagen del producte</label>
                            <input type="file" class="form-control-file" value="{{ $producto['imatge'] }}" id="imatge"
                                   name="imatge">
                        </div>
                    </div>

                    <div class="row pt-4">
                        <div class="col-6">
                            <button class="btn btn-success">Editar producto</button>
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
