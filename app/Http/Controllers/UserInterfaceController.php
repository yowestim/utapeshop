<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserInterfaceController extends Controller
{
    public function index(){
        return view ('usersView.content.homeUserContent');
    }

    public function categoryshop(){
        return view ('usersView.content.categoryUserContent');
    }

    public function checkoutshoes(){
        return view ('usersView.content.checkoutShoesContent');
    }

    public function cart(){
        return view ('usersView.content.cartUserContent');
    }

    public function confirmation(){
        return view ('usersView.content.confirmationContent');
    }

    public function login(){
        return view ('usersView.content.loginUser');
    }

    public function contact(){
        return view ('usersView.content.contactPerson');
    }
}
