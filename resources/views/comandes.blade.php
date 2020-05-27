@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table_comandes">
            <tr>
                <th>Id</th>
                <th>Cesta id</th>
                <th>Usuario id</th>
                <th>Producto id</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Precio total</th>
            </tr>
            @if (is_array($comandes ?? ''))
                @foreach ($comandes as $comanda)
                    <tr>
                        <td>{{$comanda['id']}}</td>
                        <td>{{$comanda['cistella_id']}}</td>
                        <td>{{$comanda['user_id']}}</td>
                        <td>{{$comanda['producte_id']}}</td>
                        <td>{{$comanda['preu']}}</td>
                        <td>{{$comanda['quantitat']}}</td>
                        <td>{{$comanda['preu_final']}}</td>
                    </tr>
                @endforeach
            @endif

        </table>
        <div class="row">
            <div class="col-12 p-3">
                <a href="javascript:history.back()" class="btn btn-primary float-right">Volver</a>
            </div>
        </div>

    </div>
@endsection
