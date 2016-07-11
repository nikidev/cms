<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Article;

use App\Category;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

    public function viewArticlesList()
    {
         $articles = Article::all();
        return view('admin.articles.index')
        ->with('articles',$articles)
        ->with('categories', Category::all());
    }

    public function viewCreateArticle()
    {
    	return view('admin.articles.create')
            ->with ('categories', Category::all());
    }

    public function articleStore(Request $request)
    {
    	$this->validate($request,[
                'title'  => 'required|Unique:articles',
                'body'  => 'required',
                'category_id' => 'numeric',
                
            ]);

        $article = Article::create([

                'user_id'=> Auth::user()->id,
                'category_id'=>Input::get('category'),
                'title' => Input::get('title'),
                'body' => Input::get('body'),

            ]);

        return redirect('/articles');
    }

    public function articleDelete($id)
    {
    	$article = Article::findOrfail($id);
        $article->delete();
        return redirect()->back();
    }

    public function viewEditArticle($id)
    {
    	$article = Article::find($id);

        return view('admin.articles.edit')
        ->with('article',$article);
    }

    public function articleUpdate($id,Request $request)
    {
        $this->validate($request,[
                'title'  => 'required',
                'body'  => 'required',
                'category_id' => 'numeric',
                
            ]);

        $article = Article::where('id',$id)->update([
                'category_id'=>Input::get('category'),
                'title' => Input::get('title'),
                'body' => Input::get('body'),
            ]);


    	return redirect('/articles');
    }
}
