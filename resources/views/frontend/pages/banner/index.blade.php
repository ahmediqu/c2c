@extends('frontend.layouts.master')
@section('front-page-title','Sell Quicker | Banner Post ')
@section('frontend-content')
<style>
.invalid-feedback{
display: block;
}
.banner-post{
    background: #fff;
    padding: 68px 30px;
}
</style>
<div class="login-page section-padding">
  <div class="container">
    <div class="banner-post">
    <div class="row justify-content-center">
      <div class="col-md-10 login-form">
        @include('frontend.partials._message')
        <div class="row">
          <div class="col-md-6 login-form-right">
            
            <form class="log-form" action="{{url('banner/post')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="banner">Upload Your Banner ( support 3Mb ) * </label>
                <input type="file" class="form-control" id="banner" aria-describedby="emailHelp" name="banner" value="{{ old('banner') }}" placeholder="Enter banner" required>
                @if ($errors->has('banner'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('banner') }}</strong>
                </span>
                @endif
              </div>
              <div class="form-group">
                <label for="link">Link ( Example: website link,Facebook link etc)</label>
                <input type="text" class="form-control" id="link" placeholder="" name="link">
                @if ($errors->has('link'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('link') }}</strong>
                </span>
                @endif
              </div>
              <div class="form-group">
                <label for="link">Position Page( Example: Home page,product page etc)</label>
                <select name="page_name" id="" class="form-control" required>
                  <option value="">Select Your Page</option>
                  @foreach($banner_page as $data)
                  <option value="{{$data->id}}">{{$data->page_name}}</option>
                  @endforeach
                </select>
                
                @if ($errors->has('page_name'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('page_name') }}</strong>
                </span>
                @endif
              </div>
              <div class="form-group">
                <label for="link">Phone Number( For Contact with you) *</label>
                <input type="number" class="form-control" name="number" required>
                
                @if ($errors->has('number'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('number') }}</strong>
                </span>
                @endif
              </div>
              <input type="submit" class="btn btn-info" value="Request">
              
            </form>
            
          </div>
          <div class="col-md-6 login-form-left">
            <h3>Add your Company Banner</h3> <br>
            <p>Contact us: <b class="text-success"> +8801626154648</b></p>
            
            <div class="row">
              
              <div class="col-md-9">
                <p><b>Home Page Banner Ads <span class="text-danger">500 Tk. /Month</span></b></p>
                <br>
                <p><b>Other Page Banner Ads <span class="text-danger">400 Tk. /Month</span></b></p>
                <p>After Banner post successfully,we contact with you for details and payment</p>
                <br>
                <pre>
      Advance Thank You
        Sell Quicker
                </pre>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection