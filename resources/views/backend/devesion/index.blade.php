@extends('backend.layouts.master')
@section('page-title','Devesion')
@section('page-content')

<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<h2>Devesion</h2>
				<div class="form">
					<form action="{{route('devesion.store')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="">Devesion</label>
							<input type="text" class="form-control" name="devesion">
						</div>
						<div class="form-group">
							<label for="">Status</label>
							<select name="status" id="" class="form-control">
								<option value="1">Publish</option>
								<option value="0">Unpublish</option>
							</select>
						</div>
						<br>
						<input type="submit" class="btn btn-success" value="Save">
					</form>
					<table class="table table-bordered">
						<thead>
							<th>Devesion</th>
							<th>Status</th>
							<th>Action</th>
						</thead>
						<tbody>
							@foreach($devesion as $data)
							<tr>
								<td>{{$data->devesion}}</td>
								<td>{{$data->status}}</td>
								<td>
									<a href="">Edit</a>
									<a href="">Delete</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>

			<div class="col-md-6">
				<h2>City</h2>
				<div class="form">
					<form action="{{route('city.store')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="">City</label>
							<input type="text" class="form-control" name="city">
						</div>
						<div class="form-group">
							<label for="">Devesion</label>
							<select name="devesion_id" id="" class="form-control">

								<option value="">Select Devesion</option>
								@foreach($devesion as $data)
								<option value="{{$data->id}}">{{$data->devesion}}</option>
								@endforeach

							</select>
						</div>
						<div class="form-group">
							<label for="">Status</label>
							<select name="status" id="" class="form-control">
								<option value="1">Publish</option>
								<option value="0">Unpublish</option>
							</select>
						</div>
						<br>
						<input type="submit" class="btn btn-success" value="Save">
					</form>
					<table class="table table-bordered">
						<thead>
							<th>City</th>
							<th>Devesion</th>
							<th>Status</th>
							<th>Action</th>
						</thead>
						<tbody>
							@foreach($city as $data)
							<tr>
								<td>{{$data->city}}</td>
								<td>{{$data->devesion_id}}</td>
								<td>{{$data->status}}</td>
								<td>
									<a href="">Edit</a>
									<a href="">Delete</a>
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
@endsection