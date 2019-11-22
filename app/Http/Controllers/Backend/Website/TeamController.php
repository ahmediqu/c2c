<?php

namespace App\Http\Controllers\Backend\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Models\Backend\Website\Team;
class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['teams'] = Team::all();
        return view('backend.website.home_page_setting.team.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.website.home_page_setting.team.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team = new Team;
        $team->name=$request->name;
        $team->facebook=$request->facebook;
        $team->twetter=$request->twetter;
        $team->google_plus=$request->google_plus;
        $team->linkedin=$request->linkedin;
        $team->ins=$request->ins;
        $team->skype=$request->skype;
        $team->youtube=$request->youtube;
        $team->designation=$request->designation;
        $image = $request->file('image');
        if ($image) {
            $image_name = $request->image->getClientOriginalName();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name;
            $destination_path = 'uploads/website/team/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('image')->move($destination_path, $image_full_name);
            if ($success) {
                $team->image = $image_url;
            }
        }
        $team->dob=$request->dob;
        $team->position=$request->position;
        $team->message=$request->message;
        $team->status=$request->status;
        $team->save();
        $this->setSuccess('team Us Added !!');
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
        $data['team'] = Team::findOrFail($id);

        return view('backend.website.home_page_setting.team.edit',$data);

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
        
        
        
        $team = Team::findOrFail($id);
        $team->name=$request->name;
        $team->facebook=$request->facebook;
        $team->twetter=$request->twetter;
        $team->google_plus=$request->google_plus;
        $team->linkedin=$request->linkedin;
        $team->ins=$request->ins;
        $team->skype=$request->skype;
        $team->youtube=$request->youtube;
        $team->designation=$request->designation;
        $image = $request->file('image');
        if ($image) {
            $image_name = $request->image->getClientOriginalName();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name;
            $destination_path = 'uploads/website/team/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('image')->move($destination_path, $image_full_name);
            if ($success) {
                $team->image = $image_url;
            }
        }
        $team->dob=$request->dob;
         $team->position=$request->position;
        $team->message=$request->message;
        $team->status=$request->status;
        $team->save();
        $this->setSuccess('Team Updated !!');
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
        Team::destroy($id);
        $this->setSuccess('Team Deleted !!');
        return redirect()->back();
    }
}
