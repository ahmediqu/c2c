@extends('frontend.layouts.master') @section('front-page-title',' | Profile ') @section('frontend-content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="emp-profile">
                <form method="post" action="{{url('profile-update')}}">
                    <div class="row">
                        
                            <div class="col-md-4">
                                <div class="profile-img">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt="" />
                                    <div class="file btn btn-lg btn-primary">
                                        Change Photo
                                        <input type="file" name="file" name="profile_pic"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="profile-head">
                                    
                                    @include('frontend.pages.profile.profile_master')
                                </div>
                            </div>
                            <div class="col-md-2">
                                {{--
                                <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile" /> --}}
                            </div>
                        </div>
                    </form>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-8">
                                <div class="tab-content profile-tab" id="myTabContent">
                                    <div class="tab-pane fade show active" id="myaccount" role="tabpanel" aria-labelledby="myaccount-tab">
                                        
                                        
                                        
                                        <div class="row justify-content-center">
                                            <div class="col-md-12">
                                                @if(Session::has('success'))
                                                <div class="alert alert-success alert-dismissible">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    <h4><i class="icon fa fa-check"></i> Alert!</h4>
                                                    {{ Session::get('success') }}
                                                </div>
                                                
                                                @endif
                                                @if(Session::has('error'))
                                                <div class="alert alert-danger alert-dismissible">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    <h4><i class="icon fa fa-check"></i> Alert!</h4>
                                                    {{ Session::get('error') }}
                                                </div>
                                                
                                                @endif
                                                <div class="card">
                                                    <div class="card-header"><h1 class="text-center">{{ __('Change Password') }}</h1></div>
                                                    <hr><br>
                                                    <div class="card-body">
                                                        <form method="POST" action="{{ url('profile/change-password') }}">
                                                            @csrf
                                                            
                                                            
                                                            <div class="form-group row">
                                                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Old Password') }}</label>
                                                                <div class="col-md-6">
                                                                    <input id="password" type="password" class="form-control{{ $errors->has('passwordOld') ? ' is-invalid' : '' }}" name="passwordOld" required>
                                                                    @if ($errors->has('passwordOld'))
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('passwordOld') }}</strong>
                                                                    </span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>
                                                                <div class="col-md-6">
                                                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                                                    @if ($errors->has('password'))
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('password') }}</strong>
                                                                    </span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                                                <div class="col-md-6">
                                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mb-0">
                                                                <div class="col-md-6 offset-md-4">
                                                                    <button type="submit" class="btn btn-primary">
                                                                    {{ __('Change Password') }}
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
    @endsection