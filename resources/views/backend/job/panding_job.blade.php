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
                            <div class="col-md-12">	
                            	<div class="table-responsive">
								<table class="table bordered">
									<thead>
										<th>Sl.</th>
										<th>Job Title</th>
										<th>Company Logo</th>
										<th>Company Name</th>
										<th>Create At</th>
										<th>Action</th>
									</thead>
									<tbody>
										<?php
											$i = 0;
										?>
										@foreach($pandding_jobs as $data)
										<?php
											$i++;
										?>
										<tr>
											<td>{{$i}}</td>
											<td>{{$data->job_title}}</td>
											<td>
												<?php 

												
													echo "<img src='".asset($data->company_logo)."' style='height:100px;width:100px;'>";
												
												?>
											</td>
											<td>{{$data->company_name}}</td>
											<td>{{$data->created_at}}</td>
											<td>
												<a href="{{url('admin/panding/job-details',$data->id)}}" class="btn btn-outline-success">Approve</a>
												<a href="" class="btn btn-outline-danger">Reject</a>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
                            </div>
                            </div>
                        </div>
                        <!-- end row -->




                        


                    </div> <!-- container -->

                </div>
                @endsection