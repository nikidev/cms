<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Category;

use Illuminate\Support\Facades\Input;

class CategoryController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
    
    public function viewCategoriesList()
    {
        $categories = Category::all();
        return view('admin.categories.index')->with('categories',$categories);
    }

    public function viewCreateCategory()
    {
        return view('admin.categories.create');
    }


    public function categoryStore(Request $request)
    {
        $this->validate($request,[
                'name'  => 'required|Unique:categories',
                
            ]);

        $category = Category::create([
 
            'name'=> Input::get('name'),
        ]);


         return redirect('/categories');
    }

    public function categoryDelete($id)
    {

    }

    public function viewEditCategory($id)
    {
        return view('admin.categories.edit');
    }

    public function categoryUpdate()
    {

    }



}
