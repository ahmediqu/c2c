<?php

namespace App\Http\Controllers\Backend\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Models\Backend\Website\Aboutus;
class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['aboutus'] = Aboutus::all();
        return view('backend.website.home_page_setting.about.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.website.home_page_setting.about.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aboutus = new Aboutus;
        $aboutus->title=$request->title;
        $aboutus->description=$request->description;
        $aboutus->vedio_embade=$request->vedio_embade;
        $image = $request->file('image');
        if ($image) {
            $image_name = $request->image->getClientOriginalName();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name;
            $destination_path = 'uploads/website/aboutus/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('image')->move($destination_path, $image_full_name);
            if ($success) {
                $aboutus->image = $image_url;
            }
        }
        $aboutus->link=$request->link;
        $aboutus->status=$request->status;
        $aboutus->save();
        $this->setSuccess('About Us Added !!');
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
        $data['aboutus'] = Aboutus::findOrFail($id);

        return view('backend.website.home_page_setting.about.edit',$data);

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
        
        
        
        $aboutus = Aboutus::findOrFail($id);
        $aboutus->title=$request->title;
        $aboutus->description=$request->description;
        $aboutus->vedio_embade=$request->vedio_embade;
        $image = $request->file('image');
        if ($image) {
            $image_name = $request->image->getClientOriginalName();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name;
            $destination_path = 'uploads/website/aboutus/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('image')->move($destination_path, $image_full_name);
            if ($success) {
                $aboutus->image = $image_url;
            }
        }
        $aboutus->link=$request->link;
        $aboutus->status=$request->status;
        $aboutus->save();
        $this->setSuccess('Aboutus Updated !!');
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
        Aboutus::destroy($id);
        $this->setSuccess('Aboutus Updated !!');
        return redirect()->back();
    }
}
