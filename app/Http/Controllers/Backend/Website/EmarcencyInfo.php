<?php

namespace App\Http\Controllers\Backend\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Backend\Website\EmargencyInfo;
class EmarcencyInfo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['emargency'] = EmargencyInfo::all();
        return view('backend.website.home_page_setting.emercency.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.website.home_page_setting.emercency.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $emargency = new EmargencyInfo;
        $emargency->phone=$request->phone;
        $emargency->phone_for_resion=$request->phone_for_resion;

        $emargency->email=$request->email;
        $emargency->position=$request->position;
        $emargency->status=$request->status;
        $emargency->save();
        $this->setSuccess('emargency info Added !!');
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
        $data['emargency'] = EmargencyInfo::findOrFail($id);

      return view('backend.website.home_page_setting.emercency.edit',$data);
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
        $emargency = EmargencyInfo::findOrFail($id);
        $emargency->phone=$request->phone;
        $emargency->phone_for_resion=$request->phone_for_resion;

        $emargency->email=$request->email;
        $emargency->position=$request->position;
        $emargency->status=$request->status;
        $emargency->save();
        $this->setSuccess('emargency info Added !!');
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
        EmargencyInfo::destroy($id);
        $this->setSuccess('emargency info Deleted !!');
        return redirect()->back();
    }
}
