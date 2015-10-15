<?php // dd($productos[0]->nombre); ?>


{{--<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">--}}
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="form-group">

    <table style="width: 100%;" class = "table table-striped">
        <tr>
            <th style="text-align: left;"> Código</th>
            <th style="text-align: left;"> Nombre Producto</th>
            <th style="text-align: left;"> Medida</th>
            <th style="text-align: left;"> Valor</th>
            <th style="text-align: left;"> IVA</th>
            <th style="text-align: left;"> Valor + IVA</th>
            <th style="text-align: left;"> Disponible </th>
            <th style="text-align: left;"> Cantidad</th>
        </tr>

    @foreach($productos as $p)
        <tr>
            <td>
                {{ $p->id }}
            </td>
            <td>
                {!! Form::label('product_id', $p->nombre ) !!}
            </td>
            <td>
                Unidad
            </td>
            <td>
                {{ format_price($p->precio) }}
            </td>
            <td>
                16%
            </td>
            <td>
                {{ format_price_iva($p->precio) }}
            </td>
            <td>
                {{ $p->disponibles }}
            </td>
            <td>
                {!! Form::text($p->id, null, ['class' => 'form-control']) !!}
            </td>
        </tr>
    @endforeach
    </table>
</div>

<div class="form-group">
    <div class="col-md-2 col-md-offset-5">
        {!! Form::submit($submitbutton, ['class' => 'btn btn-primary']) !!}
    </div>
</div>