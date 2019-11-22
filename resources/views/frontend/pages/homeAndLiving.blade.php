@extends('frontend.layouts.master')
@section('front-page-title','Sell Quicker | Food ')
@section('frontend-content')
        <div class="all-categori container">
                <div class="search-sec d-none d-md-blcok d-lg-block">
                        <div class="container">
                            <form action="#" method="post" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                                <input type="text" class="form-control search-slt" placeholder="Enter Pickup City">
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                                <input type="text" class="form-control search-slt" placeholder="Enter Drop City">
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                                <select class="form-control search-slt" id="exampleFormControlSelect1">
                                                    <option>Select Category</option>
                                                    @foreach($category as $cat)
                                                    <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                                <button type="button" class="btn btn-danger wrn-btn">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                <!-- Category Section Start -->
                <div class="category mb-5">
                  <div class="container px-8">
                    <div class="row ">
                      <div class="col-md-4 category-side d-none d-md-blcok d-lg-block">
                        <div class="ads-sidebar">
                          <div class="form-group">
                            <label for="" style="font-size:16px;font-weight: normal;">Sort results by</label>
                            <select name="" id="" class="form-control">
                              <option value="">Old Product</option>
                              <option value="">New Product</option>
                              <option value="">Recent Product</option>
                            </select>
                          </div>
                          <hr>
                          <label for="" style="font-size:16px;font-weight: normal;">Type of poster</label>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1" style="font-size:16px;font-weight: normal;">
                              All posters
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" style="color:blue;">
                            <label class="form-check-label" for="exampleRadios2">
                              Only members
                            </label>
                          </div> 
                          <hr>
                          <div class="sidebar-category">
                            <p style="font-size:16px;font-weight: normal;"> Category </p>
                            <a href="" class="text-info">Jobs</a>
                            <a href="" class="text-info">Property</a>
                            <a href="" class="text-info">Electical</a>
                            <a href="" class="text-info">Electonics</a>
                            <a href="" class="text-info">More..</a>
                          </div>
                          <br>
                          <div class="devesion-city">
                            <p style="font-size:16px;font-weight: normal;"> City </p>
                            <a href="" class="text-info">Dhaka</a>
                            <a href="" class="text-info">Comilla</a>
                            <a href="" class="text-info">Khulna</a>
                            <a href="" class="text-info">Barishal</a>
                            <a href="" class="text-info">More..</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 d-none d-md-blcok d-lg-block">
                        <br>


                <div class="bd-example">

                  <!--  Desktop Slider Start  -->

                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

                  <div class="carousel-inner">
                    <?php
                      $numb = 1;
                      $flag = 1;
                    ?>
                    @foreach($home_and_living as $ads)
                                        <?php
                                          $image = explode(',', $ads->image);
                                          if($flag == 1){
                                        ?>
                    <div class="carousel-item active">
                    <?php }else{ ?>
                      <div class="carousel-item">
                      <?php } ?>
                      <a href="{{url('/home-and-living/details',$ads->id)}}">
                       <?php echo "<img src='".asset($image['0'])."' class='d-block w-100 ' alt='' style='height:300px;'>"; ?>
                       <?php echo $ads->category_name;?>
                      <!-- <img src="..." class="d-block w-100" alt="..."> -->
                      <div class="carousel-caption d-none d-md-block" style="background: radial-gradient(black, transparent);">
                       
                                                    <h5 class="card-title">{{$ads->title}}</h5>
                                                    <?php
                                                      if(isset($ads->price)){
                                                    ?>
                                                    <p class="card-text blue" style="font-size:16px;font-weight: 500;">Tk. {{$ads->price}}</p>
                                                  <?php }else{ ?>
                                                    <p class="card-text">N/A</p>
                                                  <?php } ?>
                      </div>
                      </a>
                    </div>
                    <?php $flag++; ?>
                    @endforeach
                    
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev"  style="background: radial-gradient(black, transparent);">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next"  style="background: radial-gradient(black, transparent);">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>

                          
<!--  Desktop Slider End  -->




