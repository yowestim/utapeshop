<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shoes;
use App\Category;
use App\Brand;
use App\Image;
use Illuminate\Support\Facades\DB;

class ShoesController extends Controller
{

    public function index()
    {
        $shoes = DB::table('shoes')
            ->join('categories', 'shoes.idCategory', '=', 'categories.idCategory')
            ->join('brands', 'shoes.idBrand', '=', 'brands.idBrand')
            ->leftJoin('images', 'images.idShoes', '=', 'shoes.idShoes')
            ->select('shoes.*', 'categories.category', 'brands.brand', 'images.*')
            ->groupBy('shoes.idShoes')
            ->get();
        return view('frontView.content.shoesContent', ['data' => $shoes]);
        // return json_encode($shoes);
    }

    public function store(Request $request)
    {
        $shoes = new Shoes();
        $shoes->shoes = $request->shoes;
        $shoes->price = $request->price;
        $shoes->stock = $request->stock;
        $shoes->idCategory = $request->idCategory;
        $shoes->idBrand = $request->idBrand;
        $shoes->save();
        foreach($request->file('filename') as $value)
        {
            $name = $value->getClientOriginalName();
            $value->move(public_path().'/images/', $name);
            // $data[] = $name;
            $image = new Image();
            $image->idShoes = $shoes->idShoes;
            $image->fileName = $name;
            $image->save();
        }
        return redirect('/shoes');
    }

    public function destroy($id)
    {
        $shoes = Shoes::find($id);
        $shoes->delete();
        return redirect('/shoes');
    }

    public function edit($id)
    {
        $shoes = Shoes::find($id);
        $brand = Brand::all();
        $category = Category::all();
        $image = DB::table('images')
                ->where('images.idShoes', '=', $id)
                ->get();
        return view('crud.EditShoes', ['data' => $shoes, 'brand' => $brand, 'category' => $category, 'image' => $image]);
    }

    public function insert()
    {
        $brand = Brand::all();
        $category = Category::all();
        return view('crud.AddShoes', ['brand' => $brand, 'category' => $category]);
    }

    public function update($id, Request $request)
    {
        $shoes = Shoes::find($id);
        $shoes->shoes = $request->shoes;
        $shoes->price = $request->price;
        $shoes->stock = $request->stock;
        $shoes->idCategory = $request->idCategory;
        $shoes->idBrand = $request->idBrand;
        $shoes->save();
        DB::delete('delete from images where idShoes = ?', [$id]);
        foreach($request->file('filename') as $value)
        {
            $name = $value->getClientOriginalName();
            $value->move(public_path().'/images/', $name);
            // $data[] = $name;
            $image = new Image();
            $image->idShoes = $shoes->idShoes;
            $image->fileName = $name;
            $image->save();
        }
        return redirect('/shoes');
    }
}
