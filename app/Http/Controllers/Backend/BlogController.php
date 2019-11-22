<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
class BlogController extends Controller
{
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['blog'] = Blog::all();
        $data['blog_category'] = Category::all();
        return view('backend.pages.health_school.blog.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];
        $data['blog_category'] = Category::all();
          return view('backend.pages.health_school.blog.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = new Blog;
        $news->category_id=$request->category_id;
        $news->blog_title=$request->blog_title;
        $news->blog_description=$request->blog_description;
        $news->populer=$request->populer;
        $news->user_id=$request->user_id;
        $image = $request->file('image');
        if ($image) {
            $image_name = $request->image->getClientOriginalName();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name;
            $destination_path = 'uploads/blog/posts/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('image')->move($destination_path, $image_full_name);
            if ($success) {
                $news->image = $image_url;
            }
        }
        
        
        $news->status=$request->status;
        $news->position=$request->position;
        $news->save();
        $this->setSuccess('Blog Added !!');
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
        $data['news'] = News::findOrFail($id);
        return view('backend.website.page.news.posts.edit',$data);

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
        
        
        
        $news = News::findOrFail($id);
        $news->category_id=$request->category_id;
        $news->news_title=$request->news_title;
        $news->news_description=$request->news_description;
        $news->populer=$request->populer;
        $news->user_id=$request->user_id;
        $image = $request->file('image');
        if ($image) {
            $image_name = $request->image->getClientOriginalName();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name;
            $destination_path = 'uploads/website/news/posts/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('image')->move($destination_path, $image_full_name);
            if ($success) {
                $news->image = $image_url;
            }
        }
        
        $news->status=$request->status;
        $news->position=$request->position;
        $news->save();
        $this->setSuccess('News  Updated !!');
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
        News::destroy($id);
        $this->setSuccess('News  Deleted !!');
        return redirect()->back();
    }
}
