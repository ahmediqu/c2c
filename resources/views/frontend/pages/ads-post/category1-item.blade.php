@extends('frontend.layouts.master')
@section('front-page-title','Sell Quicker | Login ')
@section('frontend-content')
<div class="container container-side post-section">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-8">
					<h2 class="is-main">Sell an item or service</h2>
					<div class="post-item-lo-cat post-loc-cat">
						<p><span class="post-job-icon"><i class="far fa-check-circle"></i></span><span class="post-job-selected-text">Category:&nbsp;Mobiles&nbsp;&nbsp;<span><i class="fas fa-arrow-right"></i></span>&nbsp;&nbsp;Mobile & Phones</span><span ><a href="#" class="post-job-location">Change</a></span></p>
						<p><span class="post-job-icon"><i class="far fa-check-circle"></i></span><span class="post-job-selected-text">Location:&nbsp;Dhaka&nbsp;&nbsp;<span><i class="fas fa-arrow-right"></i></span>&nbsp;&nbsp;Mohammadpur</span><span ><a href="#" class="post-job-location">Change</a></span></p>
					</div>
					
					<form  action="" method="" class="post-job-form">
						<h2 class="is-main">Fill in the details</h2>
						<div class="post-item-details">
							<div class="form-group form-part">
								<input type="text" name="" placeholder="Title" class="form-control">
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
							<p class="post-contact-email">shakil3334426@gmail.com</p>
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