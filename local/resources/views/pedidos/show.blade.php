@extends('app');


@section('content')

    <div class="container-fluid">

        <h1>{{ "Pedido Nro ". $pedido->id}}</h1>
        <hr>

        <table class = "table table-striped">
            <tr>
                <th>
                    Nombre de Producto
                </th>

                <th>
                    Cantidad
                </th>

                <th>
                    Precio
                </th>

                <th>
                    Total
                </th>
            </tr>

            <tr>
                <td> {{$productos->nombre}} </td>
                <td> {{$pedido->cantidad}} </td>
                <td> {{'1231' }} </td>
            </tr>
        </table>


        {{$pedido->number}}

    </div>




@stop