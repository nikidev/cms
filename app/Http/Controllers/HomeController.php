<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Article;



class HomeController extends Controller
{
    public function getHome()
    {
    	
    	$articles = Article::all();
        return view('home')
        	->with('articles',$articles);
    }
    
}