@extends('backend.layouts.master')
@section('page-title','Menus')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    @include('backend.partials._message')
                    <a href="{{url('admin/submenu')}}" class="btn btn-outline-info float-right">Back</a>
                    <h3>Submenu</h3>
                    <form action="{{route('submenu.update',$menu->id)}}" method="post" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                        

                        <section>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Submenu Name *</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="submenu" type="text" class="required form-control" value="{{$menu->submenu}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="">Select Main menu</label>
                                 <div class="col-lg-10">
                                    <select name="menu_id" class="form-control" id="">

                                        @php
                                            $editmenu = DB::table('menuses')->where('id',$menu->menu_id)->first();
                                        @endphp

                                        <option value="{{$editmenu->id}}">{{$editmenu->menu}}</option>
                                        <option value="">Select Main Menu</option>
                                        @foreach($menus as $menu)
                                        <option value="{{$menu->id}}">{{$menu->menu}}</option>
                                        @endforeach
                                    </select>
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
                                <p>Menu Name ** <br> Submenu Name **</p>
                            </div>
                            <button type="submit" class="btn btn-outline-info">Update</button>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection