<?php

namespace App\Http\Controllers\Backend\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Frontend\Website\Contact;
class DonateController extends Controller
{
   	public function donate_list(){
   		$data = [];
   		$data['donate_list'] = Contact::all();
   		return view('backend.website.page.donate_list',$data);
   	}
}
