<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProductFeatures;
class ProductFeaturesController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['category']= ProductFeatures::all();
        return view('backend.pages.e-comarce.features.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.e-comarce.features.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $features = new ProductFeatures;
        $features->features_name=$request->features_name;
        $features->user_id = $request->user_id;
        $features->features_description=$request->features_description;
        $features_image = $request->file('features_image');
        if ($features_image) {
            $image_name = time().'.'.request()->features_image->getClientOriginalExtension();


            $image_full_name = $image_name;
            $destination_path = 'uploads/product/features/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('features_image')->move($destination_path, $image_full_name);
            if ($success) {
                $features->features_image = $image_url;
            }
        }
        $features->position=$request->position;
        $features->status=$request->status;
        $features->save();
        $this->setSuccess('Product Features Us Added !!');
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
