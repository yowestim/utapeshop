<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shoes;
use App\Cart;
use Session;
use Illuminate\Support\Facades\DB;
use Srmklive\PayPal\Services\ExpressCheckout;

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

    protected $provider;

    public function __construct() {
        $this->provider = new ExpressCheckout();
    }

    public function expressCheckout(Request $request) {
        // check if payment is recurring
        $recurring = $request->input('recurring', false) ? true : false;

        // Get the cart data

        // create new invoice
        $invoice = new Invoice();
        $invoice->title = $cart['invoice_description'];
        $invoice->price = $cart['total'];
        $invoice->save();

        // send a request to paypal
        // paypal should respond with an array of data
        // the array should contain a link to paypal's payment system
        $response = $this->provider->setExpressCheckout($cart, $recurring);

        // if there is no link redirect back with error message
        if (!$response['paypal_link']) {
          return redirect('/')->with(['code' => 'danger', 'message' => 'Something went wrong with PayPal']);
          // For the actual error message dump out $response and see what's in there
        }

        // redirect to paypal
        // after payment is done paypal
        // will redirect us back to $this->expressCheckoutSuccess
        return redirect($response['paypal_link']);
      }
}
