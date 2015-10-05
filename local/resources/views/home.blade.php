@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Dashboard</div>

				<div class="panel-body">
					<div class="row">
					    <div class="col-sm-6 col-md-6 col-lg-6">
							<h3>Pedidos </h3>
					        No tienes Pedidos realizados
					    </div>

						<div class="col-sm-6 col-md-6 col-lg-6">
							<a class=" btn btn-primary " href="{{ url('pedidos/create')  }}"> Realizar Pedido </a>
						</div>
					</div>

					<hr>

					<div class="row">
						<div class="col-sm-6 col-md-6 col-lg-6">
							{{--<a class=" btn btn-primary " href="{{ url('pedidos/create')  }}"> Editar mi perfil </a>--}}
							<a class=" btn btn-primary " href="#"> Editar mi perfil </a>
						</div>

						<div class="col-sm-6 col-md-6 col-lg-6">
							{{--<a class=" btn btn-primary " href="{{ url('pedidos/create')  }}"> Ver Productos disponibles </a>--}}
							<a class=" btn btn-primary " href="#"> Ver Productos disponibles </a>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
