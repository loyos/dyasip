@extends('app');


@section('content')

    <div class="container-fluid">
        <h1 style="float: left;">Pedidos</h1>

        <a href="{{ url('pedidos/create') }}" class="btn btn-primary " style = 'float: right;'> Nuevo Pedido </a>
        {{--<hr>--}}

        <table class="table table-striped">

            <th> Numero de Pedido</th>
            <th> Fecha </th>
            <th> Ingresado por</th>
            <th>Estado</th>
            <th style="text-align: center;"> Opciones de Pedido</th>

            @foreach($pedidos as $p)
                <tr>
                    <td>

                        <a href=" {{ url('/pedidos', $p->id ) }} "> <h4>{{ $p->id }}</h4></a>
                    </td>

                    <td>
                        <div class="descripcion">
                         {{ $p->created_at }}
                        </div>
                    </td>
                    <td>
                        <div class="descripcion">
                            {{ $p->user->name }}
                        </div>
                    </td>
                    <td>
                        {{ $p->estatus }}
                    </td>
                    <td style = "text-align: center;">
                        <div class="descripcion">

                            <a href="{{ url('/pedidos', $p->id) }}">   Ver | </a>
                            <a href="{{ url('/pedidos/'.$p->id.'/edit' ) }}"> Editar </a>
                            {!! Form::open(['action' => ['PedidosController@destroy', $p->id], 'method' => 'delete']) !!}

                                    {!! Form::submit('Eliminar', ['class' => 'btn btn-primary']) !!}

                            {!! Form::close() !!}

                        </div>
                    </td>

                </tr>
            @endforeach
        </table>
    </div>

@stop