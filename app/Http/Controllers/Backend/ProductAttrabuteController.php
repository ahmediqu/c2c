<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Models\Backend\ProductAttrubate;
class ProductAttrabuteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addProductAttributes($id)
    {
        $data = [];
        $data['products'] = Product::where('id',$id)->first();
        return view('backend.pages.e-comarce.product_attributes.create',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function saveProductAttributes(Request $request,$id=null)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>";
            // print_r($data);
            // exit();
            foreach($data['sku'] as $key => $val){
                if(!empty($val)){
                    $attributes = new ProductAttrubate;
                    $attributes->product_id = $id;
                    $attributes->sku = $val;
                    $attributes->product_size = $data['product_size'][$key];
                    $attributes->product_color = $data['product_color'][$key];
                    $attributes->product_stoke = $data['product_stoke'][$key];
                    $attributes->product_price = $data['product_price'][$key];
                    $attributes->save();
                    
                }
            }
            return back();
        }
        
       
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
