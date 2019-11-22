@extends('frontend.layouts.master')
@section('front-page-title','Sell Quicker | Property For Rent ')
@section('frontend-content')
<style>
.invalid-feedback{
display: block;
}
</style>
<div class="container container-side post-section">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<h1 class="is-main">Property For Rent</h1>
					<br><br>
					<hr>
					
					<h2>Add photos (5 for free)</h2>
					<form  action="{{route('rent-store')}}" method="post" class="post-job-form" enctype="multipart/form-data">
						@csrf
						<input type="hidden" value="5" name="category_id">
						<div class="post-photo">
							<div class="form-group">
								<label for="">Select Category</label>
								<select name="sub_category_id" id="" class="form-control" required>
									<option value="">Select Category</option>
									@foreach($category as $cat)
									<option value="{{$cat->id}}">{{$cat->category_name}}</option>
									@endforeach
								</select>
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Devesion</label>
								<select name="devesion_id" id="" class="form-control" required>
									<option value="">Select Devesion</option>
									@foreach($devesions as $data)
									<option value="{{$data->id}}">{{$data->devesion}}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">City</label>
								<select name="city_id" id="" class="form-control" required>
									<option value="">Select Devesion</option>
									
								</select>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="post-photo-falt-icon">
										<i class="far fa-image"></i>
									</div>
								</div>
								<div class="col-md-8 post-photo-add">
									<input type="file" name="image[]" class="" multiple required>
								</div>
								@if ($errors->has('image'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('image') }}</strong>
								</span>
								@endif
							</div>
						</div>
						<h2 class="is-main">Fill in the details</h2>
						<div class="form-group">
							<label for="beds">Beds</label>
							<select name="beds" id="beds" class="form-control" required>
								<option value="">Select Beds</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10+">10+</option>
							</select>
							@if ($errors->has('beds'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('beds') }}</strong>
							</span>
							@endif
						</div>
						<div class="form-group">
							<label for="baths">Baths</label>
							<select name="baths" id="baths" class="form-control" required>
								<option value="">Select Baths</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10+">10+</option>
							</select>
							@if ($errors->has('baths'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('baths') }}</strong>
							</span>
							@endif
						</div>
						
						<div class="form-group">
							<label for="size">Size ( sqft ) </label>
							<input type="text" name="size" id="size" class="form-control" value="{{ old('size')}}">
							@if ($errors->has('size'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('size') }}</strong>
							</span>
							@endif
						</div>
						<div class="form-group">
							<label for="">Features (optional)</label>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="Full-Furnished" value="Full-Furnished" name="features[]">
								<label class="form-check-label" for="Full-Furnished">Full-Furnished</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="Semi-Furnished" value="Semi-Furnished" name="features[]">
								<label class="form-check-label" for="Semi-Furnished">Semi-Furnished</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="Not Furnished" value="Not Furnished" name="features[]">
								<label class="form-check-label" for="dual-lens-camera">Not Furnished</label>
							</div>
						</div>
						<div class="post-item-details">
							<div class="form-group ">
								<label for="">Title</label>
								<input type="text" name="title" placeholder="Title" class="form-control" value="{{ old('title') }}">
								@if ($errors->has('title'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('title') }}</strong>
								</span>
								@endif
							</div>
							<div class="form-group ">
								<label for="">Address</label>
								<input type="text" name="location" placeholder="Title" class="form-control" value="{{ old('location') }}">
								@if ($errors->has('location'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('location') }}</strong>
								</span>
								@endif
							</div>
							<div class="form-group ">
								<label for="">Rent (Tk) /month</label>
								<input type="text" name="price" placeholder="Title" class="form-control" value="{{ old('price') }}">
								<div class="form-group form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1" name="na">
									<label class="form-check-label" for="exampleCheck1">Negotiable</label>
								</div>
							</div>
							<div class="form-group form-part">
								<span class="textarea-label">0/5000</span>
								<textarea class="form-control" cols="4" rows="7" placeholder="Description" name="discription"> {{ old('discription') }}</textarea>
								@if ($errors->has('discription'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('discription') }}</strong>
								</span>
								@endif
							</div>
						</div>
						<div class="post-cont-details">
							<h2 class="is-main">Contact details</h2>
							<p class="post-con-nam">Name</p>
							<p class="post-con-nam-info">{{Auth::user()->name}}</p>
							<div class="row">
								<div class="col-md-6 post-contact-box">
									<p>Phone Number</p>
									<a href="#" class="btn btn-info btn-lg btn-con-det" data-toggle="modal" data-target="#phoneModal">Add Phone Number</a>
									<!-- Modal -->
									<div class="modal fade" id="phoneModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Add Phone Number</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<input type="number" name="phone" class="form-control">
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Save</button>
													
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="alert alert-warning" role="alert">
										This number is used for verification purposes only. It will not be displayed on your ad.
									</div>
								</div>
							</div>
							<div class="post-contact-boottom">
								<p>Email</p>
								<p class="post-contact-email">{{Auth::user()->email}}</p>
							</div>
						</div>
						<input type="submit" name="" value="Post ad" class="btn btn-info btn-md submit-btn">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@section('scripts')
 <script>
    $(document).ready(function() {
        $('select[name=category_id]').change(function() {

            var url = '{{ url('category') }}' + '/' + $(this).val() + '/sub_category/';

            $.get(url, function(data) {
                var select = $('form select[name= sub_category_id]');

                select.empty();

                $.each(data,function(key, value) {
                    select.append('<option value=' + value.id + '>' + value.category_name + '</option>');
                });
            });
        });
    });

     $(document).ready(function() {
        $('select[name=devesion_id]').change(function() {

            var url = '{{ url('devesion') }}' + '/' + $(this).val() + '/city/';

            $.get(url, function(data) {
                var select = $('form select[name= city_id]');

                select.empty();

                $.each(data,function(key, value) {
                    select.append('<option value=' + value.id + '>' + value.name + '</option>');
                });
            });
        });
    });

     $(document).ready(function(){
      $('#category').change(function(){
        var category = $(this).val();
        $.ajax({
            url:"{{ url('/getBrand/') }}"+ "/" + category,
            method:"get",
            data:{category:category},
             success:function(result)
            {
             $('#brand').html(result);
            }

        });
      })
     })

     $(document).ready(function(){
      $('#brand').change(function(){
        var brand = $(this).val();
        $.ajax({
            url:"{{ url('/getModel/') }}"+ "/" + brand,
            method:"get",
            data:{brand:brand},
             success:function(result)
            {
             $('#model').html(result);
            }

        });
      })
     })


     


</script>
@endsection
@endsection