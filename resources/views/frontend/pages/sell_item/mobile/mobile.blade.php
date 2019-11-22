<form action="{{url('sell-item')}}" method="post" enctype="multipart/form-data"> 
  @csrf
<div class="form-group">
  <label for="">Sub Category</label>
  <select name="sub_category_id" id="" class="form-control {{ $errors->has('sub_category') ? ' is-invalid' : '' }}">
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
    <option value="">Select Devesion</option>
    @foreach($devesion as $data)
    <option value="{{$data->id}}">{{$data->devesion}}</option>
    @endforeach
  </select>
</div>
<div class="form-group">
  <label for="exampleInputEmail1">City</label>
  <select name="city_id" id="" class="form-control">
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
    <input class="form-check-input" type="radio" name="condition" id="used" value="used" checked>
    <label class="form-check-label" for="used">
      Used
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="condition" id="new" value="new">
    <label class="form-check-label" for="new">
      New
    </label>
  </div>
</div>
<div class="form-group">
  <label for="">Brand</label>
  <select name="brand" id="brand" class="form-control">
    <?php
      $brand = DB::table('brands')->where('category_id',2)->get();
    ?>
    <option value="">Select Brand</option>
    @foreach($brand as $data)
    <option value="{{$data->id}}">{{$data->brand}}</option>
    @endforeach
    
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
  <input type="text" name="edition" class="form-control" value="{{ old('edition') }}">
</div>
<div class="form-group">
  <label for="">Features (optional)</label>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="bluetooth" value="bluetooth" name="features[]">
    <label class="form-check-label" for="bluetooth">Bluetooth</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="camera" value="camera" name="features[]">
    <label class="form-check-label" for="camera">Camera</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="dual-lens-camera" value="Dual-Lens Camera" name="features[]">
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
<div class="form-group">
  <input type="submit" class="btn btn-info" value="Submit">
</div>
</form>


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
     $(document).ready(function(){
      $('#category_id').change(function(){
        var category = $(this).val();

        if(category == '3'){
          $('#vehicles').show();
        }else{
          $('#vehicles').hide();
        }

        if(category == '2'){
          $('#mobile').show();
        }else{
          $('#mobile').hide();
        }

        if(category == '12'){
          $('#food').show();
        }else{
          $('#food').hide();
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
