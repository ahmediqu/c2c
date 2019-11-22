@extends('backend.layouts.master')
@section('page-title','Menus')
@section('page-content')
 <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="page-title-box">
                                    <h4 class="page-title float-left">Gallery List</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashoard</a></li>
                                        <li class="breadcrumb-item active">Gallery</li>
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
                                            	<a href="{{route('gallery.create')}}" class="btn btn-outline-info">Create Gallery</a><br><br>
                                                <thead class="thead-default">
                                                <tr>
                                                
                                                    <th data-priority="0">Sl.</th>
                                                    <th data-priority="1">Title</th>
                                                    <th data-priority="1">Category</th>
                                                    <th data-priority="1">Description</th>
                                                    <th data-priority="1">Position</th>
                                                    <th data-priority="1">Image</th>
                                                    <th data-priority="3">Status</th>
                                                    <th data-priority="1">Date</th>
                                                    <th data-priority="3">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                	<?php $i=0;?>
                                                	@foreach($gallery as $g)
                                                	<?php $i++; ?>
                                                <tr>
                                                    
                                                    <td>{{$i}}</td>
                                                    <td>{{$g->title}}</td>
                                                    <?php
                                                            $categorys = DB::table('gallery_categories')->where('id',$g->category_id)->first();
                                                            
                                                    ?>
                                                    <td>{{$categorys->category}}</td>
                                                    <td>{{$g->description}}</td>
                                                    <td>{{$g->position}}</td>
                                                    <td>
                                                        <?php echo "<img src='".asset($g->image)."' alt='' style='height: 80px;width: 80px;'>";?>
                                                    </td>
                                                    <td>
                                                    	<span class="label <?php if($g->status==1){?>label-success <?php } else {?> label-danger <?php } ?>"> <?php if($g->status==1){?>Active <?php }else {?>Inactive<?php } ?></span>
                                                    </td>
                                                    <td>{{$g->created_at}}</td>
                                                    <td> 
                                                    	<a href="{{route('gallery.edit',$g->id)}}" class="btn btn-outline-info"><i class="zmdi zmdi-edit"></i></a>

                                                    	<form action="{{route('gallery.destroy',$g->id)}}" method="POST" style="display: inline-block;">
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
