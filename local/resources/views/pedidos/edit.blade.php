@extends('app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ 'Editar Pedido N '. $pedido->id  }}</div>
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

                         {!! Form::model($pedido, ['class' => 'form-horizontal', 'action'=> ['PedidosController@update', $pedido->id], 'method'=> 'PATCH']) !!}
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <?php //    dd($pedido); ?>
                                {!! Form::label('estatus', 'Estatus:') !!}
                                {!! Form::select('estatus',
                            [  'Despachado' => 'Despachado',
                                'Pendiente' => 'Pendiente',
                                'Atrasado' => 'Atrasado'
                             ], null,
                            ['class' => 'form-control ']) !!}

                            {!! Form::label('comentario', 'Comentario:') !!}
                            {!! Form::textarea('comentario', null, ['class' => 'form-control','placeholder' => 'Necesitas algun producto que no este en esta lista?, tienes algun comentario?']) !!}

                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-2 col-md-offset-5">
                        {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
                    </div>
                </div>


            {{--@include('pedidos.form', ['submitbutton' => 'Editar Pedido']);--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop