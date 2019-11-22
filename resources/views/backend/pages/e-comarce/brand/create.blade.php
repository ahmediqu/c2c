@extends('backend.layouts.master')
@section('page-title','Brand')
@section('page-content')

<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card-box">
                    @include('backend.partials._message')
                    <a href="{{route('brand.index')}}" class="btn btn-outline-success float-right">Back</a>
                    <h3>Create A New Brand</h3>
                    <form action="{{route('brand.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{auth::guard('admin')->user()->id}}" name="user_id">
                        <section>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="brand_name"> Brand Name</label>
                                <div class="col-lg-10">
                                    <input id="brand_name" name="brand_name" type="text" class="required form-control {{ $errors->has('brand_name') ? ' is-invalid' : '' }}" required="" value="{{old('brand_name')}}">
                                </div>
                                @if ($errors->has('brand_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('brand_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label " for="brand_description"> Category Description </label>
                                <div class="col-lg-10">
                                    <textarea name="brand_description" id="summernote" cols="10" rows="5" class="form-control summernote">{{old('brand_description')}}</textarea>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label " for="surname1"> Category Image </label>
                                <div class="col-lg-10">
                                    <div class="card-box">

                                    

                                    <input type="file" class="dropify" name="brand_logo" data-default-file="assets/images/gallery/1.jpg">
                                </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Brand Position</label>
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