@extends('frontend.layouts.master')
@section('front-page-title','Sell Quicker | Login ')
@section('frontend-content')
<style>
  .invalid-feedback{
    display: block;
  }
</style>
<div class="login-page">
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
              <h3 class="h3 card-header bg-info rounded border-primary text-center color-white">Log In</h3>
            <form class="form" action="{{url('login')}}" method="post">
               @csrf
              <div class="form-group">
                <label for="inputEmail">Email Or User Name</label>
                <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" name="email" placeholder="E-mail" value="{{ old('email') }}">
                @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
                 @if ($errors->has('password'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
              </div>
               <input type="submit" class="btn btn-outline-primary login-btn" value="Log in">
            </form>
            <p class="login-text">Or if you don't account?<span><a href="{{url('register')}}">&nbsp;&nbsp;Register</a></span></p>
            <a href="#" class="login-forget">Forget password</a>
            </div>
        </div>
      </div>
</div>
@endsection
