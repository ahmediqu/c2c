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
						
						
								
								<?php
									$page_name = DB::table('banner_positions')->where('id',$banner->page_name)->first();
								?>
								<p>Page Name: <b>{{$page_name->page_name}}</b></p>
								<p>Banner : </p>
									<?php echo "<img src='".asset($banner->banner)."'/>";?>
								
								
									<?php
										$user = DB::table('users')->where('id',$banner->user_id)->first();
									?>
									<p>User Name : <b>{{$user->name}}</b></p>
									<p>User Email : <b>{{$user->email}}</b></p>
									
								
								
								
								
									<?php
										if($banner->status == 1){
											echo "<p class='text-success'>Acceppted</p>";
										}else{
											echo "<p class='text-danger'>Panding</p>";
										}
									?>
								
									<?php 
									$expiry_day = Carbon\Carbon::parse($banner->created_at)->addMonths(1);
									?>
									<p>Expired Data: {{$expiry_day}}</p>
									<?php
									
									//echo $expiry_day;

									//echo "<br>";

									$start_day = Carbon\Carbon::parse($banner->created_at); //get a carbon instance with created_at as date
									//echo $start_day;
									//$expiry_day = $start_day->addMonths($data->user_selected_months); //add X months to created_at date
									?>

								
									<form action="{{url('admin/banner/request/approve/slkfsl',$id)}}" method="post">
										@csrf
										<input type="hidden" name="status" value="1">
										<button class="btn btn-info" type="submit">Approve</button>
									</form>
								
						
							
				</div>
			</div>

			<div class="col-md-6">
				

		</div>
	</div>
</div>
@endsection