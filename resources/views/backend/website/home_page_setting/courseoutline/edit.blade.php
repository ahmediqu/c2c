@extends('backend.layouts.master')
@section('page-title','Course Outline')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    @include('backend.partials._message')
                    <a href="{{url('admin/courseoutline')}}" class="btn btn-outline-info float-right">Back</a>
                    <h3>Course Outline</h3>
                    <form action="{{route('courseoutline.update',$courseoutlines->id)}}" method="post" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                        <section>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1"> Category </label>
                                <div class="col-lg-10">
                                    <select name="course" id="" class="form-control">
                                        @php
                                        $course = DB::table('courses')->where('id',$courseoutlines->course)->first();
                                        $all_course = DB::table('courses')->get();
                                        @endphp
                                        <option value="<?php if(isset($course)){echo $course->id;}?>"><?php if(isset($course)){$course->course_title;}?>{{$course->course_title}}</option>
                                        <option>Select Category</option>
                                        @foreach($all_course as $data)
                                            <option value="{{$data->id}}">{{$data->course_title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1"> Topic Title *</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="topic_title" type="text" class="required form-control" required="" value="{{$courseoutlines->topic_title}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label " for="surname1"> Topic Details *</label>
                                <div class="col-lg-10">
                                    <textarea name="topic_details" id="" cols="10" rows="5" class="form-control summernote">{!! $courseoutlines->topic_details !!}</textarea>
                                </div>
                            </div>
                            
                            
                           
                            
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Positioning Order</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="position" type="text" class="required form-control" value="{{$courseoutlines->position}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label " for="surname1"> Status </label>
                                <div class="col-lg-10">
                                    <select name="status" id="" class="form-control">
                                        <?php if($courseoutlines->status==1){?>
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