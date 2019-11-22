<?php

namespace App\Models\Backend\Website;

use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    protected $fillable = ['submenu','menu_id','position','order','status'];
    protected static function boot(){
    	parent::boot();
    	static::creating(function($submenu){
    		$submenu->slug = str_slug($submenu->submenu);
    	});

    }
}
