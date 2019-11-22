@extends('backend.layouts.master')
@section('page-title','Services')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    @include('backend.partials._message')
                    <a href="{{url('admin/website_setting')}}" class="btn btn-outline-info float-right">Back</a>
                    <h3>General Setting</h3>
                    <form action="{{route('website_setting.update',$setting->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <section>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1"> Company Name </label>
                                <div class="col-lg-10">
                                    <input id="name1" name="company_name" type="text" class="required form-control" required="" value="{{$setting->company_name}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 control-label " for="surname1"> Logo Upload </label>
                                <div class="col-lg-10">
                                    <div class="card-box">

                                    

                                    <input type="file" class="dropify" name="image" data-default-file="assets/images/gallery/1.jpg">
                                </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 control-label " for="surname1"> company_slogan </label>
                                <div class="col-lg-10">
                                    <textarea name="company_slogan" id="" cols="10" rows="5" class="form-control">
                                        {{$setting->company_slogan}}
                                    </textarea>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Company Address 1</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="company_address1" type="text" class="required form-control"  value="{{$setting->company_address1}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Company Address 2</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="company_address2" type="text" class="required form-control"  value="{{$setting->company_address2}}">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Company Email 1</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="company_email1" type="text" class="required form-control" value="{{$setting->company_email1}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Company Email 2</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="company_email2" type="text" class="required form-control" value="{{$setting->company_email2}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Company Phone 1</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="company_phone1" type="text" class="required form-control" value="{{$setting->company_phone1}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Company Phone 2</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="company_phone2" type="text" class="required form-control" value="{{$setting->company_phone2}}">
                                </div>
                            </div>

                            <p>Social Media Setting</p>
                             <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Facebook Link</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="company_fb" type="text" class="required form-control" value="{{$setting->company_fb}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Twetter Link</label>      
                                <div class="col-lg-10">
                                    <input id="name1" name="company_twitter" type="text" class="required form-control"  value="{{$setting->company_twitter}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">LinkedIn Link</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="company_linkendin" type="text" class="required form-control" value="{{$setting->company_linkendin}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Skype Link</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="company_skype" type="text" class="required form-control" value="{{$setting->company_skype}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Youtube Link</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="company_youtube" type="text" class="required form-control" value="{{$setting->company_youtube}}">
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