<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Backend\JobCategory;
use DB;
use App\Models\Order;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = [];
        $data['orderCount'] = Order::where('operational_status','Pending')->count();
        $data['books'] = Product::all();
        return view('backend.pages.e-comarce.product.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = []; 
        $data['category'] = DB::table('product_categories')->where('status',1)->get();
        $data['features'] = DB::table('product_features')->where('status',1)->get();
         return view('backend.pages.e-comarce.product.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->product_name = $request->product_name;
        $product->product_category = $request->product_category;
        $product->product_feature = $request->product_feature;
        $product->description = $request->description;
        $product->tag_sale = $request->tag_sale;
        $product->price = $request->price;
        $product->sale_price = $request->sale_price;
        $product->in_stock = $request->in_stock;
        $product->status = $request->status;
        $product->is_slide = $request->is_slide;
        // $image = $request->file('image');
        // if ($image) {
        //      foreach($request->file('image') as $file)
        //     {
        //         $file = [];
        //         $image_name = $file->getClientOriginalName();
        //         $ext = strtolower($image->getClientOriginalExtension());
        //         $image_full_name = $image_name;
        //         $destination_path = 'uploads/product/'.$product->product_category.'/';
        //         $image_url = $destination_path . $image_full_name;
        //         $success = $request->file('image')->move($destination_path, $image_full_name);
        //         if ($success) {
        //             $product->image = implode(',',$image_url);
        //         }
        //     }
        // }

        if($request->hasfile('image'))
         {
 
            foreach($request->file('image') as $file)
            {
                $image_name = $file->getClientOriginalName();
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name;
                $destination_path = 'uploads/product/'.$product->product_category.'/';
                $image_url = $destination_path . $image_full_name;
                $success = $file->move($destination_path, $image_full_name);
                

                $data[] = $success;
            }
            $product->image=implode(',',$data);
         }
        $product->save();
        $this->setSuccess('Product Added !!');
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
        $data['category'] = DB::table('product_categories')->where('status',1)->get();
        $data['book'] = Product::findOrFail($id);
        $data['features'] = DB::table('product_features')->where('status',1)->get();
        return view('backend.pages.e-comarce.product.edit',$data);
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
        $product = Product::findOrFail($id);
        $product->product_name = $request->product_name;
        $product->product_category = $request->product_category;
        $product->product_feature = $request->product_feature;
        $product->description = $request->description;
        $product->tag_sale = $request->tag_sale;
        $product->price = $request->price;
        $product->sale_price = $request->sale_price;
        $product->in_stock = $request->in_stock;
        $product->status = $request->status;
        $image = $request->file('image');
        if ($image) {
            $image_name = $request->image->getClientOriginalName();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name;
            $destination_path = 'uploads/books/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('image')->move($destination_path, $image_full_name);
            if ($success) {
                $product->image = $image_url;
            }
        }
        $product->save();
        $this->setSuccess('Book Added !!');
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
         Product::destroy($id);
        $this->setSuccess('Product Deleted !!');
        return redirect()->back();
    }
}
