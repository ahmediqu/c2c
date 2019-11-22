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
                    <form action="{{route('courseoutline.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <section>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1"> Course </label>
                                <div class="col-lg-10">
                                    <select name="course" id="" class="form-control">
                                        <option>Select Course</option>
                                        @foreach($course as $data)
                                            <option value="{{$data->id}}">{{$data->course_title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1"> Topic Title *</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="topic_title" type="text" class="required form-control" required="" value="{{old('topic_title')}}">
                                </div>
                            </div>
                             
                            <div class="form-group row">
                                <div id="editor" contenteditable></div>
                                <label class="col-lg-2 control-label " for="surname1"> Topic Details *</label>
                                <div class="col-lg-10">
                                    <textarea name="topic_details" id="editorCopy" cols="10" rows="5" class="form-control summernote">{{old('topic_details')}}</textarea>
                                </div>
                                
                            </div>
                            
                            
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Positioning Order</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="position" type="text" class="required form-control" value="{{old('position')}}">
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
                            
                            <button type="submit" class="btn btn-outline-info">Save</button>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection