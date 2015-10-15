<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model {

    protected $fillable = ['user_id','comentario','estatus'];

    public function productos()
    {
        return $this->hasMany('App\Pedido_Productos');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
