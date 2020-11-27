<?php

namespace App\Providers;

// 講義15-7 未寫
use App\Cart;
use App\Observers\CartObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // 新增購物車觀察器
        Cart::observe(CartObserver::class);

    }
}
