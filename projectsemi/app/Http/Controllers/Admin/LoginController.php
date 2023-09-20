<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function getLogin(){
        return view('backend.login');
    }
    public function postLogin(Request $request){
        $arrlogin=['email' => $request->email, 'password' => $request->password];
        if($request->remember == 'Remember Me'){
            $remember = true;
        }else{
            $remember = false;
        }
        if(Auth::attempt($arrlogin,$remember)){
            echo '<script type="text/JavaScript"> 
                alert("Logged in successfully!");
            </script>';
            return redirect()->intended('/');
        }else{
            return back()->withInput()->with('error', 'Incorrect account or password!');
        }
    }
    
}

