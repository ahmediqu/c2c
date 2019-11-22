@extends('frontend.layouts.master')
@section('front-page-title','Sell Quicker | Login ')
@section('frontend-content')
<div class="container container-side">
	<div class="row">
		<div class="col-md-12 post_offer_propery_rent">
			<div class="row">
				<div class="col-md-8">
					<h2>Offer a property for rent</h2>
					<hr>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<h3 class="post-sub-tiitle">Select a category...</h3>
					<nav class="post_property_offer-nav">
						<ul>
							<li><a href="{{url('property-for-sell')}}">Apartments & Flats<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
							<li><a href="">Houses<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
							<li><a href="">Plots & Land<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
							<li><a href="">Rooms<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
							<li><a href="">Garages<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
							<li><a href="">Commercial Property<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
						</ul>
					</nav>
					<div class="post-disable-link">
						<p>2.&nbsp;Location</p>
						<p>3.&nbsp;Details</p>
					</div>
				</div>
				<div class="col-md-5 offset-md-3">
					<div class="alert alert-warning" role="alert">
					  	Make sure you post in the correct category.
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection