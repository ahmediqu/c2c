<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\RentApartmentFlat;
use Illuminate\Support\Facades\Validator;
use Auth;
use DB;
class RentController extends Controller
{
    public function index(){
    	$data = [];
    	$data['category'] = DB::table('categories')->where('parent_id',5)->where('status',1)->get();
    	$data['devesions'] = DB::table('devesions')->where('status',1)->get();
    	return view('frontend.pages.sell-rent.index',$data);
    }


    public function store(Request $request){
        $validator = Validator::make(request()->all(),[
            'sub_category_id' => 'required',
            'devesion_id' => 'required',
            'city_id' => 'required',
            'beds' => 'required',
            'image' => 'required',
            'baths'=> 'required',
            'size'=> 'required',
            'title'=> 'required',
            'location'=> 'required',
            'discription'=> 'required',
            'location'=> 'required',
           
        ]);
		if($validator->fails()){
		    return redirect()->back()->withErrors($validator)->withInput();
		}
		// try{
	        $rent = new RentApartmentFlat();
	        $rent->user_id = Auth::user()->id;
	        $rent->category_id = 5;
	        $rent->sub_category_id = $request->sub_category_id;
	        $rent->devesion_id = $request->devesion_id;
	        $rent->city_id = $request->city_id;
		   if($request->hasfile('image'))
		        {
		 
		            foreach($request->file('image') as $file)
		            {
		                // $image_name = $file->getClientOriginalName();
		                $image_name = time().'.'.$rent->user_id.'.'.$file->getClientOriginalExtension();

		                // $ext = strtolower($file->getClientOriginalExtension());
		                $image_full_name = $image_name;
		                $destination_path = 'uploads/ads/';
		                $image_url = $destination_path . $image_full_name;
		                $success = $file->move($destination_path, $image_full_name);
		                

		                $data[] = $success;
		            }
		            $rent->image=implode(',',$data);
		         }
		        $rent->location = $request->location;
		        $rent->beds = $request->beds;
		        $rent->baths = $request->baths;
		        $rent->size = $request->size;
		        $rent->title = $request->title;
		        $rent->address = $request->address;
		        $rent->phone = $request->phone;
		        $rent->price = $request->price;
		        $rent->na = $request->na;
		        $rent->discription = $request->discription;
		       
		        $rent->features = implode(',',$request->features);
		        
		        $rent->save();
		        return redirect('profile');
		    // }catch(\Exception $e){
		            
		    //     echo "error";
		    // }
		   

		    
		}

	}
