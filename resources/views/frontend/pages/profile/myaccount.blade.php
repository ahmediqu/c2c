@extends('frontend.layouts.master')
@section('front-page-title',' | Profile ')
@section('frontend-content')
<div class="container container-side">
  <div class="row user">
    <div class="col-md-3">
      <div class="tile p-0">
        <h3>Account</h3>
        @include('frontend.pages.profile.profile_master')
      </div>
    </div>
    <div class="col-md-9">
      <div class="title">
        
        <div class="">
          
          <div class="alert alert-secondary" role="alert">
            <h2>You have just {{$adsCount}} add</h2>
          </div>
          <div class="myaccoutn">
            <div class="col-md-2">
              <img src="">
            </div>
            <div class="col-md-7">
              @foreach($uploadAds as $ads)
              <div class="card mb-2">
                <div class="card-body">
                  <h3>{{ $ads->brand }} {{ $ads->model }} ({{ $ads->condition }})</h3>
                  <p>{{ $ads->location }}</p>
                  <p><b>TK: {{$ads->price}}</b></p>
                  <?php 
                    if($ads->status == 0){
                      echo "<b class='text-danger'>Panding</b>";
                    }else{
                      echo "<b class='text-success'>Accepted</b>";
                    }
                  ?>
                  <form action="{{route('ads_delete',$ads->id)}}" method="POST" style="display: inline-block;">
                    @method('DELETE')
                    {{csrf_field()}}
                    <button type="submit" class="btn btn-danger" onClick="return deleteconfirm();">Delete</button>
                  </form>
                  <a href="{{route('ads_edit',$ads->id)}}" class="btn btn-info"  >Edit</a>
                </div>
              </div>
              @endforeach
            </div> <br><br>
            <h3><a href="#" class="myall-ads btn btn-info">Sell all adds</a></h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
function deleteconfirm()
{
deletedata = confirm("Are you sure to delete permanently?");
if (deletedata != true)
{
return false;
}
}
</script>
</script>
@endsection