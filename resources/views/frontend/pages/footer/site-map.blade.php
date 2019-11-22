@extends('frontend.layouts.master')
@section('front-page-title','Sell Quicker | Sitemap ')
@section('style')
<style>
</style>
@endsection
@section('frontend-content')

<div class="container about" style="margin-bottom: 50px;margin-top: 50px;">
    <div class="row justify-content-center">
        <div class="col-md-10 text-center">
            <h1 class="title">Welcome to SellQuicker.com Site Map page</h1>
            <p class="sub-titile">The Bikroy.com site is organised into several sections, as shown below. The sections are broken down by category and there is also a general section where you will find pages with useful information.</p>
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
                    <a class="nav-link active" href="{{url('/sitemap')}}">Sitemap<span class="content-icon"><i class="fas fa-angle-right"></i></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/contact')}}">Contact<span class="content-icon"><i class="fas fa-angle-right"></i></span></a>
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
            </ul>
        </div>
        <div class="col-md-8 content-text">
            <div class="row">
                <div class="col-md-6 col-xs-6">
                    <!-- Boxes de Acoes -->
                    <div class="box">
                        <div class="icon">
                            <div class="image"><i class="fas fa-soundcloud"></i></div>
                            <div class="info">
                                <br>
                                <h3 class="title">Mobiles</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-6">
                    <!-- Boxes de Acoes -->
                    <div class="box">
                        <div class="icon">
                            <div class="image"><i class="fa fa-soundcloud"></i></div>
                            <div class="info">
                                <br>
                                <h3 class="title">Property</h3>
                                <p>
                                    Browse through various property listings or list your property for sale or to let. Types of properties include apartments, houses, plots, land, commercial properties, and more.
                                    <br>
                                    <br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-6">
                    <!-- Boxes de Acoes -->
                    <div class="box">
                        <div class="icon">
                            <div class="image"><i class="fa fa-soundcloud"></i></div>
                            <div class="info">
                                <br>
                                <h3 class="title">Jobs</h3>
                                <p>
                                    If you are looking to hire someone, or are searching for that dream job in Dhaka, Chittagong or anywhere else in Bangladesh, there is a huge range of jobs on offer including marketing, IT, retail and sales and many more careers.
                                    <br>
                                    <br>
                                    <br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-6">
                    <!-- Boxes de Acoes -->
                    <div class="box">
                        <div class="icon">
                            <div class="image"><i class="fa fa-soundcloud"></i></div>
                            <div class="info">
                                <br>
                                <h3 class="title">Home & Living</h3>
                                <p>
                                    A range of new and used home appliances listed by private sellers and businesses. Many bargains available for furniture, microwave ovens, kitchenware, office furniture, antiques and much more. It's not just about the home either, you will find items for the garden such as tools, materials and gardening products.
                                    <br>
                                    <br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('scripts')
@endsection
@endsection
