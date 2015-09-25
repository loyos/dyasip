@extends('app');


@section('content')

    <h1>Pedidos</h1>
    <hr>

    @foreach($pedidos as $p)
        <article>

            <a href=" {{ url('/pedidos', $p->id ) }} "> <h2>{{ $p->number }}</h2></a>

            <div class="descripcion">

                {{ $p->user_id }}

            </div>

        </article>
    @endforeach

@stop