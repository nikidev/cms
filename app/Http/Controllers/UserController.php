<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use Illuminate\Support\Facades\Input;
use Auth;

class UserController extends Controller
{
	public  function __construct()
	{
		$this->middleware('auth');
	}

    public function viewUsersList()
    {

    	return view('admin.users.index')
    	->with('users', User::all());
    }


    public function deleteUser($id)
    {
    	$user = User::findOrfail($id);
    	$user->delete();
    	return redirect()->back();
    }


    public function viewEditUser($id)
    {
    	$user = User::find($id);

        $selectedRole = [];

        foreach ($user->get() as $key => $value) 
        {
            $selectedRole[] = $value->id;
        }

        
        return view('admin.users.edit',compact('selectedRole'))
            ->with('user',$user);
    }


    public function userUpdate($id, Request $request)
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
                'is_admin'=>Input::get('is_admin'),
            ]);
        
         return redirect('/users');
    }


    public function viewCreateUser()
    {
    	return view('admin.users.create');
    }

    public function userStore(Request $request)
    {
    	$this->validate($request,[
                'username'     => 'required|min:3|max:255|unique:users',
                'email'    => 'required|email|max:255|unique:users',
                'password' => 'required|min:6',
                'first_name' => 'required|min:3|max:255',
                'middle_name' => 'required|min:3|max:255',
                'last_name' => 'required|min:3|max:255',
            ]);

        $user = User::create([

            'username'=> Input::get('username'),
            'email'=>Input::get('email'),
            'password'=>bcrypt(Input::get('password')),
            'first_name' => Input::get('first_name'),
            'middle_name' => Input::get('middle_name'),
            'last_name' => Input::get('last_name'),
            'is_admin'=>Input::get('is_admin') || Input::get('0'),

        ]);


         return redirect('/users');
    }
}
