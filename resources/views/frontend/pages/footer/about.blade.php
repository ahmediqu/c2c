@extends('frontend.layouts.master')
@section('front-page-title','Sell Quicker | About')
@section('style')
<style>
</style>
@endsection
@section('frontend-content')
<div class="container about" style="margin-bottom: 50px;margin-top: 50px;">
    <div class="row justify-content-center">
        <div class="col-md-10 text-center">
            <h1 class="title">Welcome to SellQuicker.com About page</h1>
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
                    <a class="nav-link active" href="{{url('/aboutus')}}">About Us <span class="content-icon"><i class="fas fa-angle-right"></i></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/contact')}}">Contact<span class="content-icon"><i class="fas fa-angle-right"></i></span></a>
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
            <h4>What is SellQuicker.com?</h4>
            <ul>
                <li>SellQuicker.com is a website where you can buy and sell almost everything. The best deals are often done with people who live in your own city or on your own street, so on SellQuicker.com it's easy to buy and sell locally. All you have to do is select your region.</li>
                <li>It takes you less than 2 minutes to post an ad on SellQuicker.com. You can sign up for a free account and post ads easily every time.</li>
                <li>SellQuicker.com has the widest selection of popular second hand items all over Bangladesh, which makes it easy to find exactly what you are looking for. So if you're looking for a car, mobile phone, house, computer or maybe a pet, you will find the best deal on SellQuicker.com.</li>
                <li>SellQuicker.com does not specialize in any specific category - here you can buy and sell items in more than 50 different categories. We also carefully review all ads that are being published, to make sure the quality is up to our standards.</li>
                <li>If you'd like to get in touch with us, go to <a href="#">Contact us</a>.</li>
            </ul>
        </div>
    </div>
</div>

@section('scripts')
@endsection
@endsection
