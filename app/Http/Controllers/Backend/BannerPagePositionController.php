<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Backend\BannerPosition;
use App\Models\Frontend\BannerAdsPagePositionRequest;
class BannerPagePositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['banner'] = BannerPosition::all();
        return view('backend.bannerPagePosition.index',$data);
    }


    public function request(){
        $data = [];
        $data['banner'] = BannerAdsPagePositionRequest::all();
        return view('backend.bannerPagePosition.request',$data);
    }

    public function singleRequest($id){
        $data = [];
        $data['id'] = $id;
        $data['banner'] = BannerAdsPagePositionRequest::where('id',$id)->first();
        return view('backend.bannerPagePosition.single_banner_request',$data);
    }

    public function approved(Request $request,$id){
        $fddsdgdfg = BannerAdsPagePositionRequest::findOrFail($id);
        $fddsdgdfg->status = '1';
        $fddsdgdfg->save();
        $this->setSuccess('Approved !!');
        return back();
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
        $banner = new BannerPosition();
        $banner->page_name = $request->page_name;
        $banner->status = $request->status;
        $banner->save();
        $this->setSuccess('Saved  !!');
        return back();
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
