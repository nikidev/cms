<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ArticleController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

    public function viewArticlesList()
    {

    }

    public function viewCreateArticle()
    {
    	
    }

    public function articleStore()
    {
    	
    }

    public function articleDelete()
    {
    	
    }

    public function viewEditArticle()
    {
    	
    }

    public function articleUpdate()
    {
    	
    }
}
