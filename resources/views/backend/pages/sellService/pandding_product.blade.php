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
										<th>condition</th>
										<th>Image</th>
										<th>Create At</th>
										<th>Action</th>
									</thead>
									<tbody>
										<?php
											$i = 0;
										?>
										@foreach($pandding_product as $data)
										<?php
											$i++;
										?>
										<tr>
											<td>{{$i}}</td>
											<td>{{$data->condition}}</td>
											<td>
												<?php 

												$image = explode(',',$data->image);
												foreach($image as $img){
													echo "<img src='".asset($img)."' style='height:100px;width:100px;'>";
												}
												?>
											</td>
											<td>{{$data->created_at}}</td>
											<td>
												<a href="{{url('admin/pandding-details',$data->id)}}" class="btn btn-outline-success">Approve</a>
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