<?php

namespace App\Models\Backend\Website;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $fillable = ['service_name','service_title','service_description','service_images','btn_name','slug','position','status'];
    protected static function boot(){
    	parent::boot();
    	static::creating(function($service){
    		$service->slug = str_slug($service->service_title);
    	});

    }
}
