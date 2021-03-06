<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Category;

use Illuminate\Support\Facades\Input;

use DB;

use Response;

class CategoryController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
    
    public function viewCategoriesList()
    {
        $categories = Category::orderBy('ordercat','ASC')->get();

        return view('admin.categories.index')->with('categories',$categories);
    }

    public function viewCreateCategory()
    {   
        $categories = Category::all();
        return view('admin.categories.create')->with('categories',$categories);
    }


    public function categoryStore(Request $request)
    {
        $this->validate($request,[
                'name'  => 'required|Unique:categories',
                
            ]);

        $category = Category::create([
 
            'name'=> Input::get('name'),
            'parent_id'=> Input::get('parent'),
            'order'=> Category::max('ordercat')+1,
        ]);


         return redirect('/categories');
    }

    public function categoryDelete($id)
    {
        $category = Category::findOrfail($id);

        $category->articles()->delete();
        $category->delete();
        return redirect()->back();
    }

    public function viewEditCategory($id)
    {

        $mainCategory = Category::find($id);
        
        
        return view('admin.categories.edit')
        ->with('mainCategory',$mainCategory)
        ->with('parentCategories', Category::where('id','!=', $mainCategory->id)->get()); //select all categories without the category for edit
        
        
    }

    public function categoryUpdate($id,Request $request)
    {
        $this->validate($request,[
                'name'  => 'required',
                
            ]);
         $category = Category::where('id',$id)->update([
                'name'=> Input::get('name'),
                'parent_id'=> Input::get('parent'),
                
            ]);
        
         return redirect('/categories');
    }




    public function sortCategories() 
    {
        $category = Category::orderBy('ordercat','ASC')->get();

        $itemID=Input::get('itemID'); //ID of category
        $itemIndex=Input::get('itemIndex'); //order of category

        foreach ($category as $item) 
        {
            return Category::where('id','=',$itemID)->update(array('ordercat' => $itemIndex));
            
        }
          
    }



}
