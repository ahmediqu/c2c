@extends('frontend.layouts.master')
@section('front-page-title','Sell Quicker | Ads ')
@section('frontend-content')
<!-- Category Section Start -->
<section class="category mt-5 mb-5">
  <div class="container px-8">
    <div class="promote">
      <div class="row">
        
        <div class="col-md-6">
          <div class="all-product">
            <h3> Selected ad for promotion </h3>
            
            <div class="single-product my-3">
              <div class="card mb-3">
                <a href="#">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <?php
                        if(isset($product->image)){
                            $image = explode(',', $product->image);
                        }
                          ?>
                       <?php echo "<img src='".asset($image['0'])."' class='card-img' alt=''>"; ?>
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">{{$product->brand}} {{$product->model}} ({{$product->condition}})</h5>
                        
                        <p class="card-text">Tk.  {{$product->price}}</p>
                        
                        <!-- <p class="card-text">N/A</p> -->
                        
                       <p class="card-text"><small class="text-muted">
                        <?php if(isset($product->location)){?>
                          {{$product->location}}
                        <?php } ?>

                          </small></p>
                                      <p class="card-text float-right" style="font-size: 15px;"><small class="text-muted">{{ Carbon\Carbon::parse($product->created_at)->diffForHumans()}} </small></p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            
            
            
            
            <div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
     <b> 3 days
<span class="text-danger">Tk 699</span> </b> <br>
<b>7 days <span class="text-danger">Tk 1,099</span></b>

<br>
<b>15 days <span class="text-danger">Tk 1,099</span></b>
<br> <br>
 <button class="btn btn-info"> Request </button> <br>
 <b> Or </b>
 <br> 
 <b>Contact us : <span class="text-success"> +8801626154648 </span></b>

  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
    <b> 3 days
<span class="text-danger">Tk 200</span> </b> <br>
<b>7 days <span class="text-danger">Tk 300</span></b>

<br>
<b>15 days <span class="text-danger">Tk 400</span></b>
<br> <br>
 <button class="btn btn-info"> Request </button> <br>
 <b> Or </b>
 <br> 
 <b>Contact us : <span class="text-success"> +8801626154648 </span></b>
  </div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
    <b> 3 days
<span class="text-danger">Tk 3,999</span> </b> <br>
<b>7 days <span class="text-danger">Tk 4,999</span></b>

<br>
<b>15 days <span class="text-danger">Tk 7,999
</span></b>
<br> <br>
 <button class="btn btn-info"> Request </button> <br>
 <b> Or </b>
 <br> 
 <b>Contact us : <span class="text-success"> +8801626154648 </span></b>
  </div>
</div>
            
            <!--  <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav> -->
          </div>
        </div>
        <div class="col-md-6">
          <h3><b>Make your ad stand out! </b> <br>
          <small>Get up to 10x more responses on your ads by applying a promotion</small>
          </h3>
          <br>
          
              

<!--  <b> 3 days
<span class="text-danger">Tk 699</span> </b> <br>
<b>7 days <span class="text-danger">Tk 1,099</span></b>

<br>
<b>15 days <span class="text-danger">Tk 1,099</span></b> -->



<ul class="nav nav-pills mb-3 nav-costom-bumnup-topup" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
      
      <span class="card">
        <span class="card-body" style="color: #000;">
          <b>Daily Bump Up</b> <br>
Get a fresh start every day and gain upto 5 times or more views!
        </span>
      </span>

    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
      
      <span class="card">
        <span class="card-body" style="color: #000;">
          <b>URGENT</b> <br>
Stand out from the rest by showing a bright red marker on the ad!
        </span>
      </span>

    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
      
      <span class="card">
        <span class="card-body" style="color: #000;">
          <b>Spotlight</b> <br>
Boost sales by showing your ad in this premium spot.
        </span>
      </span>


    </a>
  </li>
</ul>


            </div>
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
    $('#pills-tab a').click(function (e) {
      
      $(this).tab('show')
    })
  </script>
  @endsection
  @endsection