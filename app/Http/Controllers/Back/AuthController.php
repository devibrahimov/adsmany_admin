<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('back.auth.login');
    }

    public function login(Request $request)
    {
             if ( auth()->attempt([ 'email'=>$request->email, 'password'=> $request->password ]) ){
            request()->session()->regenerate();
            return redirect()->route('admin.home') ;
        }else{
        //    var_dump($request->all());exit;
            $errors = ['message'=>'Xətalı Giriş'];
            return redirect()->route('admin.login.index')->withErrors($errors);
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('admin.login.index');
    }

    public function home(){
        return view('back.home');
    }
}
