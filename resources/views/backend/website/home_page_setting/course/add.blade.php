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
                    <h3>Course</h3>
                    <form action="{{route('course.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <section>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Course Name *</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="course_title" type="text" class="required form-control" required="">
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Course Description *</label>
                                <div class="col-lg-10">
                                    <textarea name="course_description" id="" cols="30" rows="10" class="form-control summernote"></textarea>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Courses Fee *</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="course_fee" type="text" class="required form-control" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Courses Duration *</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="course_duration" type="text" class="required form-control" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Weekly Class Duration *</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="class_weekly_duration" type="text" class="required form-control" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Hourly Class Duration  *</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="class_hourly_duration" type="text" class="required form-control" required="">
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Location *</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="location" type="text" class="required form-control" required="">
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Class Starts at *</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="course_start" type="text" class="required form-control" required="">
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Contact Number 1 *</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="contact_number_1" type="text" class="required form-control" required="">
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Contact Number 2</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="contact_number_2" type="text" class="required form-control" >
                                </div>
                            </div>
                              <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Instructor</label>
                                <div class="col-lg-10">
                                  <select name="instractor_id" class="form-control" id="">
                                        <option value="">Select Instructor</option>
                                        @foreach($instructor as $instructors)
                                        <option value="{{$instructors->id}}">{{$instructors->instructor_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                           
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1"> Positioning Order </label>
                                <div class="col-lg-10">
                                    <input id="name1" name="order" type="text" class="required form-control">
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
                                <label class="col-lg-2 control-label " for="surname1"> Status </label>
                                <div class="col-lg-10">
                                    <select name="status" id="" class="form-control">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label " for="view_position"> View Position </label>
                                <div class="col-lg-10">
                                    <select name="view_position" id="view_position" class="form-control">
                                        <option value="">Select View Postion</option>
                                        <option value="1">Vertical</option>
                                        <option value="0">Horizontal</option>
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