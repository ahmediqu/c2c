@extends('backend.layouts.master')
@section('page-title','Achivement Catgory Edit')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    @include('backend.partials._message')
                    <a href="{{url('admin/achivement_catgory')}}" class="btn btn-outline-info float-right">Back</a>
                    <h3>News Category</h3>
                    <form action="{{route('achivement_catgory.update',$achivementsCat->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <section>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1"> Category </label>
                                <div class="col-lg-10">
                                    <input id="name1" name="catgory_name" type="text" class="required form-control" required="" value="{{$achivementsCat->catgory_name}}">
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
                                    <input id="name1" name="position" type="text" class="required form-control" value="{{$achivementsCat->position}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label " for="surname1"> Status </label>
                                <div class="col-lg-10">
                                    <select name="status" id="" class="form-control">
                                         <?php if($achivementsCat->status==1){?>
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