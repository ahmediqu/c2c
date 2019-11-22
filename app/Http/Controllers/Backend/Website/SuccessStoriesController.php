<?php

namespace App\Http\Controllers\Backend\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Backend\Website\Success;
use Session;
class SuccessStoriesController extends Controller
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
        $data["successstories"] = Success::all();
        return view("backend.website.home_page_setting.success.list",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.website.home_page_setting.success.add");
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

        $success_story = new Success;
        $success_story->name=$request->name;
        $success_story->title=$request->title;
        $success_story->description=$request->description;
        $image = $request->file('image');
        if ($image) {
            $image_name = time().'.'.request()->image->getClientOriginalExtension();


            $image_full_name = $image_name;
            $destination_path = 'uploads/website/success/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('image')->move($destination_path, $image_full_name);
            if ($success) {
                $success_story->image = $image_url;
            }
        }
       
        $success_story->position=$request->position;
        $success_story->status=$request->status;
        $success_story->save();
        $this->setSuccess('Success Story Added !!');
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
        $data["success"] = Success::findOrFail($id);

        return view("backend.website.home_page_setting.success.edit",$data);
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
        $success_story = Success::findOrFail($id);
        $success_story->name=$request->name;
        $success_story->title=$request->title;
        $success_story->description=$request->description;
        $image = $request->file('image');
        if ($image) {
            $image_name = time().'.'.request()->image->getClientOriginalExtension();


            $image_full_name = $image_name;
            $destination_path = 'uploads/website/success/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('image')->move($destination_path, $image_full_name);
            if ($success) {
                $success_story->image = $image_url;
            }
        }
       
        $success_story->position=$request->position;
        $success_story->status=$request->status;
        $success_story->save();
        $this->setSuccess('Success Story Updated!!');
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
        Success::destroy($id);
        $this->setSuccess('Success Deleted !!');
        return redirect()->back();
    }
}
