@extends('backend.layouts.master')
@section('page-title','Services Update')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    @include('backend.partials._message')
                    <a href="{{url('admin/instructor')}}" class="btn btn-outline-info float-right">Back</a>
                    <h3>Create Instructor</h3>
                    <form action="{{route('instructor.update',$instructor->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                         @method('PUT')
                        <section>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1"> Instructor name*</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="instructor_name" type="text" class="required form-control" required="" value="{{$instructor->instructor_name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1"> service title*</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="instructor_title" type="text" class="required form-control" value="{{$instructor->instructor_title}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label " for="surname1"> Description </label>
                                <div class="col-lg-10">
                                    <textarea name="instructor_description" id="" cols="10" rows="5" class="form-control summernote">
                                        {!! $instructor->instructor_description !!}
                                    </textarea>
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
                                <label class="col-lg-2 control-label" for="name1">Button name</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="btn_name" type="text" class="required form-control" required="" value="{{$instructor->btn_name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Position</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="position" type="text" class="required form-control" required="" value="{{$instructor->position}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label " for="surname1"> Status </label>
                                <div class="col-lg-10">
                                    <select name="status" id="" class="form-control">
                                       <?php if($instructor->status==1){?>
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