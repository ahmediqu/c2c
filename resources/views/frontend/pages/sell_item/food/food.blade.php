<form action="{{url('food')}}" method="post" enctype="multipart/form-data">
	@csrf
	<input type="hidden" name="category_id" value="12">
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
          <label for="">Food Type</label>
          <select name="sub_category_id" id="" class="form-control {{ $errors->has('sub_category') ? ' is-invalid' : '' }}">
            <?php
              $food_subcategory =  DB::table('categories')->where('parent_id',12)->get();
            ?>
            <option value="">Select a Subcategory</option>
            @foreach($food_subcategory as $data)
              <option value="{{$data->id}}">{{$data->category_name}}</option>
            @endforeach
           
          </select>
          @if ($errors->has('sub_category'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('sub_category') }}</strong>
              </span>
          @endif
        </div>

	<div class="form-group">
		<label for="">Food Title</label>
		<input type="text" class="form-control" name="title">
	</div>
	<div class="form-group">
		<label for="">Description</label>
		<textarea name="description" id="" cols="10" rows="5" class="form-control"></textarea>
	</div>
	<div class="form-group">
		<label for="">Price</label>
		<input type="text" class="form-control" name="price">
	</div>
	<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
	<div class="form-group">
		<input type="submit" class="btn btn-info" value="Submit">
	</div>
</form>