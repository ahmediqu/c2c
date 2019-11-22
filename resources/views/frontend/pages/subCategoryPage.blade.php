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
          
          @foreach($category as $data)
          <div class="col-md-3 mb-3">
            <div class="single-category text-center shadow">
              <a href="{{url('category',$data->id)}}">
                <img src="{{url('frontend/asset/image/property-icon.png')}}" alt="" class="img-fluid">
                <p class="h5"><b>{{$data->category_name}}</b></p>
                <p class="text-muted">{{$data->category_description}}</p>
                <a href="#" class="text-info">Read More..</a>
              </a>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </section>
    <!-- Ads -->

    
    <!-- Devesion And City  -->
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
              <img src="{{url('frontend/asset/image/map.png')}}" alt="" class="img-fluid">
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
    </section>
@endsection