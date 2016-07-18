<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getLogIn(){
        return view('auth.login');
    }
    public function postLogIn(Request $request){
        $this->validate($request,[
            'username'=>'required|exists:users',
            'password'=>'required'
        ]);

        if(!Auth::attempt($request->only(['username','password']),$request->has('remember'))){
            return redirect()->back();
        }
        return redirect('dashboard');
    }
    public function getLogOut(){
        Auth::logout();
        return redirect('/');
    }
}
