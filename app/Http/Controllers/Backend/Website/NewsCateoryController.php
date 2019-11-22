<?php

namespace App\Http\Controllers\Backend\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Models\Backend\Website\NewsCategory;
class NewsCateoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['news_category'] = NewsCategory::all();
        return view('backend.website.page.news.category.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.website.page.news.category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $n_catgory = new NewsCategory;
        $n_catgory->category=$request->category;
        $n_catgory->description=$request->description;
        $image = $request->file('image');
        if ($image) {
            $image_name = $request->image->getClientOriginalName();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name;
            $destination_path = 'uploads/website/news/category/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('image')->move($destination_path, $image_full_name);
            if ($success) {
                $n_catgory->image = $image_url;
            }
        }
        
        $n_catgory->status=$request->status;
        $n_catgory->position=$request->position;
        $n_catgory->save();
        $this->setSuccess('Category Added !!');
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
        $data['n_category'] = NewsCategory::findOrFail($id);

        return view('backend.website.page.news.category.edit',$data);

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
        
        
        
        $n_catgory = NewsCategory::findOrFail($id);
        $n_catgory->category=$request->category;
        $n_catgory->description=$request->description;
        $image = $request->file('image');
        if ($image) {
            $image_name = $request->image->getClientOriginalName();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name;
            $destination_path = 'uploads/website/news/category/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('image')->move($destination_path, $image_full_name);
            if ($success) {
                $n_catgory->image = $image_url;
            }
        }
        
        $n_catgory->status=$request->status;
        $n_catgory->position=$request->position;
        $n_catgory->save();
        $this->setSuccess('News Cateogry Updated !!');
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
        NewsCategory::destroy($id);
        $this->setSuccess('News Cateogry Deleted !!');
        return redirect()->back();
    }
}
