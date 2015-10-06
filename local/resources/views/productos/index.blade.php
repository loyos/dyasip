@extends('app');


@section('content')

    <div class="container-fluid">
        <h1 style="float: left;">Productos</h1>

        <a href="{{ url('productos/create') }}" class="btn btn-primary " style = 'float: right;'> Nuevo Producto </a>
        {{--<hr>--}}

        <table class="table table-striped">

            <th> Nombre</th>
            <th> Disponible</th>
            <th> Precio</th>
            <th> Opciones </th>
            @foreach($productos as $p)
                <tr>
                    <td>

                        <a href=" {{ url('/pedidos', $p->nombre  ) }} "> <h4>{{ $p->nombre }}</h4></a>
                    </td>

                    <td>
                        <div class="descripcion">

                            {{ $p->disponibles }}


                        </div>
                    </td>
                    <td>
                        <div class="descripcion">

                            {{--{{ $p->user_id }}--}}
                            {{ $p->precio }}
                        </div>
                    </td>
                    <td>
                        <div class="descripcion">

                            {{--<a href="{{ url('/productos', $p->id) }}"> Ver | </a>--}}
                            <a href="{{ url('/productos/'.$p->id.'/edit' ) }}"> Editar </a>
                            {!! Form::open(['action' => ['ProductosController@destroy', $p->id], 'method' => 'delete']) !!}

                            {!! Form::submit('Eliminar', ['class' => 'btn btn-primary']) !!}

                            {!! Form::close() !!}

                        </div>
                    </td>

                </tr>
            @endforeach
        </table>
    </div>

@stop