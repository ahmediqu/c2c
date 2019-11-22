@extends('backend.layouts.master')
@section('page-title','Specialities List')
@section('page-content')

<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="responsive-table">
					<a href="{{route('specialities.create')}}" class="btn btn-outline-success">Create A new Specialities</a>
					<table class="table table-bordered table-hover">
						<thead>
							<th>Sl.</th>
							<th>Specialities</th>
							<th>Specialities Image</th>
							<th>Specialities Description</th>
							<th>Specialities Status</th>
							
							<th>Created At</th>
							<th>Action</th>
						</thead>
						<tbody>
							<?php $i = 0;?>
							@foreach($specialities as $data)
							<?php $i++;?>
							<tr>
								<td>{{$i}}</td>
								<td> <a href="{{url('admin',$data->slug)}}">{{$data->name}}</a></td>
								<td>
									<?php echo "<img src='".asset($data->image)."' style='height:50px;'>";?>
								</td>
								<td>{{$data->description}}</td>
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