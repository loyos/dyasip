<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoProductos extends Model {


    protected $fillable = ['pedido_id', 'user_id', 'cantidad', 'producto_id'];

    public function pedidos()
    {
        return $this->belongsTo('App\Pedidos');
    }

}
