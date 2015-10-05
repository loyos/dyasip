<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pedidos;
use App\Productos;
use Request;

class PedidosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$pedidos = Pedidos::all();

		return view('pedidos.index', compact('pedidos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $productos = Productos::lists('nombre','id');

		return view('pedidos.create', compact('productos'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Request::all();

        Pedidos::create($input);

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

        $productos = Productos::findorFail($pedido->product_id);

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
