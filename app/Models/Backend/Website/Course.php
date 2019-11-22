<?php

namespace App\Models\Backend\Website;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $fillable = ['course_title','course_description','instractor_id','course_fee','course_duration','class_weekly_duration','class_weekly_duration','location','course_start','contact_number_1','contact_number_2','image','btn_name','slug','position','status','view_position'];
    protected static function boot(){
    	parent::boot();
    	static::creating(function($course){
    		$course->slug = str_slug($course->course_title);
    	});
    }
}
