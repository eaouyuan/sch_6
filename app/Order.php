<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // ch17-2
    // 1 users map many orders
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    // 1 orders map many order_items
    public function items()
    {
        return $this->hasMany('App\OrderItem');
    }
}
