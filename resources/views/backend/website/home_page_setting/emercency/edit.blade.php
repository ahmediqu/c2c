@extends('backend.layouts.master')
@section('page-title','Menus')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    @include('backend.partials._message')
                    <a href="{{url('admin/emercency')}}" class="btn btn-outline-info float-right">Back</a>
                    <h3>Emargency</h3>
                    <form action="{{route('emercency.update',$emargency->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <section>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1"> emargency Number *</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="phone" type="text" class="required form-control" required="" value="{{$emargency->phone}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1"> emargency Number for reason </label>
                                <div class="col-lg-10">
                                    <input id="name1" name="phone_for_resion" type="text" class="required form-control" value="{{$emargency->phone_for_resion}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1"> emargency Email</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="email" type="text" class="required form-control" value="{{$emargency->email}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1"> Positioning Order </label>
                                <div class="col-lg-10">
                                    <input id="name1" name="postion" type="text" class="required form-control" value="{{$emargency->postion}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label " for="surname1"> Status </label>
                                <div class="col-lg-10">
                                    <select name="status" id="" class="form-control">
                                        <?php if($emargency->status==1){?>
                                            <option value="1">Active</option>
                                        <?php }else{ ?>
                                            <option value="0">Inactive</option>
                                        <?php } ?>
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