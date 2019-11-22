@extends('frontend.layouts.master')
@section('front-page-title','Sell Quicker | Ads Details ')
@section('frontend-content')
<style>
  .invalid-feedback{
    display: block;
  }
</style>
<!-- Ads -->
<div class="container mt-5">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="mobile-form">
      <!-- <form action="{{url('sell-item')}}" method="post" enctype="multipart/form-data"> -->
        
        <div class="form-group">
          <label for=""> Category</label>
          <select name="category_id" id="category_id" class="form-control {{ $errors->has('category') ? ' is-invalid' : '' }}">
            <option value="">Select Category</option>
            @foreach($category as $data)
              <option value="{{$data->id}}">{{$data->category_name}}</option>
            @endforeach
          </select>
          @if ($errors->has('category_id'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('category_id') }}</strong>
              </span>
          @endif
        </div>

        

    <div id="vehicles" class="somename" style="display: none;">

        <div class="form-group">
          <label for="">Sub Category</label>
          <select name="sub_category_id" id="sub_category_id" class="form-control {{ $errors->has('sub_category') ? ' is-invalid' : '' }}">
            <option value="">Select a Subcategory</option>
           
          </select>
          @if ($errors->has('sub_category'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('sub_category') }}</strong>
              </span>
          @endif
        </div>
      @include('frontend.pages.sell_item.food.food')
    </div>


    <div id="mobile" style="display: none">
        @include('frontend.pages.sell_item.mobile.mobile')
    </div>



    <div id="food" style="display: none">
        @include('frontend.pages.sell_item.food.food')
    </div>


    <div id="electronics" style="display: none">
        @include('frontend.pages.sell_item.electronics.electronics')
    </div>


    <div id="homeAndLiving" style="display: none">      
        @include('frontend.pages.sell_item.homeAndLiving.index')
    </div>

    <div id="fasion" style="display: none">      
        @include('frontend.pages.sell_item.fashion.index')
    </div>

    <div id="pets" style="display: none">      
        @include('frontend.pages.sell_item.pets.index')
    </div>

    <div id="sports" style="display: none">      
        @include('frontend.pages.sell_item.sports.index')
    </div>

    <div id="business" style="display: none">      
        @include('frontend.pages.sell_item.business.index')
    </div>

    <div id="education" style="display: none">      
        @include('frontend.pages.sell_item.education.index')
    </div>
    
    <div id="services" style="display: none">      
        @include('frontend.pages.sell_item.services.index')
    </div>
    

        

        <!-- <button type="submit" class="btn btn-primary">Post Ad</button> -->
      <!-- </form> -->
      </div>
    </div>
  </div>
</div>



@section('scripts')
 <script>
    $(document).ready(function() {
        $('select[name=category_id]').change(function() {

            var url = '{{ url('category') }}' + '/' + $(this).val() + '/sub_category/';

            $.get(url, function(data) {
                var select = $('form select[name= sub_category_id]');

                select.empty();

                $.each(data,function(key, value) {
                    select.append('<option value=' + value.id + '>' + value.category_name + '</option>');
                });
            });
        });
    });

     $(document).ready(function() {
        $('select[name=devesion_id]').change(function() {

            var url = '{{ url('devesion') }}' + '/' + $(this).val() + '/city/';

            $.get(url, function(data) {
                var select = $('form select[name= city_id]');

                select.empty();

                $.each(data,function(key, value) {
                    select.append('<option value=' + value.id + '>' + value.name + '</option>');
                });
            });
        });
    });

     $(document).ready(function(){
      $('#category').change(function(){
        var category = $(this).val();
        $.ajax({
            url:"{{ url('/getBrand/') }}"+ "/" + category,
            method:"get",
            data:{category:category},
             success:function(result)
            {
             $('#brand').html(result);
            }

        });
      });
     });

     $(document).ready(function(){
      $('#brand').change(function(){
        var brand = $(this).val();
        $.ajax({
            url:"{{ url('/getModel/') }}"+ "/" + brand,
            method:"get",
            data:{brand:brand},
             success:function(result)
            {
             $('#model').html(result);
            }

        });
      });
     });
     $(document).ready(function(){
      $('#category_id').change(function(){
        var category = $(this).val();

        if(category == '3'){
          $('#vehicles').show();
        }else{
          $('#vehicles').hide();
        }

        if(category == '2' || category == '1'){
          $('#mobile').show();
        }else{
          $('#mobile').hide();
        }

        if(category == '12'){
          $('#food').show();
        }else{
          $('#food').hide();
        }

        if(category == '4'){
          $('#homeAndLiving').show();
        }else{
          $('#homeAndLiving').hide();
        }

        if(category == '6'){
          $('#fasion').show();
        }else{
          $('#fasion').hide();
        }

        if(category == '7'){
          $('#pets').show();
        }else{
          $('#pets').hide();
        }

        if(category == '8'){
          $('#sports').show();
        }else{
          $('#sports').hide();
        }

        if(category == '9'){
          $('#business').show();
        }else{
          $('#business').hide();
        }

        if(category == '10'){
          $('#education').show();
        }else{
          $('#education').hide();
        }

        if(category == '11'){
          $('#services').show();
        }else{
          $('#services').hide();
        }

        
        
      });
     });


     //$(function(){

// $('[name=category_id]').keyup(function(){
// if($(this).val()){
// $('div.somename').show();
// }
// else{
// $('div.somename').hide();
// }
// });

// });


</script>
@endsection
@endsection