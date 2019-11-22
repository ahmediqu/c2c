<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FooterController extends Controller
{
    public function about(){

        return view('frontend.pages.footer.about');
    }
    public function condition(){

        return view('frontend.pages.footer.condition');
    }
    public function contact(){

        return view('frontend.pages.footer.contact');
    }
    public function privacy(){

        return view('frontend.pages.footer.privacy');
    }
    public function sitemap(){

        return view('frontend.pages.footer.site-map');
    }
    public function membership(){

        return view('frontend.pages.footer.membership');
    }
    public function promote(){

        return view('frontend.pages.footer.promote');
    }
    public function banner(){

        return view('frontend.pages.footer.banner');
    }
    public function sellfast(){

        return view('frontend.pages.footer.sellfast');
    }
}
