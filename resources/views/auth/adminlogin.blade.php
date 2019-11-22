@extends('backend.layouts.authmaster')

@section('auth-page-content')

<div class="account-bg">
                <div class="card-box mb-0">
                    <div class="text-center m-t-20">
                        <a href="#" class="logo">
                            <img src="{{url('frontend/Logo.png')}}" style="height: auto;width: 100px;" />
                            <!-- <span>WID</span> -->
                        </a>
                    </div>
                    <div class="m-t-10 p-20">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h6 class="text-muted text-uppercase m-b-0 m-t-0">Sign In</h6>
                            </div>
                        </div>
                         <form method="POST" action="{{ route('admin.login') }}">
                            @csrf
                            <div class="form-group row">
                                <div class="col-12">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="email">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="checkbox checkbox-custom">
                                        <input id="checkbox-signup" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                                        <label for="checkbox-signup">
                                            Remember me
                                        </label>




                                    </div>
                                </div>
                            </div>

                            <div class="form-group text-center row m-t-10">
                                <div class="col-12">
                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit" style="background: #C31326 !important;">Log In</button>

                                </div>
                            </div>

                            <div class="form-group row m-t-30 mb-0">
                                <div class="col-12">

                                     @if (Route::has('password.request'))
                                   <a href="{{ route('password.request') }}" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                                @endif
                                </div>
                            </div>

                            <!-- <div class="form-group row m-t-30 mb-0">
                                <div class="col-12 text-center">
                                    <h5 class="text-muted"><b>Sign in with</b></h5>
                                </div>
                            </div> -->
<!--
                            <div class="form-group row mb-0 text-center">
                                <div class="col-12">
                                    <button type="button" class="btn btn-facebook waves-effect font-14 waves-light m-t-20">
                                       <i class="fa fa-facebook m-r-5"></i> Facebook
                                    </button>

                                    <button type="button" class="btn btn-twitter waves-effect font-14 waves-light m-t-20">
                                       <i class="fa fa-twitter m-r-5"></i> Twitter
                                    </button>

                                    <button type="button" class="btn btn-googleplus waves-effect font-14 waves-light m-t-20">
                                       <i class="fa fa-google-plus m-r-5"></i> Google+
                                    </button>
                                </div>
                            </div> -->

                        </form>

                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
             <div class="m-t-20">
                <!-- <div class="text-center">
                    <p class="text-white">Don't have an account? <a href="#" class="text-white m-l-5"><b>Sign Up</b></a></p>
                </div> -->
            </div>



































@endsection
