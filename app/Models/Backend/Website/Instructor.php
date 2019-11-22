<?php

namespace App\Models\Backend\Website;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $fillable = ['instructor_name','instructor_title','instructor_description','instructor_images','btn_name','slug','position','status'];
    protected static function boot(){
    	parent::boot();
    	static::creating(function($instructor){
    		$instructor->slug = str_slug($instructor->service_title);
    	});

    }
}
