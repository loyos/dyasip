@extends('app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Nuevo Pedido</div>
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

                        {!! Form::open(['class' => 'form-horizontal', 'url' => 'pedidos']) !!}
                        {{--<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">--}}
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-6">
                                    {{--<input type="text" class="form-control" name="name" value="{{ old('name') }}">--}}
                                    <div class="form-group">
                                        {!! Form::label('producto', 'Producto:') !!}
                                        {!! Form::text('product_id', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-6">
                                    {{--<input type="email" class="form-control" name="email" value="{{ old('email') }}">--}}
                                    <div class="form-group">
                                        {!! Form::label('cantidad', 'Cantidad:') !!}
                                        {!! Form::text('cantidad', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>

                            {{--<div class="form-group">--}}
                                {{--<label class="col-md-4 control-label">Password</label>--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<input type="password" class="form-control" name="password">--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<label class="col-md-4 control-label">Confirm Password</label>--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<input type="password" class="form-control" name="password_confirmation">--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    {!! Form::submit('Crear Pedido', ['class' => 'btn btn-primary']) !!}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
