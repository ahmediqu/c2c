@extends('frontend.layouts.master')
@section('front-page-title','Sell Quicker | Ads ')
@section('frontend-content')
<!-- Category Section Start -->
<section class="category mt-5 mb-5">
  <div class="container px-8">
    <div class="row ">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
        </div>
      </div>
      
      </div><!-- /.row -->
      <div class="row">
        <div class="d-none d-xs-none d-sm-none d-md-block d-lg-block col-md-3">
          <div class="ads-sidebar">
            <p>Sort results by</p>
            <div class="form-group">
              <select name="" id="" class="form-control">
                <option value="">Old Product</option>
                <option value="">New Product</option>
                <option value="">Recent Product</option>
              </select>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                All posters
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
              <label class="form-check-label" for="exampleRadios2">
                Only members
              </label>
            </div>
            <div class="sidebar-category">
              <p> Category </p>
              <a href="" class="text-info">Jobs</a>
              <a href="" class="text-info">Property</a>
              <a href="" class="text-info">Electical</a>
              <a href="" class="text-info">Electonics</a>
              <a href="" class="text-info">More..</a>
            </div>
            <br>
            <div class="devesion-city">
              <p> City </p>
              <a href="" class="text-info">Dhaka</a>
              <a href="" class="text-info">Comilla</a>
              <a href="" class="text-info">Khulna</a>
              <a href="" class="text-info">Barishal</a>
              <a href="" class="text-info">More..</a>
            </div>
          </div>
        </div>
        <div class="d-none d-xs-none d-sm-none d-md-block d-lg-block col-md-6 ">
          <div class="slider-product">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <?php
                $numb = 1;
                $flag = 1;
                ?>
                @foreach($all_ads as $ads)
                <?php
                $image = explode(',', $ads->image);
                if($flag == 1){
                ?>
                <div class="carousel-item active">
                  <?php }else{ ?>
                  <div class="carousel-item">
                    <?php } ?>
                    <a href="{{url('/ads-details',$ads->id)}}">
                      <?php echo "<img src='".asset($image['0'])."' class='d-block w-100 ' alt='' style='height:300px;'>"; ?>
                      <?php echo $ads->category_name;?>
                      <!-- <img src="..." class="d-block w-100" alt="..."> -->
                      <div class="carousel-caption d-none d-md-block" style="background: radial-gradient(black, transparent);">
                        <?php
                        $brandName = DB::table('brands')->where('id',$ads->brand)->first();
                        $modelName = DB::table('models')->where('id',$ads->model)->first();
                        ?>
                        <h5 class="card-title">{{$brandName->brand}} {{$modelName->model}} ({{$ads->condition}})</h5>
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
            <div class="all-product">
              @foreach($all_ads as $ads)
              <?php
              $image = explode(',', $ads->image);
              
              ?>
              <div class="single-product my-3">
                <div class="card mb-3">
                  <a href="{{url('/ads-details',$ads->id)}}">
                    <div class="row no-gutters">
                      <div class="col-md-4">
                        <?php echo "<img src='".asset($image['0'])."' class='card-img small_image' alt=''>"; ?>
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <?php
                          $brandName = DB::table('brands')->where('id',$ads->brand)->first();
                          $modelName = DB::table('models')->where('id',$ads->model)->first();
                          ?>
                          <h5 class="card-title">{{$brandName->brand}} {{$modelName->model}} ({{$ads->condition}})
                          {{$modelName->model}} ({{$ads->condition}})</h5>
                          <?php
                          if(isset($ads->price)){
                          ?>
                          <p class="card-text">Tk. {{$ads->price}}</p>
                          <?php }else{ ?>
                          <p class="card-text">N/A</p>
                          <?php } ?>
                          <p class="card-text"><small class="text-muted">{{$ads->location}}</small></p>
                          <p class="card-text float-right"><small class="text-muted">{{ Carbon\Carbon::parse($ads->created_at)->diffForHumans()}} </small></p>
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
          <div class="row">
            <div class="col-md-12 d-block d-sm-block d-md-none d-lg-none">
              <br>
              <div class="all-product">
                
                @foreach($all_ads as $ads)
                <?php
                $image = explode(',', $ads->image);
                ?>
                <a href="{{url('/ads-details',$ads->id)}}">
                  <div class="media">
                    <?php echo "<img src='".asset($image['0'])."' class='align-self-start mr-3 small_image' alt='' style='width:30%;'>"; ?>
                    <div class="media-body">
                      <?php
                      $brandName = DB::table('brands')->where('id',$ads->brand)->first();
                      $modelName = DB::table('models')->where('id',$ads->model)->first();
                      ?>
                      <h5 class="card-title">{{$brandName->brand}} {{$modelName->model}} ({{$ads->condition}})
                      {{$modelName->model}} ({{$ads->condition}})</h5>
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
      </section>
      <!-- Ads -->
      <section class="ads text-center my-5">
        <div class="container px-8">
          <img src="{{url('frontend/asset/image/1.gif')}}" alt="" class="img-fluid">
        </div>
      </section>
      @endsection