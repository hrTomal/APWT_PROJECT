 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Edit Products</title>

  @include('seller.partials.style')
  <style>
  	.card{
  		margin-left:300px;
  		margin-top:100px;
  	}
  </style>
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
 
  @include('seller.partials.navbar')
  @include('seller.partials.sidebar_content')
  <br><br><br>
  	<div class = "card">

  		<div class="card-header">
  			Update Product
  		</div>
  		<div class="card-body">
  			<form method ="post" enctype="multipart/form-data">
  				@csrf
  				@include('seller.partials.message')
			  <div class="form-group">
			    <label for="exampleInputEmail1">Category Id</label>
			    <input type="text" class="form-control" id= "" placeholder="" name="catagory_Id" value="{{ $products['category_id'] }}">
			  </div>
			  <div class="form-group">
			    <label for="">Brand Id</label>
			    <input type="text" class="form-control" id="" name="brand_id" value="{{ $products['brand_id'] }}">
			  </div>
			  <div class="form-group">
			    <label for="">Title</label>
			    <input type="text" class="form-control" id="" name="title" value="{{ $products['title'] }}">
			  </div>
			  <div class="form-group">
			    <label for="">Description</label>
			    <textarea rows="8" cols="80" class ="form-control" name="description" id="ds" value="">{{ $products['description'] }}</textarea>
			  </div>
			  <div class="form-group">
			    <label for="">price</label>
			    <input type="text" class="form-control" id="" name="price" value="{{ $products['price'] }}">
			  </div>
			  <div class="form-group">
			    <label for="">Status</label>
			    <input type="text" class="form-control" id="status" name="status" value="{{ $products['status'] }}">
			  </div>
			  <div class="form-group">
			    <label for="">Quantity</label>
			    <input type="text" class="form-control" id="quantity" name="quantity" value="{{$products['quantity'] }}">
			  </div>
			  <div class="form-group">
			    <label for="">OfferPrice</label>
			    <input type="text" class="form-control" id="" name="offer_price" value="{{ $products['offer_price'] }}">
			  </div>		  
			  <button type="submit" class="btn btn-primary">Update Product</button>
			</form>
  		</div>
  </div>
  @include('seller.partials.footer')
  @include('seller.partials.scripts')

</div>
</div>