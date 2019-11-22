@extends('frontend.layouts.master')
@section('front-page-title','Sell Quicker | Category ')
@section('frontend-content')
<!-- Ads -->
<section class="ads text-center my-3">
	<div class="container px-8">
		<img src="{{url('frontend/asset/image/1.gif')}}" alt="" class="img-fluid">
	</div>
</section>
<!-- Category Section Start -->
<section class="category mt-5 mb-5">
	<div class="container px-8">
		<div class="row">
			<div class="col-md-12">
				
				
				<div class="job-category bg-white p-5">
					<h3 class="text-center">  BROWSE CATEGORY </h3>
					
					<br>
					<div class="row">
						@foreach($job_cat as $data)
						<div class="col-md-4">
							<a href="{{url('jobs/category',$data->id)}}">
								<div class="job-category">
									<i class="fas fa-briefcase"></i> {{$data->category_name}}
								</div>
							</a>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Ads -->
<!-- Devesion And City  -->
@endsection