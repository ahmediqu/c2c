<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Food;
use Image;
class FoodController extends Controller
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

        $food = new Food();
        $food->category_id = $request->category_id;
        $food->image = implode(',', $data);
        $food->sub_category_id = $request->sub_category_id;
        $food->title = $request->title;
        $food->price = $request->price;
        $food->description = $request->description;
        $food->user_id = $request->user_id;
        $food->save();
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
