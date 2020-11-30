<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    // ch17-2

    // 1 order_item map many product
    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    // 1 order map many order_item
    public function order()
    {
        return $this->belongsTo('App\Order');
    }
}
