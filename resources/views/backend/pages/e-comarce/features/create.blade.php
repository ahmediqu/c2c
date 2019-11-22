@extends('backend.layouts.master')
@section('page-title','Features')
@section('page-content')

<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card-box">
                    @include('backend.partials._message')
                    <a href="{{route('features.index')}}" class="btn btn-outline-success float-right">Back</a>
                    <h3>Product Features</h3>
                    <form action="{{route('features.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{auth::guard('admin')->user()->id}}" name="user_id">
                        <section>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="features_name"> Features Name</label>
                                <div class="col-lg-10">
                                    <input id="features_name" name="features_name" type="text" class="required form-control {{ $errors->has('features_name') ? ' is-invalid' : '' }}" required="" value="{{old('features_name')}}">
                                </div>
                                @if ($errors->has('features_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('features_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label " for="features_description"> Features Description </label>
                                <div class="col-lg-10">
                                    <textarea name="features_description" id="features_description" cols="10" rows="5" class="form-control summernote">{{old('features_description')}}</textarea>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label " for="surname1"> Features Image </label>
                                <div class="col-lg-10">
                                    <div class="card-box">

                                    

                                    <input type="file" class="dropify" name="features_image" data-default-file="assets/images/gallery/1.jpg">
                                </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="name1">Features Position</label>
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