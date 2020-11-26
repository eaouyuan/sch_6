<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Http\Requests\CartRequest;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // 講義有錯，寫成store()
        Cart::create($request->all());
        return redirect()->route('cart.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(CartRequest $request)
    {
        //1126 add
        // $cart             = new Cart;
        // $cart->user_id    = $request->user()->id;
        // $cart->product_id = $request->product_id;
        // $cart->amount     = $request->amount;
        // $cart->save();

        // 用 fillable 批量賦值寫入 https: //campus-xoops.tn.edu.tw/modules/tad_book3/page.php?tbsn=43&tbdsn=1443
        Cart::create([
            'user_id'    => $request->user()->id,
            'product_id' => $request->product_id,
            'amount'     => $request->amount,
        ]);

        // return $request->user();
        return [];

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
