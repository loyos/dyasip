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

            @foreach($productos as $p)

                <?php  //dd($p); ?>

                <tr>
                    <td> {{ $p['nombre']}} </td>
                    <td> {{ $p['cantidad']. ' Unidades' }} </td>
                    <td> {{$p['precio'] . ' $'}} </td>
                    <td> {{ ($p['precio']) * ($p['cantidad']) . ' $' }} </td>
                </tr>

            @endforeach

        </table>


        {{$pedido->number}}

    </div>




@stop