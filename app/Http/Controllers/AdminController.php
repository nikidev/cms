<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}
	
//    THE DASHBOARD
    public function getDasboard(){
        return view('admin.dashboard');
    }
//    GET THE CATEGORIES
    public function getCategories(){
        $categories = Category::all();
        return view('admin.categories')->with('categories',$categories);
    }
}