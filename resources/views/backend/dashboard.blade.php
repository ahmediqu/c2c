@extends('backend.layouts.master')
@section('page-title','Dashboard')
@section('page-content')
<div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="page-title-box">
                                    <h4 class="page-title float-left">Dashboard</h4>

                                    

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="icon-layers float-right text-muted"></i>
                                    <h6 class="text-muted text-uppercase m-b-20">Total Users</h6>
                                    <h2 class="m-b-20" data-plugin="counterup">47</h2>
                                    
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="icon-paypal float-right text-muted"></i>
                                    <h6 class="text-muted text-uppercase m-b-20">Total Contact Message</h6>
                                    <h2 class="m-b-20"><span data-plugin="counterup">45</span></h2>
                                    
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="icon-chart float-right text-muted"></i>
                                    <h6 class="text-muted text-uppercase m-b-20">Today Contact</h6>
                                    <h2 class="m-b-20"><span data-plugin="counterup">324</span></h2>
                                    
                                </div>
                            </div>

                            
                            
                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <a href="{{url('#')}}">
                                        <i class="icon-rocket float-right text-muted"></i>
                                        <h6 class="text-muted text-uppercase m-b-20">Total Product</h6>
                                        <h2 class="m-b-20" data-plugin="counterup">{{$total_sell_service}}</h2>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <a href="{{url('admin/pandding-product')}}">
                                        <i class="icon-rocket float-right text-muted"></i>
                                        <h6 class="text-muted text-uppercase m-b-20">Panding  Product</h6>
                                        <h2 class="m-b-20" data-plugin="counterup">{{$pandding_sell_service}}</h2>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <a href="{{url('admin/panding-jobs')}}">
                                        <i class="icon-rocket float-right text-muted"></i>
                                        <h6 class="text-muted text-uppercase m-b-20">Panding  Jobs</h6>
                                        <h2 class="m-b-20" data-plugin="counterup">{{$job_panding_count}}</h2>
                                    </a>
                                </div>
                            </div>

                            

                            

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <a href="{{url('admin/pandingBannerPost')}}">
                                        <i class="icon-rocket float-right text-muted"></i>
                                        <h6 class="text-muted text-uppercase m-b-20">Pandding Banner Ads</h6>
                                        <h2 class="m-b-20" data-plugin="counterup">{{$BannerAdsPagePositionRequest}}</h2>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                        <!-- end row -->




                        


                    </div> <!-- container -->

                </div>
                @endsection