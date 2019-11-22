@extends('backend.layouts.master')
@section('page-title','Menus')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    @include('backend.partials._message')
                    <a href="{{url('admin/gallery')}}" class="btn btn-outline-info float-right">Back</a>
                    <h3>Gallery</h3>
                    <form action="{{route('gallery.update',$gallery->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <section>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1"> Gallery Category </label>

                                <div class="col-lg-10">
                                   <select name="category_id" id="" class="form-control">
                                      
                                 
                                        <?php 
                                         $categorys = DB::table('gallery_categories')->where('id',$gallery->category_id)->first();
                                        $news_category = DB::table('gallery_categories')->get();
                                        ?>
                                        <option value="">{{$categorys->category}}</option>
                                        <option>Select Category</option>
                                        @foreach($news_category as $data)
                                            <option value="{{$data->id}}">{{$data->category}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1"> Title </label>
                                <div class="col-lg-10">
                                    <input id="name1" name="title" type="text" class="required form-control" required="" value="{{$gallery->title}}">
                                </div>
                            </div>
                           
                            <div class="form-group row">
                                <label class="col-lg-2 control-label " for="surname1"> Description </label>
                                <div class="col-lg-10">
                                    <textarea name="description" id="" cols="10" rows="5" class="form-control">{{$gallery->description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label " for="surname1"> Upload Photo </label>
                                <div class="col-lg-10">
                                    <div class="card-box">

                                    

                                    <input type="file" class="dropify" name="image" data-default-file="assets/images/gallery/1.jpg">
                                </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1"> Positioning Order </label>
                                <div class="col-lg-10">
                                    <input id="name1" name="position" type="text" class="required form-control" value="{{$gallery->position}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label " for="surname1"> Status </label>
                                <div class="col-lg-10">
                                    <select name="status" id="" class="form-control">
                                       <?php if($gallery->status==1){?>
                                            <option value="1">Active</option>
                                        <?php }else{ ?>
                                            <option value="0">Inactive</option>
                                        <?php } ?>
                                        <option value="1">Active</option>
                                         <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-outline-info">Save</button>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection