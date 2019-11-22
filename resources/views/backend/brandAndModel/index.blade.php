@extends('backend.layouts.master')
@section('page-title','Brand & Model')
@section('page-content')

<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<h2>Brand</h2>
				<div class="form">
					<form action="{{route('brand.store')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="">Category</label>
							<select name="category_id" id="" class="form-control">
								<option value="">Select Category</option>

								@foreach($category as $cat)
								<option value="{{$cat->id}}">{{$cat->category_name}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label for="">Brand</label>
							<input type="text" class="form-control" name="brand">
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
							<th>Category</th>
							<th>Brand</th>
							<th>Status</th>
							<th>Action</th>
						</thead>
						<tbody>
							@foreach($brand as $data)
							<tr>
								<td>{{$data->category_id}}</td>
								<td>{{$data->brand}}</td>
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
					<form action="{{route('model.store')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="">Model</label>
							<input type="text" class="form-control" name="model">
						</div>
						<div class="form-group">
							<label for="">Brand</label>
							<select name="brand_id" id="" class="form-control">

								<option value="">Select Devesion</option>
								@foreach($brand as $data)
								<option value="{{$data->id}}">{{$data->brand}}</option>
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
							<th>Model</th>
							<th>Brand</th>
							<th>Status</th>
							<th>Action</th>
						</thead>
						<tbody>
							@foreach($model as $data)
							<tr>
								<td>{{$data->model}}</td>
								<td>{{$data->brand_id}}</td>
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