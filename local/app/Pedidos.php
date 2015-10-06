<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model {

    protected $fillable = ['cantidad', 'product_id', 'user_id'];

    public function productos()
    {
        return $this->hasMany('App\Productos');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
