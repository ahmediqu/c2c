<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Frontend\SellService;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\Category;
use App\Devesion;
use DB;
use Image;
use App\Job;
class AdsController extends Controller
{
    public function index(){
        $data = [];
        $data['category'] = Category::where('status',1)->where('parent_id',0)->get();

        $data['all_ads'] = SellService::where('status',1)->orderBy('id','desc')->get();
    	return view('frontend.pages.ads',$data);
    }

    public function details($id){
        $data = [];
        $data['products_details'] = SellService::where('id',$id)->first();
    	return view('frontend.pages.ads-details',$data);
    }
 	public function post_ads(){
    	return view('frontend.pages.ads-post.post-ads');
    }
    public function category(){
    	return view('frontend.pages.ads-post.category');
    }
    public function category_rent(){
    	return view('frontend.pages.ads-post.category-rent');
    }

     public function job(){

        $data = [];
        $job_id = 13;
        $data['jobs_category'] = DB::table('categories')->where('parent_id',$job_id)->get();
        //print_r($data['jobs_category']);
        // $data['devesion']= Devesion::all();
        $data['divisions'] = DB::table('devesions')->where('status',1)->get();
    	return view('frontend.pages.jobs.index',$data);
    }

    public function jobSave(Request $request){
        $job = new Job;
        $job->user_id = $request->user_id;
        $job->job_title = $request->job_title;
        $job->job_cat = $request->job_cat;
        $job->job_cat = $request->job_cat;
        $job->devesion_id = $request->devesion_id;
        $job->city_id = $request->city_id;
        $job->job_description = nl2br($request->job_description);
        $job->job_type = $request->job_type;
        $job->designation = $request->designation;
        $job->recive_application_vie = $request->recive_application_vie;
        $job->salary_from = $request->salary_from;
        $job->salary_to = $request->salary_to;
        $job->vacancies = $request->vacancies;
        $job->application_last_date = $request->application_last_date;
        $job->company_name = $request->company_name;

    
        


            $company_logo = $request->file('company_logo');
        if ($company_logo) {
            $image_name = Auth::user()->id.time().'.'.request()->company_logo->getClientOriginalExtension();


            $image_full_name = $image_name;
            $destination_path = 'uploads/company_logo/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('company_logo')->move($destination_path, $image_full_name);
            if ($success) {
                $job->company_logo = $image_url;
            }
        }



        $job->education_qualification = $request->education_qualification;
        $job->exprience = $request->exprience;
        $job->skill = $request->skill;
        $job->age = $request->age;
        $job->gender = $request->gender;
        $job->save();
        $this->setSuccess('Job Successfully Submit wait for Approve');
        return redirect('/profile/my-job');
    }
    public function category_rent1(){
    	return view('frontend.pages.ads-post.category-rent1');
    }
    public function category1(){
    	return view('frontend.pages.ads-post.category1');
    }
      public function category_rent1_item(){
    	return view('frontend.pages.ads-post.category-rent1-item');
    }
      public function category1_item(){
    	return view('frontend.pages.ads-post.category1-item');
    }
    
    public function sell_item(){
        $data = [];
        $data['category'] = Category::where('status',1)->where('parent_id',0)->get();
        $data['devesion']= Devesion::all();
        return view('frontend.pages.sell_item.mobile',$data);
    }

    public function getSubcategory($category){
        // $data = [];
        return DB::table('categories')->where('status',1)->where('parent_id',$category)->get();
        // $data['brand'] = DB::table('brands')->where('status',1)->where('category_id',$category)->get();
        // return $data;
    }

    public function getBrand($brand){
        $brands = DB::table('brands')->where('category_id',$brand)->get();
        $output = '<option value="">Select</option>';
         foreach($brands as $row)
         {
          $output .= '<option value="'.$row->id.'">'.$row->brand.'</option>';
         }
         echo $output;
    }
    public function getModel($model){
        $models = DB::table('models')->where('brand_id',$model)->get();
        $output = '<option value="">Select</option>';
         foreach($models as $row)
         {
          $output .= '<option value="'.$row->id.'">'.$row->model.'</option>';
         }
         echo $output;
    }

    public function getCity($devesion){
        return DB::table('districts')->where('division_id',$devesion)->get();
    }

