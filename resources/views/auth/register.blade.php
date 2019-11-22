@extends('frontend.layouts.master')
@section('front-page-title','Sell Quicker | Registration ')
@section('frontend-content')
<div class="container login">
    <div class="row justify-content-center mt-5 mb-5">
      <div class="col-md-6 login-top">
        <img src="{{url('frontend/logo.png')}}" alt="" style="height: 50px;transform: scale(1.9);">
        <div class="login-content">
          <p>You come bangladesh best online product buy and sell site.This site have many feture.</p>
          <p>Login and  see this website future</p>
        </div>
      </div>
      <div class="col-md-6">
          <h3 class="h3 card-header bg-info rounded border-primary text-center color-white">Register</h3>
          <form class="form" action="{{url('register')}}" method="post">
           @csrf
           <div class="form-group">
            <label>User Name</label>
            <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="exampleInputName" aria-describedby="emailHelp" placeholder="User Name" value="{{ old('name') }}" name="name">
            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your E-mail" name="email">
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="exampleInputPassword" placeholder="Enter Your Password" name="password">
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                   </span>
            @endif
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password" name="password_confirmation">
        </div>
        <input type="submit" class="btn btn-outline-primary login-btn" value="Register">
        </form>
        <p class="login-text">Or if you have account?<span><a href="{{url('login')}}">&nbsp;&nbsp;Log In</a></span></p>
        </div>
    </div>
  </div>
@endsection
