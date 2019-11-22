<?php

namespace App\Http\Controllers\Backend\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Backend\Website\Award;
class AwardsController extends Controller
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
        $data["awards"] = Award::all();
        return view("backend.website.home_page_setting.awards.list",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.website.home_page_setting.awards.add');
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

        $awards = new Award;
        $awards->name=$request->name;
        $awards->location=$request->location;
        $awards->description=$request->description;
        
       
        $awards->position=$request->position;
        $awards->status=$request->status;
        $awards->save();
        $this->setSuccess('Awards Added !!');
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
       $data['awards'] = Award::findOrFail($id);

        return view('backend.website.home_page_setting.awards.edit',$data);
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
        $awards = Award::findOrFail($id);
        $awards->name=$request->name;
        $awards->location=$request->location;
        $awards->description=$request->description;
        
       
        $awards->position=$request->position;
        $awards->status=$request->status;
        $awards->save();
        $this->setSuccess('Awards Added !!');
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
        Award::destroy($id);
        $this->setSuccess('Award Updated !!');
        return redirect()->back();
    }
}
