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
                            <div class="col-md-6">	

                            	<p><b>User Name : </b>{{$productDetails->name}}</p>
                            	<p><b>User Email : </b>{{$productDetails->email}}</p>
                            	<p><b>Company Name : </b>{{$productDetails->company_name}}</p>
                            	<p><b>Company Logo : </b>
                                    <?php echo "<img src='".asset($productDetails->company_logo)."'/>";?>
                                </p>
                            	
                            	<p><b>Product Created at : </b>{{$productDetails->created_at}}</p>

                            </div>
                            <div class="col-md-6">
                                <h3>Job Description</h3>
                                <hr>
                                <p>Job Title : <b>{{$productDetails->job_title}}</b></p>
                                <p>Job Description : <b>{{$productDetails->job_description}}</b></p>
                                <p>Job Type : <b>{{$productDetails->job_type}}</b></p>
                                <?php

                                    $city = DB::table('citries')->where('id',$productDetails->city_id)->first();
                                    $division = DB::table('devesions')->where('id',$productDetails->devesion_id)->first();
                                ?>
                                <p>Job Location : <b>{{$city->city}} ,{{$division->devesion}} </b></p>
                                <p>Job designation : <b>{{$productDetails->designation}}  </b></p>
                                <p>Job Deadline : <b>{{$productDetails->recive_application_vie}}  </b></p>
                                <p>Salary : <b>{{$productDetails->salary_from}} -  {{$productDetails->salary_to}}</b></p>
                                <p>education qualification : <b>{{$productDetails->education_qualification}} </b></p>
                                <p> vacancies : <b>{{$productDetails->vacancies}} </b></p>
                                <p> gender : <b>{{$productDetails->gender}} </b></p>
                            </div>
                        </div>
                        <!-- end row -->

						

						<div class="row">
							<form action="{{url('admin/pandding/job',$id)}}" method="post">
								@csrf
								<div class="form-group">
									<input type="submit" class="btn btn-outline-success" value="Approved">
								</div>
							</form>
						</div>
                        


                    </div> <!-- container -->

                </div>
                @endsection