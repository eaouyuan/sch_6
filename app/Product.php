<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Storage;

class Product extends Model
{
    //若符合慣例可以不用設定這些
    protected $table      = 'products';
    protected $primaryKey = 'id';

    public function getImageUrlAttribute()
    {
        if (Str::startsWith($this->attributes['image'], ['http://', 'https://'])) {
            return $this->attributes['image'];
        }
        return Storage::disk('public')->url($this->attributes['image']);
    }

    public function carts()
    {
        return $this->hasMany('App\Cart');
    }

}
