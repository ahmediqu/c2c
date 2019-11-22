@extends('backend.layouts.master')
@section('page-title','Menus')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    @include('backend.partials._message')
                    <a href="{{url('admin/news-posts')}}" class="btn btn-outline-info float-right">Back</a>
                    <h3>News Posts</h3>
                    <form action="{{route('news-posts.update',$news->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <section>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1"> Category </label>
                                <div class="col-lg-10">
                                    <select name="category_id" id="" class="form-control">
                                        @php
                                        $category = DB::table('news_categories')->where('id',$news->category_id)->first();
                                        $news_category = DB::table('news_categories')->get();
                                        @endphp
                                        <option value="{{$category->id}}">{{$category->category}}</option>
                                        <option>Select Category</option>
                                        @foreach($news_category as $data)
                                            <option value="{{$data->id}}">{{$data->category}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                           <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">News Title</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="news_title" type="text" class="required form-control" value="{{$news->news_title}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label " for="surname1"> Description </label>
                                <div class="col-lg-10">
                                    <textarea name="news_description" id="" cols="10" rows="5" class="form-control">
                                        {{$news->news_description}}
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label " for="surname1"> Upload Catgory Imasge </label>
                                <div class="col-lg-10">
                                    <div class="card-box">

                                    

                                    <input type="file" class="dropify" name="image" data-default-file="assets/images/gallery/1.jpg">
                                </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1"> Positioning Order </label>
                                <div class="col-lg-10">
                                    <input id="name1" name="position" type="text" class="required form-control" value="{{$news->position}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Populer</label>
                                <div class="col-lg-10">
                                    <select name="populer" id="" class="form-control">
                                        <?php if($news->pupoler == 1){ ?>
                                        <option value="1">Yes</option>
                                        }else{?>
                                        <option value="0">No</option>
                                    <?php } ?>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label " for="surname1"> Status </label>
                                <div class="col-lg-10">
                                    <select name="status" id="" class="form-control">
                                         <?php if($news->status==1){?>
                                            <option value="1">Active</option>
                                        <?php }else{ ?>
                                            <option value="0">Inactive</option>
                                        <?php } ?>
                                        <option value="1">Active</option>
                                         <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <button type="submit" class="btn btn-outline-info">Update</button>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection