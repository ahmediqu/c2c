<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Food;
use App\Category;
use App\RentApartmentFlat;
use App\HomeLiving;
use App\FashionHealthBeauty;
use App\PetsAnimals;
use App\HobbiesSportsKids;
use App\BusinessIndustry;
use App\Education;
use App\Service;
class PageController extends Controller
{
    public function food($id){
    	$data = [];
    	$data['category'] = Category::where('status',1)->where('parent_id',0)->get();
    	$data['food'] = Food::where('category_id',$id)->get();
    	return view('frontend.pages.food',$data);
    }

    public function foodDetails($id){
    	$data = [];
    	$data['foods'] = Food::where('id',$id)->first();
    	return view('frontend.pages.foodDetails',$data);
    }

    public function property($id){
        $data = [];
        $data['category'] = Category::where('status',1)->where('parent_id',0)->get();
        $data['property'] = RentApartmentFlat::where('category_id',5)->get();
        return view('frontend.pages.property',$data);
    }

    public function propertyDetails($id){
        $data = [];
        $data['property'] = RentApartmentFlat::where('id',$id)->first();
        return view('frontend.pages.propertyDetails',$data);
    }

    public function homeAndLiving($id){
        $data = [];
        $data['home_and_living'] = HomeLiving::where('category_id',$id)->get();
        $data['category'] = Category::where('status',1)->where('parent_id',0)->get();
        return view('frontend.pages.homeAndLiving',$data);
    }

    public function homeAndLivingDetails($id){
        $data = [];
        $data['home_and_living'] = HomeLiving::where('id',$id)->first();
        return view('frontend.pages.homeAndLivingDetails',$data);
    }
    public function fashion($id){
        $data = [];
        $data['fashion'] = FashionHealthBeauty::where('category_id',$id)->get();
        $data['category'] = Category::where('status',1)->where('parent_id',0)->get();
        return view('frontend.pages.fashion',$data);
    }

    public function fashionDetails($id){
        $data = [];
        $data['fashion'] = FashionHealthBeauty::where('id',$id)->first();
        return view('frontend.pages.fashionDetails',$data);
    }
    public function pets($id){
        $data = [];
        $data['pets'] = PetsAnimals::where('category_id',$id)->get();
        $data['category'] = Category::where('status',1)->where('parent_id',0)->get();
        return view('frontend.pages.pets',$data);
    }

    public function petsDetails($id){
        $data = [];
        $data['pets'] = PetsAnimals::where('id',$id)->first();
        return view('frontend.pages.petsDetails',$data);
    }
    public function sports($id){
        $data = [];
        $data['sports'] = HobbiesSportsKids::where('category_id',$id)->get();
        $data['category'] = Category::where('status',1)->where('parent_id',0)->get();
        return view('frontend.pages.sports',$data);
    }
    public function sportsDetails($id){
        $data = [];
        $data['sports'] = HobbiesSportsKids::where('id',$id)->first();
        return view('frontend.pages.sportsDetails',$data);
    }

    public function business($id){
        $data = [];
        $data['business'] = BusinessIndustry::where('category_id',$id)->get();
        $data['category'] = Category::where('status',1)->where('parent_id',0)->get();
        return view('frontend.pages.business',$data);
    }

    public function businessDetails($id){
        $data = [];
        $data['business'] = BusinessIndustry::where('id',$id)->first();
        return view('frontend.pages.businessDetails',$data);
    }

    public function education($id){
        $data = [];
        $data['education'] = Education::where('category_id',$id)->get();
        $data['category'] = Category::where('status',1)->where('parent_id',0)->get();
        return view('frontend.pages.education',$data);
    }

    public function educationDetails($id){
        $data = [];
        $data['education'] = Education::where('id',$id)->first();
        return view('frontend.pages.educationDetails',$data);
    }

    public function services($id){
        $data = [];
        $data['services'] = Service::where('category_id',$id)->get();
        $data['category'] = Category::where('status',1)->where('parent_id',0)->get();
        return view('frontend.pages.services',$data);
    }

    public function servicesDetails($id){
        $data = [];
        $data['services'] = Service::where('id',$id)->first();
        return view('frontend.pages.servicesDetails',$data);
    }
    
}
