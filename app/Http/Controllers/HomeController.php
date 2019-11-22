<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Frontend\SellService;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [];
        $data['total_sell_service'] = SellService::count();
        return view('home',$data);
    }
}
