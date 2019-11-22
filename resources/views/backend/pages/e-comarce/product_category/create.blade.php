@extends('backend.layouts.master')
@section('page-title','Category List')
@section('page-content')

<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card-box">
                    @include('backend.partials._message')
                    <a href="{{route('category.index')}}" class="btn btn-outline-success float-right">Back</a>
                    <h3>Product Category</h3>
                    <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{auth::guard('admin')->user()->id}}" name="user_id">
                        <section>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="category_name"> Category Name</label>
                                <div class="col-lg-10">
                                    <input id="category_name" name="category_name" type="text" class="required form-control {{ $errors->has('category_name') ? ' is-invalid' : '' }}" required="" value="{{old('category_name')}}">
                                </div>
                                @if ($errors->has('category_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('category_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="parent_id"> Main Menu</label>
                                <div class="col-lg-10">
                                    <select name="parent_id" id="" class="form-control">
                                        <option value="">Select Main Category</option>
                                        @foreach($category as $data)
                                        <option value="{{$data->id}}">{{$data->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label " for="category_description"> Category Description </label>
                                <div class="col-lg-10">
                                    <textarea name="category_description" id="summernote" cols="10" rows="5" class="form-control summernote">{{old('category_description')}}</textarea>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label " for="surname1"> Category Image </label>
                                <div class="col-lg-10">
                                    <div class="card-box">

                                    

                                    <input type="file" class="dropify" name="category_image" data-default-file="assets/images/gallery/1.jpg">
                                </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Category Position</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="position" type="text" class="required form-control" value="{{old('position')}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label " for="surname1"> Status </label>
                                <div class="col-lg-10">
                                    <select name="status" id="" class="form-control">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-outline-info">Save</button>
                        </section>
                    </form>
                </div>
            </div>
			</div>
		</div>
	</div>
</div>

@endsection