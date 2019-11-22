@extends('frontend.layouts.master')
@section('front-page-title','Sell Quicker | Login ')
@section('frontend-content')
<div class="container post-category container-side">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-8">
					<h2>Sell an item or service</h2>
					<hr>
					<div class="row">
						<div class="col-md-6">
							<h3 class="post-sub-tiitle">Select a category...</h3>
								<ul class="post-category-menu">
									<li class="post-category-mobile-item">
										<a class="nav-link active" href="{{url('sell-item')}}">Mobiles <span class="post-arrows"><i class="fas fa-angle-right"></i></span></a>
									</li>
									<li class="post-category-mobile-item">
									<a class="nav-link active" href="{{url('sell-item')}}">Electronics <span class="post-arrows"><i class="fas fa-angle-right"></i></span></a>
										</li>
									<li class="post-category-mobile-item">Vehicles<span class="post-arrows"><i class="fas fa-angle-right"></i></span></li>
									<li class="post-category-mobile-item">Property<span class="post-arrows"><i class="fas fa-angle-right"></i></span></li>
									<li class="post-category-mobile-item">Services<span class="post-arrows"><i class="fas fa-angle-right"></i></span></li>
									<li class="post-category-mobile-item">Home and Living<span class="post-arrows"><i class="fas fa-angle-right"></i></span></li>
								</ul>
								<div class="post-disable-link">
									<p>2.&nbsp;Location</p>
									<p>3.&nbsp;Details</p>
								</div>
						</div>
						<div class="col-md-6 post-category-subitem">
							<ul class="post-category-hiden-item post-category-mobile-hidden">
								<li class="nav-item"><a href="{{url('post-mobile-phone')}}">Mobile Phones <span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-mobile-phone-accessories')}}">Mobile Phone Accessories<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-sim-cards')}}">SIM Cards<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-mobile-phone-service')}}">Mobile Phone Services<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
							</ul>
							<ul class="post-category-hiden-item post-category-mobile-hidden">
								<li class="nav-item"><a href="{{url('post-laptop-computer')}}">Laptops & Computers <span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-laptop-computer-accessories')}}">Laptop & Computer Accessories<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-tablet-accessories')}}">Tablets & Accessories<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-tvs')}}">TVs<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-tvs-video-accessories')}}">TV & Video Accessories<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-cameras-amcorders-accessories')}}">Cameras, Camcorders & Accessories<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-audio-sound-system')}}">Audio & Sound Systems<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-video-game-consoles-accessories')}}">Video Game Consoles & Accessories<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-photocopiers')}}">Photocopiers<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-others-electronices')}}">Other Electronics<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>

								<li class="nav-item"><a href="{{url('post-cars')}}">Cars<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-motorsbike-scooters')}}">Motorbikes & Scooters<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-bicycle-threewheelers')}}">Bicycles & Three Wheelers<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-trucks-vans-buses')}}">Trucks, Vans & Buses<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-tractors-heavy-duty')}}">Tractors & Heavy-Duty<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-auto-parts-accessories')}}">Auto Parts & Accessories<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-water-transport')}}">Water Transport<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-car-rentals-auto-services')}}">Car Rentals & Auto Services<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>


								<li class="nav-item"><a href="{{url('post-apartments-flats')}}">Apartments & Flats<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-new-developments')}}">New Developments<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-houses')}}">Houses<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-plots-land')}}">Plots  & Land<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-garages')}}">Garages<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-commercial-property')}}">Commercial Property<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>


								<li class="nav-item"><a href="{{url('post-business-technical-services')}}">Business & Technical Services<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-travel-visa')}}">Travel & Visa<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-tickets')}}">Tickets<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-events-hospitality')}}">Events & Hospitality<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-domestic-personal')}}">Domestic & Personal<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-health-lifestyle')}}">Health & Lifestyle<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>


								<li class="nav-item"><a href="{{url('post-living-room-furniture')}}">Living Room Furniture<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-kitchen-dining-furniture')}}">Kitchen & Dining Furniture<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-bedroom-furniture')}}">Bedroom Furniture<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-office-shop-furniture')}}">Office & Shop Furniture<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-children-furniture')}}">Children's Furniture<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-acs-home-electronics')}}">ACs & Home Electronics<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-home-appliances')}}">Home Appliances<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-households-item')}}">Household Items<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-home-textiles-decoration')}}">Home Textiles & Decoration<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>


								<li class="nav-item"><a href="{{url('post-men-clothing-accessories')}}">Men's Clothing & Accessories<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-women-clothing-accessories')}}">Women's Clothing & Accessories<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-children-clothing-accessories')}}">Children's Clothing & Accessories<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-jewellery')}}">Jewellery<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-optical-item')}}">Optical Items<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-watche')}}">Watches<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-bag')}}">Bags<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-wholesale-bulk')}}">Wholesale - Bulk<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-health-beauty-product')}}">Health & Beauty Products<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-other-item')}}">Other Items<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>



								<li class="nav-item"><a href="{{url('post-musical-instrument')}}">Musical Instruments<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-sport')}}">Sports<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-fitness-gym')}}">Fitness & Gym<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-music-books-movie')}}">Music, Books & Movies<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-children-item')}}">Children's Items<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-other-hobby-sport-ids-item')}}">Other Hobby, Sport & Kids items<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>



								<li class="nav-item"><a href="{{url('post-office-supplies-stationary')}}">Office Supplies & Stationary<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-safety-security')}}">Safety & Security<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-industry-machinery-tool')}}">Industry Machinery & Tools<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-raw-materials-industrial-supplie')}}">Raw Materials & Industrial Supplies<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-licences-titles-tender')}}">Licences, Titles & Tenders<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-medicalequipment-supplie')}}">Medical Equipment & Supplies<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-other-business-industry-item')}}">Other Business & Industry Items<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>



								<li class="nav-item"><a href="{{url('post-textbooks')}}">Textbooks<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-tuition')}}">Tuition<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-courses')}}">Courses<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-study-abroad')}}">Study Abroad<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-other-education')}}">Other Education<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>


								<li class="nav-item"><a href="{{url('post-pets')}}">Pets<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-farm-animal')}}">Farm Animals<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-pet-animal-accessorie')}}">Pet & Animal Accessories<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-other-pets-animal')}}">Other Pets & Animals<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>


								<li class="nav-item"><a href="{{url('post-food')}}">Food<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-crops-seed-plant')}}">Crops, Seeds & Plants<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-farming-tools-machinery')}}">Farming Tools & Machinery<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
								<li class="nav-item"><a href="{{url('post-other-food-agriculture')}}">Other Food & Agriculture<span class="post-arrows"><i class="fas fa-angle-right"></i></span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection