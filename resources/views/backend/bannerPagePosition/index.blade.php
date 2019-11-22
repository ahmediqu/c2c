@extends('backend.layouts.master')
@section('page-title','Banner Page')
@section('page-content')

<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<h2>Banner Page Position</h2>
				<div class="form">
					<form action="{{route('banner_page_position.store')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="">Page Name</label>
							<input type="text" class="form-control" name="page_name">
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
							<th>Page Name</th>
							<th>Status</th>
							<th>Action</th>
						</thead>
						<tbody>
							@foreach($banner as $data)
							<tr>
								<td>{{$data->page_name}}</td>
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
				

		</div>
	</div>
</div>
@endsection