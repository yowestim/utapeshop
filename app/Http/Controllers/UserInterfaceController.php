<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Shoes;
use App\Category;
use App\Brand;
use App\Image;
use Illuminate\Support\Facades\DB;

class UserInterfaceController extends Controller
{
    public function index(){
        $shoes = DB::table('shoes')
            ->join('categories', 'shoes.idCategory', '=', 'categories.idCategory')
            ->join('brands', 'shoes.idBrand', '=', 'brands.idBrand')
            ->leftJoin('images', 'images.idShoes', '=', 'shoes.idShoes')
            ->select('shoes.*', 'categories.category', 'brands.brand', 'images.fileName', 'images.idImages')
            ->groupBy('shoes.idShoes')
            ->get();
        return view ('usersView.content.homeUserContent', ['shoes' => $shoes]);
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
    public function register()
    {
        return view ('usersView.content.register');
    }
}
