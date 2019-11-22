<?php

namespace App\Http\Controllers\Backend\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Backend\Website\Submenu;
use Session;
use DB;
class SubmenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['menus'] = Submenu::all();
        return view('backend.website.home_page_setting.submenus.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];
        $data['menus'] = DB::table('menuses')->get();
        return view('backend.website.home_page_setting.submenus.add',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $submenu = new Submenu;
        $submenu->submenu=$request->submenu;
        $submenu->menu_id=$request->menu_id;
        $submenu->position=$request->position;

        $submenu->order=$request->order;
        $submenu->status=$request->status;
        $submenu->save();
        $this->setSuccess('Submenu Added !!');
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
        $data['menus'] = DB::table('menuses')->get();
        $data['menu'] = Submenu::findOrFail($id);

        return view('backend.website.home_page_setting.submenus.edit',$data);

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
        
        
        
        $submenu = Submenu::findOrFail($id);
        $submenu->submenu=$request->submenu;
        $submenu->menu_id=$request->menu_id;
        $submenu->position=$request->position;

        $submenu->order=$request->order;
        $submenu->status=$request->status;
        $submenu->save();
        $this->setSuccess('Submenu Updated !!');
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
        Submenu::destroy($id);
        $this->setSuccess('Submenu Deleted !!');
        return redirect()->back();
    }
}
