@extends('frontend.layouts.master') @section('front-page-title',' | Profile ') @section('frontend-content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="emp-profile">
                 <form action="{{url('profile/pic')}}" method="POST" enctype="multipart/form-data">
                     @csrf
                    <div class="row">
                       
                           
                        
                            <div class="col-md-4">
                                <div class="profile-img">
                                    <?php
                                        $profile_pic = DB::table('user_profiles')->where('user_id',Auth::user()->id)->first();
                                        if(isset($profile_pic) && !empty($profile_pic)){
                                            echo "<img src='".asset($profile_pic->profile_pic)."' id='blah'>";
                                        }else{
                                    ?>
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt="" id="blah" />
                                    <?php } ?>
                                    <div class="file btn btn-lg btn-primary">
                                        Change Photo
                                        <input type="file"  id="inputGroupFile01" name="profile_pic" required />
                                    </div>
                                </div>
                                <input type="hidden"  name="user_main_id" value="<?php
                    if (isset($profile_pic) && !empty($profile_pic)) {
                        echo $profile_pic->user_id;
                    }
                    ?>"/>
                    <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
                                <input type="submit" value="Update" class="btn btn-outline-success" style="margin-left: 40px;">
                            </div>
                        </form>
                        <div class="col-md-8">
                            @include('frontend.pages.profile.profile_master')
                        </div>
                        <div class="col-md-2">
                            {{--
                            <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile" /> --}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            @include('frontend.partials._message')
                            <div class="tab-content profile-tab" id="myTabContent">
                                <div class="tab-pane fade show active" id="myaccount" role="tabpanel" aria-labelledby="myaccount-tab">
                                <div class="row">
                                        <div class="col-md-4">
                                            <label>Name</label>
                                        </div>
                                        <div class="col-md-8">
                                            <p>{{ Auth::user()->name }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-md-4">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>{{ Auth::user()->email }}</p>
                                            </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Total Ads</label>
                                        </div>
                                        <div class="col-md-8">
                                            <p>You have just &nbsp;{{$adsCount}}&nbsp;ads</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Post Details</label>
                                        </div>
                                        <div class="col-md-8">
                                            @foreach($uploadAds as $ads)
                                            <div class="card mb-2">
                                                <?php
                                        $brandName = DB::table('brands')->where('id',$ads->brand)->first();

                                        $modelName = DB::table('models')->where('id',$ads->model)->first();
                                      ?>
                                                <div class="card-body">
                                                    <h3 style="line-height:30px;margin-bottom: 8px;">{{ $brandName->brand }} {{ $modelName->model }} ({{ $ads->condition }})</h3>
                                                    <p>{{ $ads->location }}</p>
                                                    <p style="margin-bottom: 8px;"><b>TK: {{$ads->price}}</b></p>
                                                    <a href="{{url('profile/delete',$ads->id)}}" onClick="return deleteconfirm();" class="btn btn-outline-danger">Delete</a>
                                                    <!-- <form action="{{url('profile/delete',$ads->id)}}" method="POST" style="display: inline-block;">
                                                        @method('DELETE') 
                                                        {{csrf_field()}}
                                                        <button type="submit" class="btn btn-outline-danger" onClick="return deleteconfirm();">Delete</button>
                                                    </form> -->
                                                    <a href="{{url('profile/ads/edit',$ads->id)}}" class="btn btn-info">Edit</a>
                                                </div>
                                            </div>
                                            @endforeach
                                            <br>
                                            <br>
                                            <h3 style=""><a href="" class="myall-ads btn btn-info">Sell all adds</a></h3>
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

@section('scripts')
<script>
    $("#inputGroupFile01").change(function(event) {  
  RecurFadeIn();
  readURL(this);    
});
$("#inputGroupFile01").on('click',function(event){
  RecurFadeIn();
});
function readURL(input) {    
  if (input.files && input.files[0]) {   
    var reader = new FileReader();
    var filename = $("#inputGroupFile01").val();
    filename = filename.substring(filename.lastIndexOf('\\')+1);
    reader.onload = function(e) {
      debugger;      
      $('#blah').attr('src', e.target.result);
      $('#blah').hide();
      $('#blah').fadeIn(500);      
      $('.custom-file-label').text(filename);             
    }
    reader.readAsDataURL(input.files[0]);    
  } 
  $(".alert").removeClass("loading").hide();
}
function RecurFadeIn(){ 
  console.log('ran');
  FadeInAlert("Wait for it...");  
}
function FadeInAlert(text){
  $(".alert").show();
  $(".alert").text(text).addClass("loading");  
}
    function deleteconfirm() {
        deletedata = confirm("Are you sure to delete permanently?");
        if (deletedata != true) {
            return false;
        }
    }
</script>
@endsection