<?php

namespace App\Http\Controllers\Backend\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Backend\Website\Whoweare;
class WhoWeAreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = [];
        $data["whoweare"] = Whoweare::all();
        return view("backend.website.home_page_setting.whoweare.list",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.website.home_page_setting.whoweare.add');
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $whoweare = new Whoweare;
       
        $whoweare->title=$request->title;
        $whoweare->description=$request->description;
        $image = $request->file('image');
        if ($image) {
            $image_name = time().'.'.request()->image->getClientOriginalExtension();


            $image_full_name = $image_name;
            $destination_path = 'uploads/website/quotation/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('image')->move($destination_path, $image_full_name);
            if ($success) {
                $whoweare->image = $image_url;
            }
        }
       
        $whoweare->position=$request->position;
        $whoweare->status=$request->status;
        $whoweare->save();
        $this->setSuccess('Who We Are Added !!');
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
        //
        $data = [];
        $data['whoweare'] = Whoweare::findOrFail($id);

        return view('backend.website.home_page_setting.whoweare.edit',$data);
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
        //\
        $whoweare = Whoweare::findOrFail($id);
        
        $whoweare->title=$request->title;
        $whoweare->description=$request->description;
        $image = $request->file('image');
        if ($image) {
            $image_name = time().'.'.request()->image->getClientOriginalExtension();


            $image_full_name = $image_name;
            $destination_path = 'uploads/website/quotation/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('image')->move($destination_path, $image_full_name);
            if ($success) {
                $whoweare->image = $image_url;
            }
        }
       
        $whoweare->position=$request->position;
        $whoweare->status=$request->status;
       $whoweare->save();
        $this->setSuccess('Who We Are Updated !!');
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
        //

        Whoweare::destroy($id);
        $this->setSuccess('Who We Are Updated !!');
        return redirect()->back();
    }
}
