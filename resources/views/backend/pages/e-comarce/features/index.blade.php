@extends('backend.layouts.master')
@section('page-title','Category List')
@section('page-content')

<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="responsive-table">
					<a href="{{route('features.create')}}" class="btn btn-outline-success">Create A new Product Features</a>
					<table class="table table-bordered table-hover">
						<thead>
							<th>Sl.</th>
							<th>Features</th>
							<th>Features Image</th>
							<th>Features Description</th>
							<th>Status</th>
							<th>Created At</th>
							<th>Action</th>
						</thead>
						<tbody>
							<?php $i = 0;?>
							@foreach($category as $data)
							<?php $i++;?>
							<tr>
								<td>{{$i}}</td>
								<td> <a href="{{url('admin',$data->slug)}}">{{$data->features_name}}</a></td>
								<td>
									<?php echo "<img src='".asset($data->features_image)."' alt='' style='height:50px;width:50px;'>  "; ?>
								</td>
								<td>{{$data->features_description}}</td>
								
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