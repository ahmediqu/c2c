@extends('frontend.layouts.master')
@section('front-page-title','Sell Quicker | Food Details ')
@section('style')
<style>

#pointer {
      width: 200px;
    height: 40px;
    position: relative;
    background: #fff564;
    color: #000;
    font-weight: 700;
    text-align: center;
    padding-top: 10px;
    }
    #pointer:after {
      content: "";
      position: absolute;
      left: 0;
      bottom: 0;
      width: 0;
      height: 0;
      border-left: 20px solid white;
      border-top: 20px solid transparent;
      border-bottom: 20px solid transparent;
    }
    #pointer:before {
      content: "";
    position: absolute;
    right: -20px;
    bottom: 0;
    width: 0;
    height: 0;
    border-left: 20px solid #fff564;
    border-top: 20px solid transparent;
    border-bottom: 20px solid transparent;
    }
    /*#pointer{
      clip-path: polygon(74% 0, 42% 15%, 72% 30%, 0 29%, 0 0);
      background: blue;
    }*/

    /* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
      cursor: pointer;
    position: absolute;
    top: 16%;
    width: auto;
    padding: 16px;
    background: #ffff;
    margin-top: -57px;
    color: white;
    font-weight: bold;
    font-size: 20px;
    border-radius: 0 3px 3px 0;
    user-select: none;
    -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>
@endsection
@section('frontend-content')
<!-- Ads -->
<section class="ads text-center my-5">
  <div class="container px-8">
    <img src="{{url('frontend/asset/image/1.gif')}}" alt="" class="img-fluid">
  </div>
</section>
<section class="product-details">
  <div class="container py-8 bg-white p-3">
    <div class="row">
      <div class="col-md-8">

<?php
  // echo $products_details->catgory_id->category->->category_name;

?>

<div class="">
  <?php
          // echo $products_details->image;
          $pImage = explode(',',$services->image);
          // echo $pImage['0'];
          $i=0;
    ?>
    @foreach($pImage as $img)
    <?php $i++;?>
  <div class="mySlides" style="text-align: center;">
    
    <?php echo "<img src='".asset($img)."' style='width: auto;height:auto;'>";?>
  </div>

 @endforeach
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>



  <div class="row">
    <?php
          // echo $products_details->image;
          $pImage = explode(',',$services->image);
          // echo $pImage['0'];
          $i=0;
    ?>
    @foreach($pImage as $img)
    <?php $i++;?>
    <div class="column">
      <?php echo "<img class='demo cursor' src='".asset($img)."' style='width:100%' onclick='currentSlide(".$i.")' alt='The Woods'>";?>
    </div>
    @endforeach
   

  </div>
</div>




        <div class="image-gallery">
                    
         
          
          <!-- Modal -->
          <div class="modal fade" id="exampleModal{{$services->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Message</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="single-product my-3">
                    <div class="card mb-3">
                      <a href="{{url('/ads-details',$services->id)}}">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <?php echo "<img src='".asset($pImage['0'])."' class='card-img' alt=''>"; ?>
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <?php
                              $brandName = DB::table('brands')->where('id',$services->brand)->first();
                              $modelName = DB::table('models')->where('id',$services->model)->first();
                              ?>
                              <h5 class="card-title">{{$services->title}}</h5>
                              <?php
                              if(isset($services->price)){
                              ?>
                              <span id="pointer">
                                
                              </span>
                              <p class="pointer" id="pointer">Tk. {{$services->price}}</p>
                              <?php }else{ ?>
                              <p class="card-text">N/A</p>
                              <?php } ?>
                              <p class="card-text"><small class="text-muted"></small></p>
                              <p class="card-text float-right"><small class="text-muted">{{ Carbon\Carbon::parse($services->created_at)->diffForHumans()}} </small></p>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <form action="{{url('message')}}" method="post">
                  @csrf
                  <div class="modal-footer">
                    
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" name="message" placeholder="Write Text.." aria-label="Recipient's username" aria-describedby="button-addon2">
                      <div class="input-group-append">
                        
                        <input type="hidden" name="product_id" value="{{$services->id}}">
                        <input type="hidden" name="to" value="{{$services->user_id}}">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Send</button>
                        
                      </div>
                    </div>
                    
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="ads-content">
          
          <h1 class="">{{$services->title}}</h1>
          <p id="pointer"><b>Price : </b>Tk. {{$services->price}}</p>
          <br>
          <hr>
          <div class="features">
            <h3>Fatures</h3>
            <ul>
              <?php
              $featuress = explode(',', $services->features);
              foreach ($featuress as $feature) {
              ?>
              <li>{{ $feature }}</li>
              <?php } ?>
              <ul>
              </div>
              <br>
              <hr>
              <div class="edition">
                <h3>Edition</h3>
                <p>{{ $services->edition }}</p>
              </div> <hr>
              <div class="description">
                <h3>Description </h3>
                {{ $services->description }}
              </div>
              <br>
              <hr>
              <div class="contact">
                <h3><b>Contact</b></h3>
                <div class="ads-content">
              <div class="media">
                <img src="{{url('frontend/asset/image/call.png')}}" class="mr-3" alt="..." style="height: auto;width: 30px;">
                <div class="media-body">
                  <h6 class="mt-0"> 01752540XXX </h6>
                  <a href="#">Click to show phone number</a>
                </div>
              </div>
              <hr>
              <div class="media">
                <img src="{{url('frontend/asset/image/chat.png')}}" class="mr-3" alt="..." style="height: auto;width: 30px;">
                <div class="media-body">
                  <h6 class="mt-0" data-toggle="modal" data-target="#exampleModal{{$services->id}}"> CHAT </h6>
                </div>
              </div>
              <hr>
              <p><b>Share this ad</b></p>
              <hr>
              <a href="#" class="facebook-icon"> <i class="fab fa-facebook-f"></i> </a>
              <a href="#" class="twitter-icon"> <i class="fab fa-twitter"></i> </a>
            </div>
                {{ $services->phone}}
              </div>
              <a href="{{url('/promote/ads',$services->id)}}" class="btn btn-info">Promote this ads</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="ads-content">
              <div class="media">
                <img src="{{url('frontend/asset/image/call.png')}}" class="mr-3" alt="..." style="height: auto;width: 30px;">
                <div class="media-body">
                  <h6 class="mt-0"> 01752540XXX </h6>
                  <a href="#">Click to show phone number</a>
                </div>
              </div>
              <hr>
              <div class="media">
                <img src="{{url('frontend/asset/image/chat.png')}}" class="mr-3" alt="..." style="height: auto;width: 30px;">
                <div class="media-body">
                  <h6 class="mt-0" data-toggle="modal" data-target="#exampleModal{{$services->id}}"> CHAT </h6>
                </div>
              </div>
              <hr>
              <p><b>Share this ads</b></p>
              <hr>
              <a href="#" class="facebook-icon"> <i class="fab fa-facebook-f"></i> </a>
              <a href="#" class="twitter-icon"> <i class="fab fa-twitter"></i> </a>
              
              
             
            </div>
            <br>
             <img src="{{url('frontend/asset/image/ads-01.png')}}" alt="" style="width: 100%;">
          </div>
          </div>
          <br><br>
          <?php
          //echo $products_details->user_id;
          $user_details = DB::table('users')->join('services','services.user_id','=','users.id')->where('users.id',$services->user_id)->get();
          ?>
          
          <div class="row" style="background: #fff;padding: 10px;">
            <div class="col-12">
              <h1>Related Of {{$user_details[0]->name}}</h1> <hr>
            </div>
            
            @foreach($user_details as $ads)
            <div class="col-md-4">
              <br>
              <div class="all-product">
                
                
                <?php
                $image = explode(',', $ads->image);
                ?>
                <a href="{{url('/ads-details',$ads->id)}}">
                  <div class="media ">
                    <?php echo "<img src='".asset($image['0'])."' class='align-self-start mr-3' alt='' style='height:80px;width:100px;'>"; ?>
                    <div class="media-body">
                      
                      <h5 class="card-title">{{$ads->title}} </h5>
                      <?php
                      if(isset($ads->price)){
                      ?>
                      <p class="card-text blue"  style="font-size:16px;font-weight: 500;">Tk. {{$ads->price}}</p>
                      <?php }else{ ?>
                      <p class="card-text">N/A</p>
                      <?php } ?>
                      <p class="card-text"><small class="text-muted">{{$ads->address}}</small></p>
                      <p class="card-text float-right" style="font-size: 15px;"><small class="text-muted">{{ Carbon\Carbon::parse($ads->created_at)->diffForHumans()}} </small></p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            @endforeach
          </div>
          
        </div>
      </section>
      <!-- Ads -->
      <section class="ads text-center my-5">
        <div class="container px-8">
          <img src="{{url('frontend/asset/image/1.gif')}}" alt="" class="img-fluid">
        </div>
      </section>
      @section('scripts')

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
      @endsection
      @endsection