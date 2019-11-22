@extends('frontend.layouts.master')
@section('front-page-title','Sell Quicker | Post Ads ')
@section('frontend-content')
<div class="container post-ads">
	<div class="row">
		<div class="col-md-12">
			<h2 class="post-title text-center"><span style="color:#19AAF8;font-weight: 500; font-size: 26px;">Welcome {{Auth::user()->name}}!</span> Let's post an ad. Choose any option below:</h2>
			<div class="row justify-content-center">
				<div class="col-md-6 offset-md-0">
					<div class="box-area">
						<h3 class="text-center" style="font-size: 18px;font-weight: normal">Sell Your Item:</h3>
						<ul class="nav flex-column">
						  <li class="nav-item">
						    <a class="nav-link active" href="{{url('sell-item')}}">Sell an item or service <span class="post-arrows"><i class="fas fa-angle-right"></i></span></a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" href="{{url('/property-for-rent')}}">Offer a property for rent <span class="post-arrows"><i class="fas fa-angle-right"></i></span></a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" href="{{url('/post-ads/job')}}">Post a job vacancy<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a>
						  </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 offset-md-1 text-center">
			<hr class="is-i">
			<div class="post-info">
				<h3>Free Post On <span style="color:#19AAF8;font-weight: 500;">Sellquicker</span></h3>
				<p><a href="#">Learn about posting ads for free on Sellquicker</a></p>
			</div>
		</div>
	</div>
</div>

@endsection
