<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Category;

class HomeController extends Controller
{
    public function getHome()
    {
    	$categories = Category::all();

        return view('home')
        	->with('categories',$categories);
    }
    
}
