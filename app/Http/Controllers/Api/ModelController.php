<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models;
class ModelController extends Controller
{
    public function getList(){
    	return response()->json(Models::get(),200);
    }
}
