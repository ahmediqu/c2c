<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Session;
use DB;
use Auth;
use Hash;
use Illuminate\Support\Facades\Input as input;
class UserController extends Controller
{
    public function changePassword(){
    	return view('frontend.pages.profile.changePassword');
    }

    public function saveChangePassword(){
    	$user = User::find(Auth::user()->id);
        if(Hash::check(Input::get('passwordOld'),$user['password']) && Input::get('password') == Input::get('password_confirmation')){
            $user->password = bcrypt(Input::get('password'));
            $user->save();
             Session::flash('success', 'Update  Successfully !');
            return redirect('logout');
        }else{
            Session::flash('error','Sorry Failed !!');
            return back();
        }
    }
}
