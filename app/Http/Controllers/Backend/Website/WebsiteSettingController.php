<?php

namespace App\Http\Controllers\Backend\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Models\Backend\Website\WebsiteSetting;
class WebsiteSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['settings'] = WebsiteSetting::all();
        return view('backend.website.home_page_setting.setting.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $websiteSetting = new WebsiteSetting;
        $websiteSetting->company_name = $request->company_name;
        $image = $request->file('image');
        if ($image) {
            $image_name = $request->image->getClientOriginalName();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name;
            $destination_path = 'uploads/website/logo/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('image')->move($destination_path, $image_full_name);
            if ($success) {
                $websiteSetting->image = $image_url;
            }
        }
        $websiteSetting->company_slogan = $request->company_slogan;
        $websiteSetting->company_address1 = $request->company_address1;
        $websiteSetting->company_address2 = $request->company_address2;
        $websiteSetting->company_phone1 = $request->company_phone1;
        $websiteSetting->company_phone2 = $request->company_phone2;
        $websiteSetting->company_email1 = $request->company_email1;
        $websiteSetting->company_email2 = $request->company_email2;
        $websiteSetting->company_fb = $request->company_fb;
        $websiteSetting->company_twitter = $request->company_twitter;
        $websiteSetting->company_linkendin = $request->company_linkendin;
        $websiteSetting->company_skype = $request->company_skype;
        $websiteSetting->company_youtube = $request->company_youtube;
        $websiteSetting->save();
        $this->setSuccess('General Setting Added !!');
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
        $data['setting'] = WebsiteSetting::findOrFail($id);
        return view('backend.website.home_page_setting.setting.setting',$data);
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
        $websiteSetting = WebsiteSetting::findOrFail($id);
        $websiteSetting->company_name = $request->company_name;
        $image = $request->file('image');
        if ($image) {
            $image_name = $request->image->getClientOriginalName();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name;
            $destination_path = 'uploads/website/logo/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('image')->move($destination_path, $image_full_name);
            if ($success) {
                $websiteSetting->image = $image_url;
            }
        }
        $websiteSetting->company_slogan = $request->company_slogan;
        $websiteSetting->company_address1 = $request->company_address1;
        $websiteSetting->company_address2 = $request->company_address2;
        $websiteSetting->company_phone1 = $request->company_phone1;
        $websiteSetting->company_phone2 = $request->company_phone2;
        $websiteSetting->company_email1 = $request->company_email1;
        $websiteSetting->company_email2 = $request->company_email2;
        $websiteSetting->company_fb = $request->company_fb;
        $websiteSetting->company_twitter = $request->company_twitter;
        $websiteSetting->company_linkendin = $request->company_linkendin;
        $websiteSetting->company_skype = $request->company_skype;
        $websiteSetting->company_youtube = $request->company_youtube;
        $websiteSetting->save();
        $this->setSuccess('General Setting Added !!');
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
