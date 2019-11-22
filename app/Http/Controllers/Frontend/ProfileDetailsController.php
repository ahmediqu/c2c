<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UserProfile;
use Auth;
class ProfileDetailsController extends Controller
{
    public function index(){

    }


    public function update(){

    }

    public function store(Request $request){
         $user_main_id = $request->input('user_main_id');
        if (isset($user_main_id) && !empty($user_main_id)) {
            $userProfile = UserProfile::findOrFail($user_main_id);
//        echo '<pre>';print_r($services);
//        exit();
        } else {
           $userProfile = new UserProfile();
        }
        
        $userProfile->user_id = Auth::user()->id;
        $profile_pic = $request->file('profile_pic');
        if ($profile_pic) {
            $image_name = time().'.'.request()->profile_pic->getClientOriginalExtension();


            $image_full_name = $image_name;
            $destination_path = 'uploads/profile_pic/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('profile_pic')->move($destination_path, $image_full_name);
            if ($success) {
                $userProfile->profile_pic = $image_url;
            }
        }
       
        $userProfile->save();

        return redirect()->back()->with('message','Success');
    }
}
