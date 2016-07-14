<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Article;

class AdminController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}
	
//    THE DASHBOARD
    public function getDasboard()
    {
    	$categories = Category::all();
    	$articles = Article::all();

        return view('admin.dashboard')
        	->with('categories',$categories)
        	->with('articles',$articles);
    }

}
