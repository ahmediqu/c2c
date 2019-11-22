<form action="{{route('education.store')}}" method="post" enctype="multipart/form-data"> 
  @csrf
  <input type="hidden" name="category_id" value="10">
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
  <select name="division_id" id="" class="form-control">
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
  <label for=""> Tilte </label>
  <input type="text" name="title" class="form-control" value="{{ old('title') }}">
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
  <label for="">Price</label>
  <input type="text" class="form-control" name="price" value="{{old('price')}}">
  <div class="form-check form-check-inline">
    <input class="form-check-input" name="na" type="checkbox" id="na" value="na">
    <label class="form-check-label" for="na">Negotiable</label>
  </div>
</div>
<div class="form-group">
  <input type="submit" class="btn btn-info" value="Submit">
</div>
</form>
