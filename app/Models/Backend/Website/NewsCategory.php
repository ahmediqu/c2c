<?php

namespace App\Models\Backend\Website;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    protected static function boot(){
    	parent::boot();
    	static::creating(function($news_category){
    		$news_category->slug = str_slug($news_category->category);
    	});

    }
}
