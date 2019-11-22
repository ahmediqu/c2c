@extends('backend.layouts.master')
@section('page-title','Menus')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    @include('backend.partials._message')
                    <a href="{{url('admin/event')}}" class="btn btn-outline-info float-right">Back</a>
                    <h3>Event</h3>
                    <form action="{{route('event.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <section>
                            
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1"> Title </label>
                                <div class="col-lg-10">
                                    <input id="name1" name="event_title" type="text" class="required form-control" required="">
                                </div>
                            </div>
                           
                            <div class="form-group row">
                                <label class="col-lg-2 control-label " for="surname1"> Description </label>
                                <div class="col-lg-10">
                                    <textarea name="event_description" id="summernote" cols="10" rows="5" class="form-control summernote"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1"> Event Date </label>
                                <div class="col-lg-10">
                                    <input id="name1" name="event_date" type="date" class="required form-control" required="">
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
                                    <input id="name1" name="position" type="text" class="required form-control">
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
    @section('backend-scripts')
    
    @endsection
    @endsection