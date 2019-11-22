@extends('backend.layouts.master')
@section('page-title','Users')
@section('page-content')
<div class="content">
    <div class="container-fluid">
 <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">

            <div class="account-bg">
                <div class="card-box mb-0">
                    <div class="text-center m-t-20">
                        <a href="index.html" class="logo">
                            <i class="zmdi zmdi-group-work icon-c-logo"></i>
                            <span>Wid</span>

                        </a>
                    </div>
                    @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4> Alert!</h4>
        {{ Session::get('success') }}
    </div>
    
    @endif
                    <div class="m-t-10 p-20">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h6 class="text-muted text-uppercase m-b-0 m-t-0">Edit User Inforamtion</h6>
                            </div>
                        </div>
                        <form class="m-t-20" action="{{ url('admin/edit-users',$users->id) }}" method="post">
                        @csrf
                            <div class="form-group row">
                                <div class="col-12">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $users->name }}" placeholder="Name" required autofocus>

                               
                                </div>

                            </div>


                            <div class="form-group row text-center m-t-10">
                                <div class="col-12">
                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Update</button>
                                </div>
                            </div>

                            <!-- <div class="form-group row m-t-30 mb-0">
                                <div class="col-12 text-center">
                                    <h5 class="text-muted"><b>Sign Up with</b></h5>
                                </div>
                            </div> -->

                           <!--  <div class="form-group row mb-0 text-center">
                                <div class="col-12">
                                    <button type="button" class="btn btn-facebook font-14 waves-effect waves-light m-t-20">
                                       <i class="fa fa-facebook m-r-5"></i> Facebook
                                    </button>

                                    <button type="button" class="btn btn-twitter font-14 waves-effect waves-light m-t-20">
                                       <i class="fa fa-twitter m-r-5"></i> Twitter
                                    </button>

                                    <button type="button" class="btn btn-googleplus font-14 waves-effect waves-light m-t-20">
                                       <i class="fa fa-google-plus m-r-5"></i> Google+
                                    </button>
                                </div>
                            </div> -->


                        </form>

                    </div>
                </div>
            </div>
            <!-- end card-box-->

            <!-- <div class="m-t-20">
                <div class="text-center">
                    <p class="text-white">Already have account? <a href="{{route('login')}}" class="text-white m-l-5"><b>Sign In</b> </a></p>
                </div>
            </div> -->

        </div>
        <!-- end wrapper page -->
    </div>
</div>

@endsection