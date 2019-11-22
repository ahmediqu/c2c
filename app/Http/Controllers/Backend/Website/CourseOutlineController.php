<?php

namespace App\Http\Controllers\Backend\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Backend\Website\Courseoutline;
use App\Models\Backend\Website\Course;
class CourseOutlineController extends Controller
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
        $data["courseoutlines"] = Courseoutline::all();
        $data["course"] = Course::all();
        return view("backend.website.home_page_setting.courseoutline.list",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = [];
         $data["course"] = Course::all();
        return view('backend.website.home_page_setting.courseoutline.add',$data);
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
        $courseoutlines = new Courseoutline;
        $courseoutlines->course=$request->course;
        $courseoutlines->topic_title=$request->topic_title;
        $courseoutlines->topic_details=$request->topic_details;
        
       
        $courseoutlines->position=$request->position;
        $courseoutlines->status=$request->status;
        $courseoutlines->save();
        $this->setSuccess('Course Outline Added !!');
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
        $data['courseoutlines'] = Courseoutline::findOrFail($id);

        return view('backend.website.home_page_setting.courseoutline.edit',$data);
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

         $courseoutlines = Courseoutline::findOrFail($id);
        $courseoutlines->course=$request->course;
        $courseoutlines->topic_title=$request->topic_title;
        $courseoutlines->topic_details=$request->topic_details;
        
       
        $courseoutlines->position=$request->position;
        $courseoutlines->status=$request->status;
        $courseoutlines->save();
        $this->setSuccess('Course Outline Updated !!');
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

         Courseoutline::destroy($id);
        $this->setSuccess('Quotation Updated !!');
        return redirect()->back();
    }
}
