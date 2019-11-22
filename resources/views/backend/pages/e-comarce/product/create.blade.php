@extends('backend.layouts.master')
@section('page-title','Products')
@section('page-content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card-box">
					@include('backend.partials._message')
					<a href="{{route('product.index')}}" class="btn btn-outline-info float-right">Back</a>
					<h4 class="header-title m-t-0 m-b-30">Create A new Product</h4>
					<br>
					<form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="form-group row">
							<label for="example-text-input" class="col-2 col-form-label">Product Name</label>
							<div class="col-10">
								<input class="form-control" type="text" name="product_name" value="{{old('product_name')}}" id="example-text-input" required="">
							</div>
						</div>
						<div class="form-group row">
							<label for="product_category" class="col-2 col-form-label">Product Category</label>
							<div class="col-10">
								<select name="product_category" id="product_category" class="form-control">
									<option value="">Select Product Category</option>
									@foreach($category as $cat)
									<option value="{{$cat->id}}">{{$cat->category_name}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="product_feature" class="col-2 col-form-label">Product Features</label>
							<div class="col-10">
								<select name="product_feature" id="product_feature" class="form-control">
									<option value="">Select Product Features</option>
									@foreach($features as $feature)
									<option value="{{$feature->id}}">{{$feature->features_name}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="tag_sale" class="col-2 col-form-label">Product Tag Sale</label>
							<div class="col-10">
								<select name="tag_sale" id="tag_sale" class="form-control">
									<option value="">Select Product Tag Sale</option>
									<option value="1">Sale</option>
									<option value="2">Hot</option>
									<option value="3">New</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="example-text-input" class="col-2 col-form-label">Product Description</label>
							<div class="col-10">
								
								<textarea name="description" class="form-control summernote" id="" cols="10" rows="5">
								{{old('description')}}
								</textarea>
							</div>
						</div>

						<div class="form-group row">
							<label for="price" class="col-2 col-form-label">Product Price</label>
							<div class="col-10">
								<input class="form-control" type="text" name="price" value="{{old('price')}}" id="price" required="">
							</div>
						</div>

						
						<div class="form-group row">
							<label for="sale_price" class="col-2 col-form-label">Product Sale  Price</label>
							<div class="col-10">
								<input class="form-control" type="text" name="sale_price" value="{{old('sale_price')}}" id="sale_price">
							</div>
						</div>
						
						<div class="form-group row">
							<label for="in_stock" class="col-2 col-form-label">Product In Stock</label>
							<div class="col-10">
								<select name="in_stock" id="in_stock" class="form-control">
									<option value="1">Yes</option>
									<option value="0">No</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="status" class="col-2 col-form-label">Product status</label>
							<div class="col-10">
								<select name="status" id="status" class="form-control">
									<option value="1">Yes</option>
									<option value="0">No</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="is_slide" class="col-2 col-form-label">Is Slide</label>
							<div class="col-10">
								<select name="is_slide" id="is_slide" class="form-control">
									<option value="1">Yes</option>
									<option value="0">No</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="status" class="col-2 col-form-label">Upload Image</label>
							<div class="col-10">
								<input type="file" name="image[]" class="form-control" multiple>
							</div>
						</div>
						
						<input type="submit" class="btn btn-outline-info">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection