<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PedidoProductos;
use App\Pedidos;
use App\Productos;
use App\User;
use Request;
use Auth;

class PedidosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

        $pedidos = Pedidos::where('user_id', Auth::user()->id)->get();
		$pedidos->load('User');

//		dd($pedidos);

		return view('pedidos.index', compact('pedidos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

      //  $productos = Productos::lists('nombre','id');  for input select

		$productos = Productos::all();

		return view('pedidos.create', compact('productos'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$input = Request::except('_token');

        $input['user_id'] = Auth::user()->id;

        $pedido_info = Pedidos::create($input); // saving pedido and getting the id of that entry

		$pedido_info->id;

		foreach($input = Request::except('_token')  as $product_id => $cantidad){

			if(!empty($cantidad)) {
				$pedido_producto = array(
					'pedido_id' => $pedido_info->id,
					'user_id' => Auth::user()->id,
					'cantidad' => $cantidad,
					'producto_id' => $product_id
				);

				PedidoProductos::create($pedido_producto);
			}
		}

		return redirect('pedidos');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

		$pedido = Pedidos::findorFail($id);

        $pedido_productos = PedidoProductos::where('pedido_id', $id)->get();

		foreach($pedido_productos as $p){

			$producto_datos = Productos::find($p->producto_id);

			$productos[] = array(
				'id' => $producto_datos->id,
				'nombre' => $producto_datos->nombre,
				'descripcion' => $producto_datos->descripcion,
				'cantidad' => $p->cantidad,
				'precio' => $producto_datos->precio
			);

		}

		return view('pedidos.show', compact('pedido','productos'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$pedido = Pedidos::findOrFail($id);

        $productos = Productos::lists('nombre','id');

        return view('pedidos.edit', compact('pedido','productos'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
    {
        $pedido = Pedidos::findOrFail($id);

        $pedido->update(Request::all());

        return redirect('pedidos');
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$pedido = Pedidos::findOrFail($id);

        $pedido->delete();

        return redirect('pedidos');

	}

}
