<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Hash;
use Session;
class UserController extends Controller
{
    public function postLogin(Request $request)
    {
        try {
            $username = $request->username;
            $password = $request->password;

        $data = User::where('username',$username)->first();
        if($data){
            if(Hash::check($password,$data->password)){
                Session::put('username',$data->username);
                Session::put('type', $data->type);
                Session::put('idUser',$data->id);
                Session::put('login_user',TRUE);
                return redirect('/homeuser');
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
