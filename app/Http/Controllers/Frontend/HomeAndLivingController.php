<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\HomeLiving;
use Image;
use Auth;
class HomeAndLivingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasfile('image'))
         {
            $i=1;
            foreach($request->file('image') as $file)
            {
                $i++;
                // $image_name = $file->getClientOriginalName();
                $image_name = 'uploads/ads/'.time().'.'.Auth()->user()->id.'.'.$i.'.'.$file->getClientOriginalExtension();

                $image_resize = Image::make($file->getRealPath())->resize(306, 460)->insert(public_path('logo.png')); 
                $image_resize->save($image_name);  
                
                $success = $image_name;
                

                $data[] = $success;
            }
            
         }
        $home = new HomeLiving();
        $home->category_id = $request->category_id;
        $home->image = implode(',', $data);
        $home->sub_category_id = $request->sub_category_id;
        $home->title = $request->title;
        $home->division_id = $request->division_id;
        $home->city_id = $request->city_id;
        $home->condition = $request->condition;
        $home->price = $request->price;
        $home->description = $request->description;
        $home->user_id = Auth::user()->id;
        $home->furniture_type = $request->furniture_type;
        $home->na = $request->na;
        $home->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
