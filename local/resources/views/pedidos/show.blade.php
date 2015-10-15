@extends('app');


@section('content')

    <div class="container-fluid">

        <h1>{{ "Pedido Nro ". $pedido->id}}</h1>
        <hr>

        <table style="width: 100%;" class = "table table-striped" id="pr">
            <tr>
                <th style="text-align: left;"> Código</th>
                <th style="text-align: left;"> Nombre Producto</th>
                <th style="text-align: left;"> Medida</th>
                <th style="text-align: left;"> Valor</th>
                <th style="text-align: left;"> IVA</th>
                <th style="text-align: left;"> Valor + IVA</th>
                <th style="text-align: left;"> Cantidad</th>
                <th style="text-align: left;"> Total</th>
            </tr>
            <?php $total = 0; ?>
            @foreach($productos as $p)
                <tr>
                    <td>
                        {{ $p['id'] }}
                    </td>
                    <td>
                        {!! $p['nombre'] !!}
                    </td>
                    <td>
                        Unidad
                    </td>
                    <td>
                        {{ format_price($p['precio']) }}
                    </td>
                    <td>
                        16%
                    </td>
                    <td>
                        {{ format_price_iva($p['precio']) }}
                    </td>
                    <td>
                        {{ $p['cantidad'] }}
                    </td>
                   <td>
                       {{format_price( $total_prod = $p['precio'] * 1.16 * $p['cantidad']) }}
                   </td>
                </tr>

              <?php  $total = $total + $total_prod ; ?>
            @endforeach
            <td>
                <button class="boton">Export</button>
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <b>Total:</b>
            </td>
            <td>
                <b>{{  format_price($total) }} </b>
            </td>
        </table>

    </div>


    <script>

        $(document).ready(function () {
            alert('probando');
        });

        $(".boton").click(function(){
            $("#pr").table2excel({
                // exclude CSS class
                exclude: ".noExl",
                name: "Excel Document Name"
            });
        });

    </script>

@stop