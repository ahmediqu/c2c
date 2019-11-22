@extends('backend.layouts.master')
@section('page-title','Products')
@section('page-content')
<div class="content">
	<div class="container-fluid">
	
	<br><br>
	<a href="{{route('product.create')}}" class="btn btn-outline-info">Create A New Product</a>
	<table class="table table-bordered">
		<thead>
			<th>Sl.</th>
			<th>Product Name</th>
			<th>Product Category</th>
			<th>Product Image</th>
			<th>Product Price</th>
			<th>Product Sale Price</th>
			<th>Product In-stock</th>
			<th>Product Features</th>
			<th>Product Sale Tag</th>
			<th>Product Status</th>
			<th>Actions</th>
			<tbody>
				<?php $i = 0;?>
				@foreach($books as $book)
				<?php $i++; ?>
				<tr>
					<td>{{$i}}</td>
					<td>{{$book->product_name}}</td>
					<td>{{$book->product_category}}</td>
					
					<td>
						<?php
						
							
							$image = explode(',', $book->image);
							foreach($image as $data){
							//print_r($image);

							
							
						?>
						<?php echo "<img src='".asset($data)."' style='height:50px;width:50px;'>";?>

					<?php } ?>
					
					</td>
					<td>{{$book->price}}</td>
					<td>{{$book->sale_price}}</td>
					<td>{{$book->in_stock}}</td>
					<td>{{$book->product_feature}}</td>
					<td>{{$book->sale_tag}}</td>
					<td>{{$book->status}}</td>
					<td>
						<a href="{{url('admin/product/attributes',$book->id)}}" class="btn btn-outline-info"><i class="zmdi zmdi-edit"></i>Add Product Attributes</a>

						<a href="{{route('product.edit',$book->id)}}" class="btn btn-outline-info"><i class="zmdi zmdi-edit"></i></a>
						 <form action="{{route('product.destroy',$book->id)}}" method="POST" style="display: inline-block;">
                                                @method('DELETE')
                                                {{csrf_field()}}
                                                
                                                
                                                <button type="" class="btn btn-outline-danger" onClick="return deleteconfirm();"><i class="zmdi zmdi-delete"></i>
                                                </button>
                                            </form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</thead>
	</table>
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
@endsection