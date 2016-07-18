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
		$this->middleware('auth', ['except' => ['articleShow']]);
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
                'title'  => 'required|unique:articles',
                'body'  => 'required',
                'slug'  => 'required|alpha_dash|min:3|max:255|unique:articles,slug',
                'category_id' => 'numeric',
                
            ]);

            $article = Article::create([

                    'user_id'=> Auth::user()->id,
                    'category_id'=>Input::get('category'),
                    'title' => Input::get('title'),
                    'body' => Input::get('body'),
                    'slug'=> Input::get('slug'),

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
        ->with('article',$article)
        ->with('categories', Category::all());
    }

    public function articleUpdate($id,Request $request)
    {

        $this->validate($request,[
            'title'  => 'required',
            'body'  => 'required',
            'slug'  => 'required|alpha_dash|min:3|max:255',
            'category_id' => 'numeric',
            
        ]);
        
        $article = Article::where('id',$id)->update([
                'category_id'=>Input::get('category'),
                'title' => Input::get('title'),
                'body' => Input::get('body'),
                'slug'=> Input::get('slug'),
            ]);


    	return redirect('/articles');
    }



    public function articleShow($slug)
    {
        $article = Article::whereSlug($slug)->first();
        return view('home')
        ->with('article',$article);
    }
}
