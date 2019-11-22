<?php

namespace App\Http\Controllers\Backend\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Models\Backend\Website\Instructor;
class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['instructors'] = Instructor::all();
        return view('backend.website.home_page_setting.instructor.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.website.home_page_setting.instructor.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $instructor = new Instructor;
        $instructor->instructor_name=$request->instructor_name;
        $instructor->instructor_title=$request->instructor_title;
        $instructor->instructor_description=$request->instructor_description;
        $image = $request->file('image');
        if ($image) {
            $image_name = $request->image->getClientOriginalName();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name;
            $destination_path = 'uploads/website/instructors/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('image')->move($destination_path, $image_full_name);
            if ($success) {
                $instructor->image = $image_url;
            }
        }
        $instructor->btn_name=$request->btn_name;
        $instructor->position=$request->position;
        $instructor->status=$request->status;
        $instructor->save();
        $this->setSuccess('Instructor Added !!');
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
        $data['instructor'] = Instructor::findOrFail($id);

        return view('backend.website.home_page_setting.instructor.edit',$data);

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
        
        
        
        $instructor = Instructor::findOrFail($id);
        $instructor->instructor_name=$request->instructor_name;
        $instructor->instructor_title=$request->instructor_title;
        $instructor->instructor_description=$request->instructor_description;
        $image = $request->file('image');
        if ($image) {
            $image_name = $request->image->getClientOriginalName();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name;
            $destination_path = 'uploads/website/instructors/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('image')->move($destination_path, $image_full_name);
            if ($success) {
                $instructor->image = $image_url;
            }
        }
        $instructor->btn_name=$request->btn_name;
        $instructor->position=$request->position;
        $instructor->status=$request->status;
        $instructor->save();
        $this->setSuccess('Instructor Updated !!');
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
        Instructor::destroy($id);
        $this->setSuccess('Instructor Updated !!');
        return redirect()->back();
    }
}