    public function sell_item_post(Request $request){
        $validator = Validator::make(request()->all(),[
            'brand' => 'required',
            'image' => 'required',
            'model'=> 'required',
            'description'=> 'required',
           
        ]);
        
    
if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try{

             if($request->hasfile('image'))
         {
            $i=1;
            foreach($request->file('image') as $file)
            {
                $i++;
                // $image_name = $file->getClientOriginalName();
                $image_name = time().'.'.$item->user_id.'.'.$i.'.'.$file->getClientOriginalExtension();

// $image_resize = Input::file('image')->getRealPath();
                $image_resize = Image::make($file->getRealPath());   
                $image_resize->resize(100,100);
                $image_resize->insert(public_path('logo.png'), 'bottom-right', 10, 10);
                $image_resize->save('images/post_images/'.$image_name);

                // Image::make( $gImg )->resize( 200, 150 )->save( 'images/decoration/' . $filename );
                // Image::make( $gImg )->fit( 646, 250 )->save( 'images/decoration/thumbs-' . $filename );


                // $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name;
                $destination_path = 'uploads/ads/';
                $image_url = $destination_path . $image_full_name;
                $success = $file->move($destination_path, $image_full_name);
                

                $data[] = $success;
            }
            
         }
         
        $item = new SellService();
        $item->user_id = Auth::user()->id;
        $item->image=implode(',',$data);

  

        

        $item->category_id = $request->category_id;
        $item->sub_category_id = $request->sub_category_id;
        $item->devesion_id = $request->devesion_id;
        $item->city_id = $request->city_id;
        $item->condition = $request->condition;
        $item->brand = $request->brand;
        $item->model = $request->model;
        $item->features = implode(',',$request->features);
        $item->edition = $request->edition;
        $item->description = $request->description;
        $item->authenticity = $request->authenticity;
        $item->price = $request->price;
        $item->na = $request->na;
        $item->exchange = $request->exchange;
        $item->save();
        return redirect('profile');
         }catch(\Exception $e){
            
            $this->setError($e->getMessage());
        }

        return redirect('profile');
        

    }



    public function adsEdit($id){
        $data = [];
        $data['category'] = Category::where('status',1)->where('parent_id',0)->get();
        $data['devesion']= Devesion::all();
        $data['adsUpdate'] = SellService::findOrFail($id);
        return view('frontend.pages.sell_item.edit',$data);

     }

     public function adsUpdate(Request $request,$id){
        $validator = Validator::make(request()->all(),[
            'brand' => 'required',
            'model'=> 'required',
            'description'=> 'required',
           
        ]);
        
    
if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try{
        $item =  SellService::findOrFail($id);
        $item->user_id = Auth::user()->id;


   if($request->hasfile('image'))
         {
 
            foreach($request->file('image') as $file)
            {
                // $image_name = $file->getClientOriginalName();
                $image_name = time().'.'.$item->user_id.'.'.$file->getClientOriginalExtension();

                // $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name;
                $destination_path = 'uploads/ads/';
                $image_url = $destination_path . $image_full_name;
                $success = $file->move($destination_path, $image_full_name);
                

                $data[] = $success;
            }
            $item->image=implode(',',$data);
         }

        

        $item->location = $request->location;
        $item->condition = $request->condition;
        $item->brand = $request->brand;
        $item->model = $request->model;
        $item->features = implode(',',$request->features);
        $item->edition = $request->edition;
        $item->description = $request->description;
        $item->authenticity = $request->authenticity;
        $item->price = $request->price;
        $item->na = $request->na;
        $item->save();
        return redirect('profile');
         }catch(\Exception $e){
            
            $this->setError($e->getMessage());
        }
     }

    public function adsDelete($id){
        SellService::destroy($id);
        $this->setSuccess('Ads   Deleted !!');
        return redirect()->back();
    }

    public function category_rent1_item_post(Request $request){
        $validator = Validator::make(request()->all(),[
            'brand' => 'required',
            'image' => 'required',
            'model'=> 'required',
            'description'=> 'required',
           
        ]);
        
    
if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try{
        $item = new SellService();
        $item->user_id = Auth::user()->id;


   if($request->hasfile('image'))
         {
 
            foreach($request->file('image') as $file)
            {
                // $image_name = $file->getClientOriginalName();
                $image_name = time().'.'.$item->user_id.'.'.$file->getClientOriginalExtension();

                // $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name;
                $destination_path = 'uploads/ads/';
                $image_url = $destination_path . $image_full_name;
                $success = $file->move($destination_path, $image_full_name);
                

                $data[] = $success;
            }
            $item->image=implode(',',$data);
         }

        

        $item->location = $request->location;
        $item->condition = $request->condition;
        $item->brand = $request->brand;
        $item->model = $request->model;
        $item->features = implode(',',$request->features);
        $item->edition = $request->edition;
        $item->description = $request->description;
        $item->authenticity = $request->authenticity;
        $item->price = $request->price;
        $item->na = $request->na;
        $item->save();
        return redirect('profile');
         }catch(\Exception $e){
            
            $this->setError($e->getMessage());
        }
    }
}
