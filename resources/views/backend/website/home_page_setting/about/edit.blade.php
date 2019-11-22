@extends('backend.layouts.master')
@section('page-title','About')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    @include('backend.partials._message')
                    <a href="{{url('admin/aboutus')}}" class="btn btn-outline-info float-right">Back</a>
                    <h3>About Us</h3>
                    <form action="{{route('aboutus.update',$aboutus->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <section>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1"> Title*</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="title" type="text" class="required form-control" required="" value="{{$aboutus->title}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label " for="surname1"> Description </label>
                                <div class="col-lg-10">
                                    <textarea name="description" id="summernote" cols="10" rows="5" class="form-control summernote">{!! $aboutus->description !!}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label " for="surname1"> Upload File </label>
                                <div class="col-lg-10">
                                    <div class="card-box">

                                    

                                    <input type="file" class="dropify" name="image" data-default-file="assets/images/gallery/1.jpg">
                                </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Link</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="link" type="text" class="required form-control" required="" value="{{$aboutus->link}}">
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Embade Vedio</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="vedio_embade" type="text" class="required form-control" value="{{$aboutus->vedio_embade}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label " for="surname1"> Status </label>
                                <div class="col-lg-10">
                                    <select name="status" id="" class="form-control">
                                        <?php if($aboutus->status==1){?>
                                            <option value="1">Active</option>
                                        <?php }else{ ?>
                                            <option value="0">Inactive</option>
                                        <?php } ?>
                                        <option value="1">Active</option>
                                         <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-outline-info">Update</button>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection