@extends('backend.layouts.master')
@section('page-title','Category List')
@section('page-content')

<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card-box">
                    @include('backend.partials._message')
                    <a href="{{url('category.index')}}" class="btn btn-outline-success float-right">Back</a>
                    <h3>Product Attributes</h3>
                    <form action="{{url('admin/product/attributes',$products->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="product_id" name="product_id">
                        <section>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="category_name"> Product  Name</label>
                                <div class="col-lg-10">
                                 <b> {{$products->product_name}} </b>
                                </div>
                                @if ($errors->has('category_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('category_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label" for="parent_id">Product Attributes</label>
                                
                            </div>
                            <div class="form-group row">
                                
                                <div class="field_wrapper">

                                    <div class="input-group">
  
  <input type="text" name="sku[]" class="form-control" placeholder="SKU">
  <input type="text" name="product_size[]" class="form-control" placeholder="Size">
  <input type="text"  name="product_color[]" class="form-control" placeholder="Color">
  <input type="text"  name="product_price[]" class="form-control" placeholder="Price">
  <input type="text"  name="product_stoke[]" class="form-control" placeholder="Stoke">
  <div class="input-group-append">
    <button class="add_button btn btn-outline-secondary" type="button" id="button-addon2">add</button>
  </div>
</div>
</div>

                            </div>
                            
                            <button type="submit" class="btn btn-outline-info">Save</button>
                        </section>
                    </form>
                </div>
            </div>
			</div>
		</div>
	</div>
</div>

@section('backend-scripts')
<script type="text/javascript">
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div><div class="input-group"><input type="text" name="sku[]" class="form-control" placeholder="SKU"><input type="text" name="product_size[]" class="form-control" placeholder="Size"><input type="text"  name="product_color[]" class="form-control" placeholder="Color"><input type="text"  name="product_price[]" class="form-control" placeholder="Price"><input type="text"  name="product_stoke[]" class="form-control" placeholder="Stoke"><div class="remove_button input-group-append"><button class="add_button btn btn-outline-secondary" type="button" id="button-addon2">Remove</button></div></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
@endsection
@endsection
