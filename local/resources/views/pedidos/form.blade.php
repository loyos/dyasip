<?php // dd($productos[0]->nombre); ?>


{{--<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">--}}
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="form-group">

    <table style="width: 100%;" class = "table table-striped">
        <tr>
            <th style="text-align: center;"> Producto</th>
            <th style="text-align: center;"> Cantidad</th>
        </tr>
    </table>

    @foreach($productos as $p)
        <div class="row">
            <div class="col-md-4 col-lg-offset-1">
                {{--<input type="text" class="form-control" name="name" value="{{ old('name') }}">--}}
                <div class="form-group">
                    {!! Form::label('product_id', $p->nombre, ['class' => 'form-control', 'style' =>'text-align:center;']) !!}
                </div>
            </div>

            <div class="col-md-4 col-lg-offset-2">
                {{--<input type="email" class="form-control" name="email" value="{{ old('email') }}">--}}
                <div class="form-group">
                    {!! Form::text($p->id, null, ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::submit($submitbutton, ['class' => 'btn btn-primary']) !!}
    </div>
</div>