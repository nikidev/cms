<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getSignIn(){
        return view('auth.signin');
    }
    public function postSignIn(Request $request){
        $this->validate($request,[
            'username'=>'required',
            'password'=>'required'
        ]);

        if(!Auth::attempt($request->only(['username','password']),$request->has('remember'))){
            return redirect()->back();
        }
        return redirect()->route('admin.dashboard');
    }
    public function getSignOut(){
        Auth::logout();
        return redirect()->route('home');
    }
}
