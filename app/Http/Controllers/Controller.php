<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Session;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected function setSuccess($message){
    	Session::flash('type','success');
    	Session::flash('message',$message);
    }
    protected function setError($message){
    	Session::flash('type','warning');
    	Session::flash('message',$message);
    }
}
