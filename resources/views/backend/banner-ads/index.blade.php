@extends('backend.layouts.master')
@section('page-title','Banner Ads')
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
							
							
						</tbody>
					</table>
				</div>
			</div>

			
		</div>
	</div>
</div>
@endsection