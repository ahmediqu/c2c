<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Message;
use Auth;
class MessageController extends Controller
{
   public function message(Request $request){
   	$message = new Message();
   	$message->to = $request->to;
   	$message->from = Auth::user()->id;
   	$message->product_id = $request->product_id;
   	$message->message = $request->message;
   	$message->save();
   	$this->setSuccess('Message Successfully Send');
   	return back();
   }
}
