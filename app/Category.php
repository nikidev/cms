<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

	protected $fillable = ['name','parent_id','ordercat'];

    public function articles()
    {
        return $this->hasMany('App\Article');
    }


    public function children()
    {
    	return $this->hasMany('App\Category', 'parent_id');
	}
}
