<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Models\Admin;
use Auth;

use Session;

class LoginController extends Controller
{
    public function getlogin()
    {
        return view('login.index');
    }

    public function postlogin(Request $request)
    {

        $username = $request->username;
        $password = $request->password;
        $login = DB::select("SELECT * FROM admin where username = '$username' AND password = '$password '");
        $logins = Admin::where('username',$username)->where('password',$password)->first();

        if($login)
        {
            Session::put('USERNAME',$username);
            Session::put('login',TRUE);

            return view('listtanaman.index');

        }

        else
        {
            return redirect('/')->with('error','maaf username dan password salah');
        }
    }


    public function logout(){

        Session::flush();

        return redirect('/');
    }

    
  
}
