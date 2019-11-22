<?php

namespace App\Http\Controllers\Backend\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Models\Backend\Website\Quotation;
use DB;
class QuotationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['quotations'] = Quotation::all();
        return view('backend.website.home_page_setting.quotation.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.website.home_page_setting.quotation.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quotation = new Quotation;
        $quotation->name=$request->name;
        $quotation->title=$request->title;
        $quotation->description=$request->description;
        $image = $request->file('image');
        if ($image) {
            $image_name = time().'.'.request()->image->getClientOriginalExtension();


            $image_full_name = $image_name;
            $destination_path = 'uploads/website/quotation/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('image')->move($destination_path, $image_full_name);
            if ($success) {
                $quotation->image = $image_url;
            }
        }
       
        $quotation->position=$request->position;
        $quotation->status=$request->status;
        $quotation->save();
        $this->setSuccess('Quotation Added !!');
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
        $data['quotations'] = Quotation::findOrFail($id);

        return view('backend.website.home_page_setting.quotation.edit',$data);

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
        
        
        
        $quotation = Quotation::findOrFail($id);
        $quotation->name=$request->name;
        $quotation->title=$request->title;
        $quotation->description=$request->description;
        $image = $request->file('image');
        if ($image) {
            $image_name = time().'.'.request()->image->getClientOriginalExtension();


            $image_full_name = $image_name;
            $destination_path = 'uploads/website/quotation/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('image')->move($destination_path, $image_full_name);
            if ($success) {
                $quotation->image = $image_url;
            }
        }
       
        $quotation->position=$request->position;
        $quotation->status=$request->status;
        $quotation->save();
        $this->setSuccess('Quotation Updated !!');
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
        Quotation::destroy($id);
        $this->setSuccess('Quotation Updated !!');
        return redirect()->back();
    }
}
