<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Auth;
use Illuminate\Support\Facades\Input;

class ProfileController extends Controller
{
   public function __construct()
   {
   	 $this->middleware('auth');
   }

   public function viewProfileEdit($id)
   {
   		 $user = User::find($id);
        $this->authorize('viewProfileEdit',$user);

        return view('admin.profile.edit')
            ->with('user',$user);
   }

   public function profileUpdate($id, Request $request)
   {

    $this->validate($request,[
                'username'     => 'required|min:3|max:255',
                'email'    => 'required|email|max:255',
                'first_name' => 'required|min:3|max:255',
                'middle_name' => 'required|min:3|max:255',
                'last_name' => 'required|min:3|max:255',
            ]);


      $user = User::where('id',$id)->update([
                'username'=> Input::get('username'),
                'email'=>Input::get('email'),
                'first_name' => Input::get('first_name'),
                'middle_name' => Input::get('middle_name'),
                'last_name' => Input::get('last_name'),
            ]);

      \Session::flash('flash_message','Profile updated successfully !');
        
         return redirect('profile/edit/'.Auth::user()->id);
   }
}
