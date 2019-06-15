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
            return redirect('/loginUser')->with('alert','Password atau Usernamew Salah!');
        }
          } catch (Exception $e) {
                  return $e;
          }
    }

    public function postRegister(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
            'cpassword' => 'required|same:password',
            'phone' => 'required',
            'address' => 'required'
        ]);

        $user = new User();
        $user->nameUser = $request->name;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->type = 'USER';
        $user->save();
        return redirect('/loginuser');
    }
}
