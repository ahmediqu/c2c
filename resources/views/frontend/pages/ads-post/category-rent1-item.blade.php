@extends('frontend.layouts.master')
@section('front-page-title','Sell Quicker | Login ')
@section('frontend-content')
<div class="container container-side post-section">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-8">
					<h2 class="is-main">Sell an item or service</h2>
					
					<h2>Add photos (5 for free)</h2>
					<form  action="" method="" class="post-job-form" multple>
						<div class="post-photo">
							<div class="row">
								<div class="col-md-4">
									<div class="post-photo-falt-icon">
										<i class="far fa-image"></i>
									</div>
								</div>
								<div class="col-md-8 post-photo-add">
									<input type="file" name="" class="btn btn-file">
								</div>
							</div>
						</div>
						<h2 class="is-main">Fill in the details</h2>
						<div class="form-group">
							<label for="beds">Beds</label>
							<select name="beds" id="beds" class="form-control">
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
						</div>

						<div class="form-group">
							<label for="baths">Baths</label>
							<select name="beds" id="baths" class="form-control">
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
						</div>
						
						<div class="form-group">
							<label for="size">Size ( sqft ) </label>
							<input type="text" name="size" id="size" class="form-control">
						</div>

						<div class="post-item-details">
							<div class="form-group ">
								<label for="">Title</label>
								<input type="text" name="title" placeholder="Title" class="form-control">
							</div>
							<div class="form-group ">
								<label for="">Address</label>
								<input type="text" name="address" placeholder="Title" class="form-control">
							</div>
							<div class="form-group ">
								<label for="">Rent (Tk) /month</label>
								<input type="text" name="rent" placeholder="Title" class="form-control">

								  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Negotiable</label>
  </div>

							</div>
							<div class="form-group form-part">
								<span class="textarea-label">0/5000</span>
								<textarea class="form-control" cols="4" rows="7" placeholder="Description"></textarea>
							</div>
						</div>
						<div class="post-cont-details">
						<h2 class="is-main">Contact details</h2>
						<p class="post-con-nam">Name</p>
						<p class="post-con-nam-info">MD:Mahadi Hasan Shakil</p>
						<div class="row">
							<div class="col-md-6 post-contact-box">
								<p>Phone Number</p>
								<a href="#" class="btn btn-info btn-lg btn-con-det">Add Phone Number</a>
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
@endsection