<?php

namespace App\Models\Backend\Website;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = ['title','description','slug','image','link','status','position'];
    protected static function boot(){
    	parent::boot();
    	static::creating(function($slider){
    		$slider->slug = str_slug($slider->title);
    	});

    }
}
