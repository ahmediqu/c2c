<?php

namespace App\Http\Controllers\Backend\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Backend\Website\AchivementCategory;
use Session;
use DB;
class AchivementCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['achivementCategory'] = AchivementCategory::all();
        return view('backend.website.page.achivements.category.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.website.page.achivements.category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $achivementsCat = new AchivementCategory;
        $achivementsCat->catgory_name=$request->catgory_name;
        $image = $request->file('image');
        if ($image) {
            $image_name = $request->image->getClientOriginalName();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name;
            $destination_path = 'uploads/website/achivements/category/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('image')->move($destination_path, $image_full_name);
            if ($success) {
                $achivementsCat->image = $image_url;
            }
        }
        
        $achivementsCat->status=$request->status;
        $achivementsCat->position=$request->position;
        $achivementsCat->save();
        $this->setSuccess('Achivements Category Added !!');
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
        $data['achivementsCat'] = AchivementCategory::findOrFail($id);

        return view('backend.website.page.achivements.category.edit',$data);

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
        
        
        
        $achivementsCat = AchivementCategory::findOrFail($id);
        $achivementsCat->catgory_name=$request->catgory_name;
        $image = $request->file('image');
        if ($image) {
            $image_name = $request->image->getClientOriginalName();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name;
            $destination_path = 'uploads/website/achivements/category/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('image')->move($destination_path, $image_full_name);
            if ($success) {
                $achivementsCat->image = $image_url;
            }
        }
        
        $achivementsCat->status=$request->status;
        $achivementsCat->position=$request->position;
        $achivementsCat->save();
        $this->setSuccess('Achivements Cateogry Updated !!');
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
        AchivementCategory::destroy($id);
        $this->setSuccess('News Cateogry Deleted !!');
        return redirect()->back();
    }
}
