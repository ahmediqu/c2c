@extends('backend.layouts.master')
@section('page-title','Apply Course List')
@section('page-content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<table class="table table-bordered">
					<thead>
						<th>Sl.</th>
						<th>Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Course Name</th>
						<th>Address</th>
					</thead>
					<tbody>
						<?php
							$i=0;
						?>
						@foreach($applied as $apply)
						<?php
							$users = DB::table('users')->where('id',$apply->user_id)->first();

							$course = DB::table('courses')->where('id',$apply->user_id)->first();
						?>
						<?php $i++; ?>
						<tr>
							<td>{{$i}}</td>
							<td>{{$users->firstname}}</td>
							<td>{{$users->email}}</td>
							<td>{{$apply->phone}}</td>
							<td>{{$course->course_title}}</td>
							<td>{{$apply->present_address}}</td>
							<!-- <td>
                                <a href="#" class="btn btn-outline-info"><i class="zmdi zmdi-edit"></i></a>
                                <a href="#" class="btn btn-outline-danger"><i class="zmdi zmdi-delete"></i></a>
                                   
                            </td> -->
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection