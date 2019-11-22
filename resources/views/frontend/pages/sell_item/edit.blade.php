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
      <form action="{{url('sell-item')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="">Product Category</label>
          <?php
            $product_category = DB::table('categories')->where('id',$adsUpdate->category_id)->first();
          ?>
          <select name="category_id" id="category" class="form-control {{ $errors->has('category') ? ' is-invalid' : '' }}">
            <option value="{{$product_category->id}}">{{$product_category->category_name}}</option>
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

        <div class="form-group">
          <label for="">Sub Category</label>
          <select name="sub_category_id" id="" class="form-control {{ $errors->has('sub_category') ? ' is-invalid' : '' }}">
          <?php
              $product_sub_category = DB::table('categories')->where('id',$adsUpdate->sub_category_id)->first();
          ?>
            <option value="">{{$product_sub_category->category_name}}</option>
            <option value="">Select a Subcategory</option>
           
          </select>
          @if ($errors->has('sub_category'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('sub_category') }}</strong>
              </span>
          @endif
        </div>


        <div class="form-group">
          <label for="exampleInputEmail1">Devesion</label>
          <select name="devesion_id" id="" class="form-control">
            <?php
              $product_division = DB::table('devesions')->where('id',$adsUpdate->devesion_id)->first();
            ?>
            <option value="">{{$product_division->devesion}}</option>
            <option value="">Select Devesion</option>
            @foreach($devesion as $data)
              <option value="{{$data->id}}">{{$data->devesion}}</option>
            @endforeach
          </select>
        </div>


        <div class="form-group">
          <label for="exampleInputEmail1">City</label>
          <select name="city_id" id="" class="form-control">
          <?php
              $product_city = DB::table('citries')->where('id',$adsUpdate->city_id)->first();
          ?>
            <option value="{{$product_city->id}}">{{$product_city->city}}</option>
            <option value="">Select Devesion</option>
            
          </select>
        </div>


        <div class="form-group">
          <label for="exampleInputEmail1">Add photos (5 for free)</label>
          <input type="file" class="form-control" name="image[]" multiple>
          @if ($errors->has('image'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('image') }}</strong>
              </span>
          @endif
        </div>
        <div class="form-group">
          <label for="">Condition</label> <hr>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="condition" id="used" value="used" <?php if($adsUpdate->condition == 'used'){?>checked<?php } ?>>
            <label class="form-check-label" for="used">
              Used
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="condition" id="new" value="new" <?php if($adsUpdate->condition == 'used'){?>checked<?php } ?>>
            <label class="form-check-label" for="new">
              New
            </label>
          </div>
        </div>
        <div class="form-group">
          <label for="">Brand</label>
          <select name="brand" id="brand" class="form-control">
            <?php
              $product_brand = DB::table('brands')->where('id',$adsUpdate->brand)->first();
            ?>
            <option value="{{$product_brand->id}}">{{$product_brand->brand}}</option>
            <option value="">Select Brand</option>
            
          </select>
          @if ($errors->has('brand'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('brand') }}</strong>
              </span>
          @endif
        </div>
        <div class="form-group">
          <label for="">Model</label>
          <select name="model" id="model" class="form-control">
            <?php
              $product_model = DB::table('models')->where('id',$adsUpdate->model)->first();
            ?>
            <option value="{{$product_model->id}}">{{$product_model->model}}</option>
            <option value="">Select Model</option>
          </select>
          @if ($errors->has('model'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('model') }}</strong>
              </span>
          @endif
        </div>
        <div class="form-group">
          <label for="">Edition ( Optional )</label>
          <input type="text" name="edition" class="form-control" value="{{ old('edition',$adsUpdate->edition) }}">
        </div>
<?php
  $product_features = explode(',',$adsUpdate->features);
  print_r($product_features);
  // foreach($product_features as $product_feature){
?>
        <div class="form-group">
          <label for="">Features (optional)</label>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="bluetooth" value="bluetooth" name="features[]" <?php if($product_features['0'] == 'bluetooth'){echo "checked";}?>>
            <label class="form-check-label" for="bluetooth">Bluetooth</label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="camera" value="camera" name="features[]" <?php if($product_features['1'] == 'camera'){echo "checked";}?>>
            <label class="form-check-label" for="camera">Camera</label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="dual-lens-camera" value="Dual-Lens Camera" name="features[]" <?php if($product_features['2'] == 'Dual-Lens Camera'){echo "checked";}?>>
            <label class="form-check-label" for="dual-lens-camera">Dual-Lens Camera</label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="dual_sim" value="Dual SIM" name="features[]">
            <label class="form-check-label" for="dual_sim">Dual SIM</label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="expandable_memory" value="Expandable Memory" name="features[]">
            <label class="form-check-label" for="expandable_memory">Expandable Memory</label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Fingerprint Sensor" name="features[]">
            <label class="form-check-label" for="inlineCheckbox2">Fingerprint Sensor</label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="gps" value="gps" name="features[]">
            <label class="form-check-label" for="gps">GPS</label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="physical" value="physical keyboard" name="features[]">
            <label class="form-check-label" for="physical">Physical keyboard</label>
          </div>
        </div>
        <?php //} ?>
        <div class="form-group">
          <label for="">Description</label>
          <textarea name="description" class="form-control" id="" cols="10" rows="10"> {{ old('description') }} </textarea>
          @if ($errors->has('description'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('description') }}</strong>
              </span>
          @endif
        </div>

        <div class="form-group">
          <label for="">Authenticity</label> <hr>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="authenticity" id="original" value="original" checked>
            <label class="form-check-label" for="original">
              Original
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="radio" name="authenticity" id="refurbished" value="refurbished" >
            <label class="form-check-label" for="refurbished">
              Refurbished
            </label>
          </div>
        </div>

        <div class="form-group">
          <label for="">Price</label>
          <input type="text" class="form-control" name="price" value="{{old('price')}}">
          <div class="form-check form-check-inline">
            <input class="form-check-input" name="na" type="checkbox" id="na" value="na">
            <label class="form-check-label" for="na">Negotiable</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="exchange" id="Exchange" value="Exchange">
            <label class="form-check-label" for="Exchange">Exchange</label>
          </div>
        </div>

        <button type="submit" class="btn btn-primary">Post Ad</button>
      </form>
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
      })
     })

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
      })
     })


     


</script>
@endsection
@endsection