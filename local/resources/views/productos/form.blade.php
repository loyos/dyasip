{{--<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">--}}
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="form-group">
    <label class="col-md-4 control-label"></label>
    <div class="col-md-6">
        {{--<input type="text" class="form-control" name="name" value="{{ old('name') }}">--}}
        <div class="form-group">
            {!! Form::label('nombre', 'Nombre:') !!}
            {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<div class="form-group">
    <label class="col-md-4 control-label"></label>
    <div class="col-md-6">
        {{--<input type="email" class="form-control" name="email" value="{{ old('email') }}">--}}
        <div class="form-group">
            {!! Form::label('disponibles', 'Disponible:') !!}
            {!! Form::text('disponibles', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label"></label>
    <div class="col-md-6">
        {{--<input type="email" class="form-control" name="email" value="{{ old('email') }}">--}}
        <div class="form-group">
            {!! Form::label('precio', 'Precio:') !!}
            {!! Form::text('precio', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::submit($submitbutton, ['class' => 'btn btn-primary']) !!}
    </div>
</div>