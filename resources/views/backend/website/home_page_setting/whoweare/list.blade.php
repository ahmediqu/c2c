@extends('backend.layouts.master')
@section('page-title','Who We Are')
@section('page-content')
<!-- Start content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Who We Are</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashoard</a></li>
                        <li class="breadcrumb-item active">Who We Are</li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <div class="table-rep-plugin">
                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table table-striped table-bordered">
                                <a href="{{route('whoweare.create')}}" class="btn btn-outline-info">Create Who We Are</a><br><br>
                                <thead class="thead-default">
                                    <tr>
                                        
                                        <th data-priority="0">Sl.</th>
                                        <th data-priority="1">Title</th>
                                        <th data-priority="1">Description</th>
                                        <th data-priority="1">Image</th>
                                        <th data-priority="3">Status</th>
                                        <th data-priority="1">Date</th>
                                        <th data-priority="3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0;?>
                                    @foreach($whoweare as $quotation)
                                    <?php $i++; ?>
                                    <tr>
                                        
                                        <td>{{$i}}</td>
                                        <td>{{$quotation->title}}</td>
                                        <td>{{$quotation->description}}</td>
                                        <td>
                                           <?php echo "<img src='".asset($quotation->image)."' alt='' style='height: 80px;width: 80px;'>";?>
                                        </td>
                                        <td>
                                            <span class="label <?php if($quotation->status==1){?>label-success <?php } else {?> label-danger <?php } ?>"> <?php if($quotation->status==1){?>Active <?php }else {?>Inactive<?php } ?></span>
                                        </td>
                                        
                                        
                                        
                                        <td>{{$quotation->created_at}}</td>
                                        
                                        <td>
                                            <a href="{{route('whoweare.edit',$quotation->id)}}" class="btn btn-outline-info"><i class="zmdi zmdi-edit"></i></a>
                                            <form action="{{route('whoweare.destroy',$quotation->id)}}" method="POST" style="display: inline-block;">
                                                @method('DELETE')
                                                {{csrf_field()}}
                                                
                                                
                                                <button type="" class="btn btn-outline-danger" onClick="return deleteconfirm();"><i class="zmdi zmdi-delete"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
        </div> <!-- container -->
        </div> <!-- content -->
        <script>
        function deleteconfirm()
        {
        deletedata = confirm("Are you sure to delete permanently?");
        if (deletedata != true)
        {
        return false;
        }
        }
        </script>
        @endsection