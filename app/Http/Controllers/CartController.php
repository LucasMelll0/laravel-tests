<?php

namespace App\Http\Controllers;

use App\Models\User;
use Binafy\LaravelCart\LaravelCart;
use Binafy\LaravelCart\Models\Cart;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function getAll()
    {
        $cart = Cart::query()->firstOrCreate(['user_id' => 1]);
        dd($cart->items());

    }
}
