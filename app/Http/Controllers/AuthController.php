<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function logincontroll(Request $request){

        if ( auth()->attempt([ 'email'=>$request->email, 'password'=> $request->password ]) ){
            request()->session()->regenerate();
            return redirect()->intended('/admin') ;
        }else{
        //    var_dump($request->all());exit;
            $errors = ['message'=>'Xətalı Giriş'];
            return redirect()->route('logincontroller')->withErrors($errors);
        }
    }


    public function logout( Request $request){
        auth()->logout();
        return redirect()->route('logincontroller');
    }


}
