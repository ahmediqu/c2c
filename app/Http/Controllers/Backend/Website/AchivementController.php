<?php

namespace App\Http\Controllers\Backend\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Models\Backend\Website\Achivement;
use App\Models\Backend\Website\AchivementCategory;
class AchivementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['achivements'] = Achivement::all();
        return view('backend.website.page.achivements.posts.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];
        $data['achivements_catgory'] = AchivementCategory::all();
        return view('backend.website.page.achivements.posts.add',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $achivements = new Achivement;
        $achivements->category_id=$request->category_id;
        $achivements->title=$request->title;
        $achivements->sub_title=$request->sub_title;
        $achivements->description=$request->description;
        $achivements->year=$request->year;
        $image = $request->file('image');
        if ($image) {
            $image_name = $request->image->getClientOriginalName();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name;
            $destination_path = 'uploads/website/achivements/posts/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('image')->move($destination_path, $image_full_name);
            if ($success) {
                $achivements->image = $image_url;
            }
        }
        
        $achivements->status=$request->status;
        $achivements->highlightachivement=$request->highlightachivement;
        $achivements->position=$request->position;
        $achivements->save();
        $this->setSuccess('Achivements  Added !!');
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
        $data['news'] = Achivement::findOrFail($id);
        return view('backend.website.page.achivements.posts.edit',$data);
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
        $achivements = Achivement::findOrFail($id);
        $achivements->category_id=$request->category_id;
        $achivements->title=$request->title;
        $achivements->sub_title=$request->sub_title;
        $achivements->description=$request->description;
        $achivements->year=$request->year;
        $image = $request->file('image');
        if ($image) {
            $image_name = $request->image->getClientOriginalName();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name;
            $destination_path = 'uploads/website/achivements/posts/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('image')->move($destination_path, $image_full_name);
            if ($success) {
                $achivements->image = $image_url;
            }
        }
        
        $achivements->status=$request->status;
        $achivements->highlightachivement=$request->highlightachivement;
        $achivements->position=$request->position;
        $achivements->save();
        $this->setSuccess('Achivements  updated !!');
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
    }
}
