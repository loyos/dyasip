@extends('app');


@section('content')

    <div class="container-fluid">
        <h1 style="float: left;">Pedidos</h1>

        <a href="{{ url('pedidos/create') }}" class="btn btn-primary " style = 'float: right;'> Nuevo Pedido </a>
        {{--<hr>--}}

        <table class="table table-striped">

            <th> Numero de Pedido</th>
            <th> Fecha aproximada de entrega</th>
            <th> Persona a cargo del pedido</th>
            <th> Opciones de Pedido</th>
            @foreach($pedidos as $p)
                <tr>
                    <td>

                        <a href=" {{ url('/pedidos', $p->id ) }} "> <h4>{{ $p->id }}</h4></a>
                    </td>

                    <td>
                        <div class="descripcion">

                            {{--{{ $p->user_id }}--}}
                            Cualquier fecha

                        </div>
                    </td>
                    <td>
                        <div class="descripcion">

                            {{--{{ $p->user_id }}--}}
                            Cualquier persona
                        </div>
                    </td>
                    <td>
                        <div class="descripcion">

                            <a href="{{ url('/pedidos', $p->id) }}"> Ver  </a>
                            <a href="{{ url('/pedidos/edit', $p->id) }}"> Editar </a>
                            <a href="{{ url('/pedidos/edit', $p->id) }}"> Eliminar </a>

                        </div>
                    </td>

                </tr>
            @endforeach
        </table>
    </div>

@stop