@extends('backend.layouts.master')
@section('page-title','Submenu')
@section('page-content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Course List</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="#">Dashoard</a></li>
                        <li class="breadcrumb-item active">Courses</li>
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
                                <a href="{{route('course.create')}}" class="btn btn-outline-info">Create Course</a><br><br>
                                <thead class="thead-default">
                                    <tr>
                                        
                                        <th data-priority="0">Sl.</th>
                                        <th data-priority="1">course title</th>
                                        <th data-priority="1">course fee</th>
                                        <th data-priority="1">course duration</th>
                                        <th data-priority="3">course start</th>
                                        <th data-priority="1">instractor</th>
                                        <th data-priority="1">image</th>
                                        <th data-priority="1">status</th>
                                        <th data-priority="1">View Position</th>
                                        <th data-priority="1">Created At</th>
                                        <th data-priority="3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0;?>
                                    @foreach($courses as $course)
                                    <?php $i++; ?>
                                    <tr>
                                        
                                        <td>{{$i}}</td>
                                        <td>{{$course->course_title}}</td>
                                        <td>{{$course->course_fee}}</td>
                                        <td>{{$course->course_duration}}</td>
                                        <td>{{$course->course_start}}</td>
                                        <?php
                                            $name_instractor = DB::table('instructors')->where('id',$course->instractor_id)->first();
                                        ?>
                                        <td><?php if(isset($name_instractor)){ echo $name_instractor->instructor_name; } ?></td>
                                       
                                        <td>
                                            <?php echo "<img src='".asset($course->image)."' alt='' style='height: 80px;width: 80px;'>";?>
                                        </td>
                                        <td>
                                            <span class="label <?php if($course->status==1){?>label-success <?php } else {?> label-danger <?php } ?>"> <?php if($course->status==1){?>Active <?php }else {?>Inactive<?php } ?></span>
                                        </td>
                                        <td>{{$course->view_position}}</td>
                                        <td>{{$course->created_at}}</td>
                                        <td>
                                            <a href="{{route('course.edit',$course->id)}}" class="btn btn-outline-info"><i class="zmdi zmdi-edit"></i></a>
                                            <form action="{{route('course.destroy',$course->id)}}" method="POST" style="display: inline-block;">
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