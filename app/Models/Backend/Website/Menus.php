<?php

namespace App\Models\Backend\Website;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
	protected $fillable = ['menu','position','order','status'];
    protected static function boot(){
    	parent::boot();
    	static::creating(function($menu){
    		$menu->slug = str_slug($menu->menu);
    	});

    }
}
