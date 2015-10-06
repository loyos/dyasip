@extends('app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ 'Editar Pedido N '. $producto->id  }}</div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                         {!! Form::model($producto, ['class' => 'form-horizontal', 'action'=> ['ProductosController@update', $producto->id], 'method'=> 'PATCH']) !!}
                        @include('productos.form', ['submitbutton' => 'Editar Producto']);
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop