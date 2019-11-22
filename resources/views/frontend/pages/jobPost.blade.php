@extends('frontend.layouts.master')
@section('front-page-title','Sell Quicker | Ads ')
@section('frontend-content')
<!-- Category Section Start -->
<section class="ads text-center my-3">
  <div class="container px-8">
    <img src="{{url('frontend/asset/image/1.gif')}}" alt="" class="img-fluid">
  </div>
</section>
<section class="category mt-5 mb-5">
  <div class="container px-8">
    <div class="row">
      <div class="col-md-3">
        <div class="ads-sidebar">
          <p>Sort results by</p>
          <div class="job_page-side-category">
            @foreach($job_cat as $cat)
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="{{$cat->id}}">
                <label class="form-check-label" for="{{$cat->id}}">
                  {{$cat->category_name}}
                </label>
              </div>
            </div>
            @endforeach
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
      <div class="col-md-6">
        <div class="all-product">
          @foreach($jobs as $ads)

          <div class="single-product my-3">
            <div class="card mb-3">
              <a href="{{url('/jobs/details',$ads->id)}}">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <?php echo "<img src='".asset($ads->company_logo)."' class='card-img' alt=''>"; ?>
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">{{$ads->job_title}} </h5>

                      <p class="card-text">{{$ads->company_name}}</p>
                      <p class="card-text">Tk. {{$ads->salary_from}} - {{$ads->salary_to}}</p>

                      <?php

                        $city = DB::table('citries')->where('id',$ads->city_id)->first();
                        $division = DB::table('devesions')->where('id',$ads->devesion_id)->first();
                      ?>
                      <p class="card-text"><small class="text-muted">{{$city->city}},{{$division->devesion}}</small></p>
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
    </div>
  </section>
  <!-- Ads -->
  <section class="ads text-center my-5">
    <div class="container px-8">
      <img src="{{url('frontend/asset/image/1.gif')}}" alt="" class="img-fluid">
    </div>
  </section>
  @endsection
