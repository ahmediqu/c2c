@extends('backend.layouts.master')
@section('page-title','Course')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    @include('backend.partials._message')
                    <a href="{{url('admin/course')}}" class="btn btn-outline-info float-right">Back</a>
                    <h3>Courses</h3>
                    <form action="{{route('course.update',$course->id)}}" method="post" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                        

                        <section>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Course Name *</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="course_title" type="text" class="required form-control" value="{{$course->course_title}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Course Description *</label>
                                <div class="col-lg-10">
                                     <textarea name="course_description" id="" cols="30" rows="10" class="form-control summernote">{!! $course->course_description !!}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Course Fee*</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="course_fee" type="text" class="required form-control" value="{{$course->course_fee}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Course Duration*</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="course_duration" type="text" class="required form-control" value="{{$course->course_duration}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Weekly Class Duration *</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="class_weekly_duration" type="text" class="required form-control" value="{{$course->class_weekly_duration}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Hourly Class Duration *</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="class_hourly_duration" type="text" class="required form-control" value="{{$course->class_hourly_duration}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Location *</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="location" type="text" class="required form-control" value="{{$course->location}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Course Start *</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="course_start" type="text" class="required form-control" value="{{$course->course_start}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Contact Number 1 *</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="contact_number_1" type="text" class="required form-control" value="{{$course->contact_number_1}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Contact Number 2</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="contact_number_2" type="text" class="form-control" value="{{$course->contact_number_2}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="">Select Instructor</label>
                                 <div class="col-lg-10">
                                    <select name="instractor_id" class="form-control" id="">

                                        @php
                                            $s = DB::table('instructors')->where('id',$course->instractor_id)->first();

                                        @endphp
                                        <option value="<?php if(isset($s)){echo $s->id; }?>"><?php if(isset($s)){echo $s->instructor_name; }?></option>
                                    
                                        <option value="">Select Instructor</option>
                                        @foreach($instructors as $instructor)
                                        <option value="{{$instructor->id}}">{{$instructor->instructor_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-lg-2 control-label " for="surname1"> Upload Photo </label>
                                <div class="col-lg-10">
                                    <div class="card-box">

                                    

                                    <input type="file" class="dropify" name="image">
                                </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label " for="surname1"> Position </label>
                                <div class="col-lg-10">
                                    <select name="position" id="" class="form-control">
                                        
                                         <?php if($course->position==0){?>
                                            <option value="0">Both</option>
                                        <?php }elseif($course->position==1){?>
                                        <option value="1">Header</option>
                                        <?php }else{ ?>
                                            <option value="0">Inactive</option>
                                        <?php } ?>
                                        <option value="0">Both</option>
                                        <option value="1">Header</option>
                                        <option value="2">Footer</option>

                                  
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1"> Positioning Order </label>
                                <div class="col-lg-10">
                                    <input id="name1" name="order" type="text" class="required form-control" value="{{$course->order}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label " for="surname1"> Status </label>
                                <div class="col-lg-10">
                                    <select name="status" id="" class="form-control">
                                        <?php if($course->status==1){?>
                                            <option value="1">Active</option>
                                        <?php }else{ ?>
                                            <option value="0">Inactive</option>
                                        <?php } ?>
                                        <option value="1">Active</option>
                                         <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label " for="view_position"> View Position </label>
                                <div class="col-lg-10">
                                    <select name="view_position" id="view_position" class="form-control">
                                        <?php if($course->view_position==1){?>
                                            <option value="1">Vertical</option>
                                        <?php }else{ ?>
                                            <option value="0">Horizontal</option>
                                        <?php } ?>
                                        <option value="">Select View Postion</option>
                                        <option value="1">Vertical</option>
                                        <option value="0">Horizontal</option>
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