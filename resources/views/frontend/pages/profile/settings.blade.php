@extends('frontend.layouts.master') @section('front-page-title',' | Profile ') @section('frontend-content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="emp-profile">
            <form method="post" action="{{url('profile-update')}}">
                    <div class="row">
                        <form method="POST" action="">
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
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <div class="tab-content profile-tab" id="myTabContent">
                                <div class="tab-pane fade show active" id="myaccount" role="tabpanel" aria-labelledby="myaccount-tab">
                                    <div class="row">
                                            <div class="col-md-3">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-9">
                                                <p>{{ Auth::user()->email }}</p>
                                            </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-md-3">
                                                <label for="name">Name</label>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name" id="name" value="{{Auth::user()->name}}">
                                                </div>
                                            </div>
                                        </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="phone">Phone</label>
                                        </div>
                                        <div class="col-md-7">
                                                <div class="form-group">
                                                        <input type="text" class="form-control" name="phone" id="name" value="" placeholder="Phone number">
                                                    </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-md-3">
                                                <label for="phone">Location</label>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                    <select name="location" id="" class="form-control" name="divison">
                                                    <option value="">Dhaka</option>
                                                    </select>
                                            </div>
                                        </div>
                                   </div>
                                   <div class="row">
                                        <div class="col-md-3">
                                            <label for="phone">Sub Location</label>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                                <select name="sublocation" id="" class="form-control" name="city">
                                                <option value="">Mirpur</option>
                                                </select>
                                        </div>
                                    </div>
                               </div>
                               <div class="row">
                                   <div class="col-md-3"></div>
                                   <div class="col-md-9">
                                      <input type="submit" class="btn btn-outline-success btn-lg" value="Update Details">
                                   </div>
                               </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
