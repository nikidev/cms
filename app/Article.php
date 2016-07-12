<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

	protected $fillable = ['category_id','title','body','user_id'];


    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function user() 
	{
		return $this->belongsTo('App\User');
	}
    
}
