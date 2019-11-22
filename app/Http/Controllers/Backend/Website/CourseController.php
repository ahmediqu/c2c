<?php

namespace App\Http\Controllers\Backend\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Backend\Website\Course;
use Session;
use DB;
use App\Models\Backend\Website\Instructor;
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['courses'] = Course::all();
        return view('backend.website.home_page_setting.course.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];
        $data['instructor'] = DB::table('instructors')->get();
        return view('backend.website.home_page_setting.course.add',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = new Course;
        $course->course_title=$request->course_title;
        $course->course_description=$request->course_description;
        $course->instractor_id=$request->instractor_id;
        $course->course_fee=$request->course_fee;
        $course->course_duration=$request->course_duration;
        $course->class_weekly_duration=$request->class_weekly_duration;
        $course->class_hourly_duration=$request->class_hourly_duration;
        $course->location=$request->location;
        $course->course_start=$request->course_start;
        $course->contact_number_1=$request->contact_number_1;
        $course->contact_number_2=$request->contact_number_2;
        $image = $request->file('image');
        if ($image) {
            $image_name = $request->image->getClientOriginalName();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name;
            $destination_path = 'uploads/website/course/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('image')->move($destination_path, $image_full_name);
            if ($success) {
                $course->image = $image_url;
            }
        }

        $course->order=$request->order;
        $course->status=$request->status;
        $course->view_position=$request->view_position;
        $course->save();
        $this->setSuccess('Course Added !!');
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
        $data['instructors'] = DB::table('instructors')->get();
        $data['course'] = Course::findOrFail($id);

        return view('backend.website.home_page_setting.course.edit',$data);

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
        
        
        
        $course = Course::findOrFail($id);
        $course->course_title=$request->course_title;
        $course->course_description=$request->course_description;
        $course->instractor_id=$request->instractor_id;
        $course->course_fee=$request->course_fee;
        $course->course_duration=$request->course_duration;
        $course->class_weekly_duration=$request->class_weekly_duration;
        $course->class_hourly_duration=$request->class_hourly_duration;
        $course->location=$request->location;
        $course->course_start=$request->course_start;
        $course->contact_number_1=$request->contact_number_1;
        $course->contact_number_2=$request->contact_number_2;
        $image = $request->file('image');
        if ($image) {
            $image_name = $request->image->getClientOriginalName();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name;
            $destination_path = 'uploads/website/course/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('image')->move($destination_path, $image_full_name);
            if ($success) {
                $course->image = $image_url;
            }
        }

        $course->order=$request->order;
        $course->status=$request->status;
        $course->view_position=$request->view_position;
        $course->save();
        $this->setSuccess('Course Updated !!');
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
       Course::destroy($id);
        $this->setSuccess('Course Deleted !!');
        return redirect()->back();
    }
}
