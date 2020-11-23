<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title'       => $faker->company,
        'description' => $faker->realText(100),
        'image'       => $faker->imageUrl($width, $height, 'cats'),
        'on_sale'     => true,
        'price'       => $faker->randomNumber(4),
    ];
});
