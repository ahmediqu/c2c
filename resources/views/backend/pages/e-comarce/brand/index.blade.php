@extends('backend.layouts.master')
@section('page-title','Brand List')
@section('page-content')

<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="responsive-table">
					<a href="{{route('brand.create')}}" class="btn btn-outline-success">Create A new Brand</a>
					<table class="table table-bordered table-hover">
						<thead>
							<th>Sl.</th>
							<th>Brand</th>
							<th>Brand Image</th>
							<th>Brand Description</th>
							<th>Status</th>
							<th>Created At</th>
							<th>Action</th>
						</thead>
						<tbody>
							<?php $i = 0;?>
							@foreach($brands as $data)
							<?php $i++;?>
							<tr>
								<td>{{$i}}</td>
								<td> {{$data->brand_name}}</td>
								<td>
									<?php echo "<img src='".asset($data->brand_logo)."' alt='' style='height:50px;width:50px;'>  "; ?>
								</td>
								<td>{{$data->brand_description}}</td>
								
								<td>{{$data->status}}</td>
								<td>{{$data->created_at}}</td>
								<td>action</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection