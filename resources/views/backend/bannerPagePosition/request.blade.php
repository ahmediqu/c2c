@extends('backend.layouts.master')
@section('page-title','Banner Page')
@section('page-content')

<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h2>Request User Approve Banner</h2>
				<div class="form">
					@include('backend.partials._message')
					<table class="table table-bordered">
						<thead>
							<th>Sl</th>
							<th>Page Name</th>
							<th>Banner</th>
							<th>User Name</th>
							<th>User Phone Number</th>
							<th>Status</th>
							<th>Expired Date</th>
							<th>Action</th>
							<th>Remove</th>
						</thead>
						<tbody>
							<?php $i=0;?>
							@foreach($banner as $data)
							<?php $i++;?>
							<tr>
								<td>{{$i}}</td>
								<?php
									$page_name = DB::table('banner_positions')->where('id',$data->page_name)->first();
								?>
								<td>{{$page_name->page_name}}</td>
								<td>
									<?php echo "<img src='".asset($data->banner)."' style='height:100px;width:100px;'/>";?>
								</td>
								<td>
									<?php
										$user = DB::table('users')->where('id',$data->user_id)->first();
									?>
									{{$user->name}},
									{{$user->email}}
								</td>
								<td>
									{{$data->number}}
								</td>
								
								<td>
									<?php
										if($data->status == 1){
											echo "<p class='text-success'>Acceppted</p>";
										}else{
											echo "<p class='text-danger'>Panding</p>";
										}
									?>
								</td>
								<td>
									<?php 
									$expiry_day = Carbon\Carbon::parse($data->created_at)->addMonths(1);
									echo $expiry_day;

									echo "<br>";

									$start_day = Carbon\Carbon::parse($data->created_at); //get a carbon instance with created_at as date
									//echo $start_day;
									//$expiry_day = $start_day->addMonths($data->user_selected_months); //add X months to created_at date
									?>

								</td>
								
								<td>
									
										
										<a href="{{url('admin/banner/request/approve',$data->id)}}" class="btn btn-info" >Approve</a>
								
								</td>
								<td>
									<a href="" class="btn btn-danger">Remove</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>

			<div class="col-md-6">
				

		</div>
	</div>
</div>
@endsection