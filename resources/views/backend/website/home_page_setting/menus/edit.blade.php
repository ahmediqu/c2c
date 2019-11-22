@extends('backend.layouts.master')
@section('page-title','Menus')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    @include('backend.partials._message')
                    <a href="{{url('admin/menus')}}" class="btn btn-outline-info float-right">Back</a>
                    <h3>Menus</h3>
                    <form action="{{route('menus.update',$menu->id)}}" method="post" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                        <section>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1"> Menu Name *</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="menu" type="text" class="required form-control" required="" value="{{$menu->menu}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label " for="surname1"> Position </label>
                                <div class="col-lg-10">
                                    <select name="position" id="" class="form-control">
                                         <?php if($menu->position==0){?>
                                            <option value="0">Both</option>
                                        <?php }elseif($menu->position==1){?>
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
                                    <input id="name1" name="order" type="text" class="required form-control" value="{{$menu->order}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label " for="surname1"> Status </label>
                                <div class="col-lg-10">
                                    <select name="status" id="" class="form-control">
                                        <?php if($menu->status==1){?>
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
                                <label class="col-lg-12 control-label ">(*) Mandatory</label>
                                <p>Menu Name **</p>
                            </div>
                            <button type="submit" class="btn btn-outline-info">Save</button>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection