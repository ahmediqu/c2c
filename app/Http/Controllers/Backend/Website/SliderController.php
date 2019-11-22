<?php

namespace App\Http\Controllers\Backend\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Models\Backend\Website\Slider;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = [];
        $data['sliders'] = Slider::all();
        return view('backend.website.home_page_setting.sliders.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.website.home_page_setting.sliders.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider = new Slider;
        $slider->title=$request->title;
        $slider->description=$request->description;
        $image = $request->file('image');
        if ($image) {
            $image_name = $request->image->getClientOriginalName();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name;
            $destination_path = 'uploads/website/slider/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('image')->move($destination_path, $image_full_name);
            if ($success) {
                $slider->image = $image_url;
            }
        }
        $slider->link=$request->link;
        $slider->position=$request->position;
        $slider->status=$request->status;
        $slider->save();
        $this->setSuccess('sliders Added !!');
        return redirect()->back();
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
        $data = [];
        $data['slider'] = Slider::findOrFail($id);

        return view('backend.website.home_page_setting.sliders.edit',$data);

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
        
        
        
        $slider = Slider::findOrFail($id);
         $slider->title=$request->title;
        $slider->description=$request->description;
        $image = $request->file('image');
        if ($image) {
            $image_name = $request->image->getClientOriginalName();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name;
            $destination_path = 'uploads/website/slider/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('image')->move($destination_path, $image_full_name);
            if ($success) {
                $slider->image = $image_url;
            }
        }
        $slider->link=$request->link;
        $slider->position=$request->position;
        $slider->status=$request->status;
        $slider->save();
        $this->setSuccess('sliders Updated !!');
        return redirect()->back();

       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Slider::destroy($id);
        $this->setSuccess('sliders Updated !!');
        return redirect()->back();
    }
}
