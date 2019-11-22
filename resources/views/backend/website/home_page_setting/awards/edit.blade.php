@extends('backend.layouts.master')
@section('page-title','Awards')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    @include('backend.partials._message')
                    <a href="{{url('admin/awards')}}" class="btn btn-outline-info float-right">Back</a>
                    <h3>Quatation</h3>
                    <form action="{{route('awards.update',$awards->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <section>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1"> Award Name*</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="name" type="text" class="required form-control" required="" value="{{$awards->name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1"> Location*</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="location" type="text" class="required form-control" required="" value="{{$awards->location}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label " for="surname1"> Description </label>
                                <div class="col-lg-10">
                                    <textarea name="description" id="" cols="10" rows="5" class="form-control">{{$awards->description}}</textarea>
                                </div>
                            </div>
                           
                            
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Positioning Order</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="position" type="text" class="required form-control" value="{{$awards->position}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label " for="surname1"> Status </label>
                                <div class="col-lg-10">
                                    <select name="status" id="" class="form-control">
                                        <?php if($awards->status==1){?>
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