<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view ('frontView.content.homeContent');
    }

    public function category(){
        $category = Category::all();
        return view ('frontView.content.CategoryContent', compact('category'));
    }

    public function brand(){
        $brand = Brand::all();
        return view('frontView.content.BrandContent', compact('brand'));
    }
}
