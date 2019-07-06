<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shoes;
use App\Cart;
use Session;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{

    public function addToCart(Request $request)
    {
        if (Session::get('login_user') == false) {
            return redirect('loginuser');
        }
        $cart = new Cart();
        $cart->idUser = Session::get('idUser');
        $cart->isShoes = $request->idShoes;
        $cart->qty = $request->qty;
        $cart->size = 40;
        $cart->save();
        return redirect('cart');
    }
}
