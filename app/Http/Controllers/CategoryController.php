<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
class CategoryController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['category']= Category::all();
        return view('backend.pages.category.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];
        $data['category'] = Category::all();
        return view('backend.pages.category.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category;
        $category->category_name=$request->category_name;
        $category->user_id = $request->user_id;
        $category->parent_id = $request->parent_id;
        $category->category_description=$request->category_description;
        $category_image = $request->file('category_image');
        if ($category_image) {
            $image_name = time().'.'.request()->category_image->getClientOriginalExtension();


            $image_full_name = $image_name;
            $destination_path = 'uploads/product/category/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('category_image')->move($destination_path, $image_full_name);
            if ($success) {
                $category->category_image = $image_url;
            }
        }
        $category->position=$request->position;
        $category->status=$request->status;
        $category->save();
        $this->setSuccess('Product Category Us Added !!');
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
        $data['category'] = Category::all();
        $data['category_edit'] = Category::findOrFail($id);
        return view('backend.pages.category.edit',$data);
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
        $category = Category::findOrFail($id);
         $category->category_name=$request->category_name;
        $category->user_id = $request->user_id;
        $category->parent_id = $request->parent_id;
        $category->category_description=$request->category_description;
        $category_image = $request->file('category_image');
        if ($category_image) {
            $image_name = time().'.'.request()->category_image->getClientOriginalExtension();


            $image_full_name = $image_name;
            $destination_path = 'uploads/product/category/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('category_image')->move($destination_path, $image_full_name);
            if ($success) {
                $category->category_image = $image_url;
            }
        }
        $category->position=$request->position;
        $category->status=$request->status;
        $category->save();
        $this->setSuccess('Product Category Us Added !!');
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
