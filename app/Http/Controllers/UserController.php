<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Hash;

class UserController extends Controller
{
    public function postLogin(Request $request)
    {
        try {
            $username = $request->username;
            $password = $request->password;

        $data = User::where('username',$username)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                // Session::put('buyer_name',$data->buyer_name);
                // Session::put('username',$data->username);
                // Session::put('id_buyer',$data->id_buyer);
                // Session::put('login_buyer',TRUE);
                // return redirect('buyer/home');
                echo 1;
            }
            else{
                echo 0;
            }
        }
        else{
            return redirect('/loginUser')->with('alert','Password atau Username Salah!');
        }
          } catch (Exception $e) {
                  return $e;
          }
    }
}
