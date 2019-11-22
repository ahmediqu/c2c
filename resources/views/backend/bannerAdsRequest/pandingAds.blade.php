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
										<th>Banner</th>
										<th>Bannre Link</th>
										<th>Number</th>
										<th>Page Name</th>
										<th>Create At</th>
										<th>Action</th>
									</thead>
									<tbody>
										<?php
											$i = 0;
										?>
										@foreach($panding_ads as $data)
										<?php
											$i++;
										?>
										<tr>
											<td>{{$i}}</td>
											<td>
												<?php 

												
													echo "<img src='".asset($data->banner)."' style='height:100px;width:100px;'>";
												
												?>
											</td>
											<td>{{$data->link}}</td>
											<td>{{$data->number}}</td>
											<td>{{$data->page_name}}</td>
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