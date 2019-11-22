<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Admin;
use Session;
use DB;
use Auth;
use Hash;
use Illuminate\Support\Facades\Input as input;
class UsersController extends Controller
{
    // Show Users
    public function showUsers(){
    	$data = [];
    	$data['users'] = Admin::all();
    	return view('backend.pages.user.users',$data);
    }

    public function chnagePassword(){
    	return view('backend.pages.user.changePassword');
    }
    public function savePassword(){
        $user = Admin::find(Auth::user()->id);
        if(Hash::check(Input::get('passwordOld'),$user['password']) && Input::get('password') == Input::get('password_confirmation')){
            $user->password = bcrypt(Input::get('password'));
            $user->save();
             Session::flash('success', 'Update  Successfully !');
            return back();
        }else{
            Session::flash('error','Sorry Failed !!');
            return back();
        }
    }
    public function destroyUsers($id){
        
        $users = Admin::findOrFail($id);
        $users->delete();
        Session::flash('success',' Deleted Successfully');
        return back();
    }
    public function editUsers($id){
        $users = Admin::findOrFail($id);
        return view('backend.pages.user.editusers')->withUsers($users);
    }
    public function updateUsers(Request $request,$id){
        
    
      $name = $request->input('name');
      DB::update('update users set name = ? where id = ?',[$name,$id]);
        Session::flash('success', 'Update  Successfully !');
        
        return back();
    }

    public function userList(){

        $data = [];
        $data['users'] = User::all();
        return view('backend.pages.user.userList',$data);
    }

    public function userDestroyUsers($id){
        $users = User::findOrFail($id);
        $users->delete();
        Session::flash('success',' Deleted Successfully');
        return back();
    }

}
