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
 @include('backend.partials._message')
                        <div class="row">
                            <div class="col-md-12">	

                            	<p><b>User Name : </b>{{$productDetails->name}}</p>
                            	<p><b>User Email : </b>{{$productDetails->email}}</p>
                            	<p><b>Product Condition : </b>{{$productDetails->condition}}</p>
                            	<p><b>Product Brand : </b>{{$productDetails->brand}}</p>
                            	<p><b>Product Model : </b>{{$productDetails->model}}</p>
                            	<p><b>Product Edition : </b>{{$productDetails->edition}}</p>
                            	<p><b>Product Description : </b>{{$productDetails->description}}</p>
                            	<p><b>Product price : </b>{{$productDetails->price}}</p>
                            	<p><b>Product Created at : </b>{{$productDetails->created_at}}</p>

                            </div>

                        </div>
                        <!-- end row -->

						<div class="row">
							<?php
								$image = explode(',', $productDetails->image);
								foreach($image as $img){
							?>
							<div class="col-md-3">
								<?php 
								echo "<img src='".asset($img)."' style='width:100%'>";
								?>

							</div>

						<?php } ?>
						</div>

						<div class="row">
							<form action="{{url('admin/pandding-details',$id)}}" method="post">
								@csrf
								<div class="form-group">
									<input type="submit" class="btn btn-outline-success" value="Approved">
								</div>
							</form>
						</div>
                        


                    </div> <!-- container -->

                </div>
                @endsection