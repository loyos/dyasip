@extends('app');


@section('content')

    <div class="container-fluid">
        <h1 style="float: left;">Productos</h1>


        @if(Auth::user()->rol == 'admin')
            <a href="{{ url('productos/create') }}" class="btn btn-primary " style = 'float: right;'> Nuevo Producto </a>
        @endif
        {{--<hr>--}}

        <table class="table table-striped">
            <th>Código</th>
            <th> Nombre</th>
            <th> Unidad</th>
            <th> Valor</th>
            <th> Valor + IVA</th>
            @if(Auth::user()->rol == 'admin')
                <th> Opciones </th>
            @endif

            @foreach($productos as $p)
                <tr>
                    <td>
                        {{ $p->id }}
                    </td>
                    <td>

                        <h4>{{ $p->nombre }}</h4>
                    </td>

                    <td>
                        <div class="descripcion">

                           Unidad


                        </div>
                    </td>
                    <td>
                        <div class="descripcion">

                            {{--{{ $p->user_id }}--}}
                            {{'$ '. $p->precio }}
                        </div>
                    </td>
                    <td>
                        {{ '$ '. number_format((float)$p->precio * 1.16, 2, '.', '') }}
                    </td>
                    @if(Auth::user()->rol == 'admin')
                        <td>
                            <div class="descripcion">

                                {{--<a href="{{ url('/productos', $p->id) }}"> Ver | </a>--}}
                                <a href="{{ url('/productos/'.$p->id.'/edit' ) }}"> Editar </a>
                                {!! Form::open(['action' => ['ProductosController@destroy', $p->id], 'method' => 'delete']) !!}

                                {!! Form::submit('Eliminar', ['class' => 'btn btn-primary']) !!}

                                {!! Form::close() !!}

                            </div>
                        </td>
                    @endif

                </tr>
            @endforeach
        </table>
    </div>

@stop