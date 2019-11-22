@extends('frontend.layouts.master')
@section('front-page-title','Sell Quicker | Contact ')
@section('style')
<style>
</style>
@endsection
@section('frontend-content')
<div class="container about" style="margin-bottom: 50px;margin-top: 50px;">
    <div class="row justify-content-center">
        <div class="col-md-10 text-center">
            <h1 class="title">Welcome to SellQuicker.com Contact page</h1>
            <p class="sub-titile">Here you can find answers to our most frequently asked questions and learn about SellQuicker.com, how to use it, how to stay safe and get in touch with us.</p>
            <img src="{{url('frontend/logo.png')}}" alt="SellQuicker" style="height: 30px;transform: scale(1.9);">
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="row content-section">
        <div class="col-md-4 sidenav">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="{{url('/contact')}}">Contact<span class="content-icon"><i class="fas fa-angle-right"></i></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/aboutus')}}">About Us <span class="content-icon"><i class="fas fa-angle-right"></i></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/condition')}}">Terms & Conditions<span class="content-icon"><i class="fas fa-angle-right"></i></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/privacy')}}">Privacy Policy<span class="content-icon"><i class="fas fa-angle-right"></i></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/sitemap')}}">Sitemap<span class="content-icon"><i class="fas fa-angle-right"></i></span></a>
                </li>
            </ul>
        </div>
        <div class="col-md-8 content-text">
            <h4>Contact Us</h4>
            <form action="" method="post" id="form-box" class="p-2">
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-at"></i></span>
                    </div>
                    <input type="text" name="subject" class="form-control" placeholder="Enter subject" required>
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-comment-alt"></i></span>
                    </div>
                    <textarea name="msg" id="msg" class="form-control" placeholder="Write your message" cols="30" rows="8" required></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" id="submit" class="btn btn-outline-primary btn-block" value="Send" style="font-size:18px;font-weight:500;">
                </div>
            </form>
        </div>
    </div>
</div>
<br>
@section('scripts')
@endsection
@endsection
