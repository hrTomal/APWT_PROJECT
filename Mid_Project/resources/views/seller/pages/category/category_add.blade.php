 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Category Add Page</title>

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
  			Add Category
  		</div>
  		<div class="card-body">
  			<form method ="post" enctype="multipart/form-data">
  				@csrf
  				@include('seller.partials.message')
			  <div class="form-group">
			    <label for="">Category Name</label>
			    <input type="text" class="form-control" id="" name="category_name">
			  </div>
			  <div class="form-group">
			    <label for="">Description</label>
			    <textarea rows="8" cols="80" class ="form-control" name="description" id="ds"></textarea>
			  </div>

			  <div class="form-group">
			    <label for="">Image</label>
			    <input type="file" class="form-control" id="" name="image" >
			  </div>

			   <div class="form-group">
			    <label for="">Parent Id</label>
			    <input type="text" class="form-control" id="" name="parent_id">
			  </div>
			  <button type="submit" class="btn btn-primary">Add Category</button>
			</form>
  		</div>
  </div>
  @include('seller.partials.footer')
  @include('seller.partials.scripts')

</div>
</div>