<br><br>









                        <div class="all-product">

                          @foreach($home_and_living as $ads)
                          <?php
                            $image = explode(',', $ads->image);

                          ?>
                          <div class="single-product my-3">
                            <div class="card mb-3">
                              <a href="{{url('/home-and-living/details',$ads->id)}}">
                                <div class="row no-gutters">
                                  <div class="col-md-4">
                                    <?php echo "<img src='".asset($image['0'])."' class='card-img small_image' alt=''>"; ?>
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                     
                                      <h5 class="card-title">{{$ads->title}}</h5>
                                      <?php
                                        if(isset($ads->price)){
                                      ?>
                                      <p class="card-text blue" style="font-size:16px;font-weight: 500;">Tk. {{$ads->price}}</p>
                                    <?php }else{ ?>
                                      <p class="card-text">N/A</p>
                                    <?php } ?>
                                      <p class="card-text"><small class="text-muted">{{$ads->location}}</small></p>
                                      <p class="card-text float-right" style="font-size: 15px;"><small class="text-muted">{{ Carbon\Carbon::parse($ads->created_at)->diffForHumans()}} </small></p>
                                    </div>
                                  </div>
                                </div>
                              </a>
                            </div>
                          </div>
                          @endforeach






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
                      <div class="col-md-2">
                      <div class="ads">
                        <img src="{{url('frontend/asset/image/left_ads.jpg')}}" alt="">
                      </div>
                    </div>
                    </div>
                    

                    <div class="row">
                      <div class="col-md-12 d-block d-sm-block d-md-none d-lg-none">
                        <br>
                          <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

    <div class="carousel-inner">
      <?php
        $numb = 1;
        $flag = 1;
      ?>
      @foreach($home_and_living as $ads)
                          <?php
                            $image = explode(',', $ads->image);
                            if($flag == 1){
                          ?>
      <div class="carousel-item active">
      <?php }else{ ?>
        <div class="carousel-item">
        <?php } ?>
         <?php echo "<img src='".asset($image['0'])."' class='d-block w-100 small_image' alt='' style=''>"; ?>
        <!-- <img src="..." class="d-block w-100" alt="..."> -->
        <div class="carousel-caption d-none d-md-block" style="background: radial-gradient(black, transparent);">
                                      <h5 class="card-title">{{$ads->title}}</h5>
                                      <?php
                                        if(isset($ads->price)){
                                      ?>
                                      <p class="card-text blue" style="font-size:16px;font-weight: 500;">Tk. {{$ads->price}}</p>
                                    <?php }else{ ?>
                                      <p class="card-text">N/A</p>
                                    <?php } ?>
        </div>
      </div>
      <?php $flag++; ?>
      @endforeach
      
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev"  style="background: radial-gradient(black, transparent);">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next"  style="background: radial-gradient(black, transparent);">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

                          





<br><br>
                        <div class="all-product">
                          

                          @foreach($home_and_living as $ads)
                          <?php
                            $image = explode(',', $ads->image);

                          ?>
                          <a href="{{url('/home-and-living/details',$ads->id)}}">
                          <div class="media">
                            <?php echo "<img src='".asset($image['0'])."' class='align-self-start mr-3' alt='' style='height:80px;width:100px;'>"; ?>
                            <div class="media-body">
                             
                                      <h5 class="card-title">{{$ads->title}}</h5>
                                      <?php
                                        if(isset($ads->price)){
                                      ?>
                                      <p class="card-text blue" style="font-size:16px;font-weight: 500;">Tk. {{$ads->price}}</p>
                                    <?php }else{ ?>
                                      <p class="card-text">N/A</p>
                                    <?php } ?>
                               <p class="card-text"><small class="text-muted">{{$ads->location}}</small></p>
                                      <p class="card-text float-right" style="font-size: 15px;"><small class="text-muted">{{ Carbon\Carbon::parse($ads->created_at)->diffForHumans()}} </small></p>
                            </div>
                          </div>
                          </a>

                          
                          <hr>
                          @endforeach

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            
                  <!-- Ads -->
                  <div class="ads text-center my-5">
                    <div class="container px-8">
                      <img src="{{url('frontend/asset/image/1.gif')}}" alt="" class="img-fluid">
                    </div>
                  </div>
        </div>

</div>
</div>

</div>
</div>
@endsection
