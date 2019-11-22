@extends('frontend.layouts.master')
@section('front-page-title','Sell Quicker | Home ')
@section('frontend-content')
<!-- Slider Section -->
    <section class="section-slider mt-4">
      <div class="container px-8">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-carousel owl-theme">
              <div class="item">
                <img src="{{url('frontend/asset/image/slider-1.jpg')}}" class="img-fluid" alt="">
              </div>
              <div class="item">
                <img src="{{url('frontend/asset/image/slider-2.jpg')}}" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
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

          <div class="row">
      
      @foreach($category as $data)
      <?php
      if($data->id != 13 ){
      ?>
      <div class="col-6 col-sm-4 col-md-3 mb-3">
        <div class="single-category text-center shadow">
          <?php
              if($data->id == 12){
                $food = "food";
                echo"<a href='".url('food',$data->id)."'>";
              }elseif($data->id == 5){
                echo"<a href='".url('property',$data->id)."'>";
              }elseif($data->id == 4){
                echo"<a href='".url('home-and-living',$data->id)."'>";
              }elseif($data->id == 6){
                echo"<a href='".url('fashion-health-beauty',$data->id)."'>";
              }elseif($data->id == 7){
                echo"<a href='".url('pats-and-animelas',$data->id)."'>";
              }elseif($data->id == 8){
                echo"<a href='".url('hobbies-sports-kids',$data->id)."'>";
              }elseif($data->id == 9){
                echo"<a href='".url('business-and-industry',$data->id)."'>";
              }elseif($data->id == 10){
                echo"<a href='".url('education',$data->id)."'>";
              }elseif($data->id == 11){
                echo"<a href='".url('services',$data->id)."'>";
              }else{
                $category = "category";
                echo"<a href='".url('category',$data->id)."'>";
              }
          ?>
          
            <?php echo "<img src='".asset($data->category_image)."' alt='' class='img-fluid'> ";?>
            <p class="h5 pt-2">{{$data->category_name}}</p>
            <?php
              $total_product = DB::table('sell_services')->where('category_id',$data->id)->count();
              $total_food = DB::table('foods')->where('category_id',12)->count();
              
              $total_property = DB::table('rent_apartment_flats')->where('category_id',5)->count();
              $total_homeAndLiving = DB::table('home_livings')->where('category_id',4)->count();
              $total_fashion = DB::table('fashion_health_beauties')->where('category_id',6)->count();
              $total_pets = DB::table('pets_animals')->where('category_id',7)->count();
              $hobbies_sports_kids = DB::table('hobbies_sports_kids')->where('category_id',8)->count();
              $business = DB::table('business_industries')->where('category_id',9)->count();
              $education = DB::table('education')->where('category_id',10)->count();
              $services = DB::table('services')->where('category_id',11)->count();
            ?>
            <p class="text-muted">{{$data->category_description}} ( 
            <?php
              if($data->id == 12){
                echo $total_food;
              }elseif($data->id == 5){
                echo $total_property;
              }elseif($data->id == 4){
                echo $total_homeAndLiving;
              }elseif($data->id == 6){
                echo $total_fashion;
              }elseif($data->id == 7){
                echo $total_pets;
              }elseif($data->id == 8){
                echo $hobbies_sports_kids;
              }elseif($data->id == 9){
                echo $business;
              }elseif($data->id == 10){
                echo $education;
              }elseif($data->id == 11){
                echo $services;
              }else{
            ?>
            {{$total_product}} 
          <?php } ?>
          ) </p>
          </a>
        </div>
      </div>
      <?php
      } else{
      ?>
      <div class="col-md-3 mb-3">
        <div class="single-category text-center shadow">
          <a href="{{url('jobs/')}}">
             <?php echo "<img src='".asset($data->category_image)."' alt='' class='img-fluid'> ";?>

            <p class="h5 pt-2">{{$data->category_name}}</p>
            <p class="text-muted">{{$data->category_description}}</p>
          </a>
        </div>
      </div>
      <?php
      }
      ?>
      @endforeach
    </div>

        </div>
      </div>
    </section>
    <!-- Ads -->
    <section class="ads text-center my-5">
      <div class="container px-8">
        <img src="asset/image/1.gif" alt="" class="img-fluid">
      </div>
    </section>

   <!--  Devesion And City
    <section class="map">
      <div class="container px-8">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="#" class="list-group-item list-group-item-action active">
                Divisions
              </a>
              @if(isset($devesion))
              @foreach($devesion as $data)
              <a href="#" class="list-group-item list-group-item-action">{{$data->devesion}}</a>
              @endforeach
              @endif
            </div>
          </div>

          <div class="col-md-6">
            <div class="map-image">
              <img src="http://w3programmers.com/bangla/wp-content/uploads/2018/12/bangladesh.png" usemap="#image-map" class="img-responsive">

                <map name="image-map">
                    <area target="_blank" alt="Rangpur Division" title="Rangpur Division" href="https://en.wikipedia.org/wiki/Rangpur_Division" coords="48,78,24,67,10,55,17,35,32,19,29,3,56,16,73,23,104,45,108,29,119,52,120,79,115,100,104,113,89,112,56,92" shape="poly">
                    <area target="_blank" alt="Rajshahi Division" title="Rajshahi Division" href="https://en.wikipedia.org/wiki/Rajshahi_Division" coords="49,162,38,163,18,153,4,136,13,118,29,113,32,98,61,101,83,108,106,112,112,128,113,145,112,159,113,180,105,193,99,195,47,170" shape="poly">
                    <area target="_blank" alt="Mymensingh Division" title="Mymensingh Division" href="https://en.wikipedia.org/wiki/Mymensingh_Division" coords="117,139,110,120,109,106,124,93,155,103,191,106,211,135,187,143,171,152,171,164,149,162" shape="poly">
                    <area target="_blank" alt="Sylhet Division" title="Sylhet Division" href="https://en.wikipedia.org/wiki/Sylhet_Division" coords="215,184,209,157,211,132,191,105,224,104,257,104,282,111,290,121,262,154,250,170" shape="poly">
                    <area target="_blank" alt="Dhaka Division" title="Dhaka Division" href="https://en.wikipedia.org/wiki/Dhaka_Division" coords="120,257,93,199,86,182,113,188,119,163,119,135,158,159,176,160,179,147,213,133,211,163,167,213,164,238,161,249" shape="poly">
                    <area target="_blank" alt="Khulna Division" title="Khulna Division" href="https://en.wikipedia.org/wiki/Khulna_Division" coords="77,344,58,255,61,239,47,232,50,218,38,202,48,169,89,191,123,263,127,281,121,315,109,336,120,327" shape="poly">
                    <area target="_blank" alt="Barisal_Division" title="Barisal_Division" href="https://en.wikipedia.org/wiki/Barisal_Division" coords="129,329,122,311,127,262,157,254,175,263,182,284,180,307,167,326,141,333" shape="poly">
                    <area target="_blank" alt="Chittagong Division" title="Chittagong Division" href="https://en.wikipedia.org/wiki/Chittagong_Division" coords="279,402,260,377,250,348,251,323,242,296,232,275,226,292,198,311,173,309,173,256,163,231,183,195,210,169,239,249,255,200,274,201,286,261,296,301,296,345,300,370" shape="poly">
                </map>
            </div>
          </div>
          <div class="col-md-3">
            <div class="list-group">
              <a href="#" class="list-group-item list-group-item-action active">
                Cities
              </a>
              @if(isset($city))
              @foreach($city as $data)
              <a href="#" class="list-group-item list-group-item-action">{{$data->city}}</a>
              @endforeach
              @endif
            </div>
          </div>
        </div>
      </div>
    </section> -->
@endsection
