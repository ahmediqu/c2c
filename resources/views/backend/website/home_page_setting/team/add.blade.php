@extends('backend.layouts.master')
@section('page-title','Menus')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    @include('backend.partials._message')
                    <a href="{{url('admin/team')}}" class="btn btn-outline-info float-right">Back</a>
                    <h3>Teams</h3>
                    <form action="{{route('team.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <section>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1"> Name </label>
                                <div class="col-lg-10">
                                    <input id="name1" name="name" type="text" class="required form-control" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1"> Designation </label>
                                <div class="col-lg-10">
                                    <input id="name1" name="designation" type="text" class="required form-control" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label " for="surname1"> Message </label>
                                <div class="col-lg-10">
                                    <textarea name="message" id="" cols="10" rows="5" class="form-control summernote"></textarea>
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
                                <label class="col-lg-2 control-label" for="name1"> Birth Day</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="dob" type="date" class="required form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1"> Positioning Order </label>
                                <div class="col-lg-10">
                                    <input id="name1" name="position" type="text" class="required form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1"> Facebook Link </label>
                                <div class="col-lg-10">
                                    <input id="name1" name="facebook" type="text" class="required form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1"> Twetter Link </label>
                                <div class="col-lg-10">
                                    <input id="name1" name="twetter" type="text" class="required form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1"> Google Plus Link </label>
                                <div class="col-lg-10">
                                    <input id="name1" name="google_plus" type="text" class="required form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1"> Linkedin-in Link </label>
                                <div class="col-lg-10">
                                    <input id="name1" name="linkedin" type="text" class="required form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1"> Instragram Link </label>
                                <div class="col-lg-10">
                                    <input id="name1" name="ins" type="text" class="required form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1"> Skype Link </label>
                                <div class="col-lg-10">
                                    <input id="name1" name="skype" type="text" class="required form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1"> Youtube Link </label>
                                <div class="col-lg-10">
                                    <input id="name1" name="youtube" type="text" class="required form-control">
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