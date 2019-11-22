@extends('backend.layouts.master')
@section('page-title','Achivements Add')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    @include('backend.partials._message')
                    <a href="{{url('admin/achivements')}}" class="btn btn-outline-info float-right">Back</a>
                    <h3>Achivements Posts</h3>
                    <form action="{{route('achivements.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <section>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1"> Achivement Category </label>
                                <div class="col-lg-10">
                                    <select name="category_id" id="" class="form-control">
                                        <option>Select Category</option>
                                        @foreach($achivements_catgory as $data)
                                        <option value="{{$data->id}}">{{$data->catgory_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Achivement Title</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="title" type="text" class="required form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Achivement Sub Title</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="sub_title" type="text" class="required form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label " for="surname1"> Description </label>
                                <div class="col-lg-10">
                                    <textarea name="description" id="" cols="10" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label " for="surname1"> Date </label>
                                <div class="col-lg-10">
                                    <select name="select" class="form-control" id="dropdownYear" onchange="getProjectReportFunc()" name="year">
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label " for="surname1"> Upload Catgory Imasge </label>
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
                                <label class="col-lg-2 control-label" for="name1">Highlight achivement</label>
                                <div class="col-lg-10">
                                    <select name="highlightachivement" id="" class="form-control">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
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
    <script src="{{url('backend/js/jquery.min.js')}}"></script>
        <script>
        $('#dropdownYear').each(function() {

  var year = (new Date()).getFullYear();
  var current = year;
  year -= 11;
  for (var i = 0; i < 12; i++) {
    if ((year+i) == current)
      $(this).append('<option selected value="' + (year + i) + '">' + (year + i) + '</option>');
    else
      $(this).append('<option value="' + (year + i) + '">' + (year + i) + '</option>');
  }

})
    </script>
    @endsection
