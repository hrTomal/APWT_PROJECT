 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Upcoming Products</title>

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
  			Add Upcoming Product
  		</div>
  		<div class="card-body">
  			<form method ="post" enctype="multipart/form-data">
  				@csrf
  				@include('seller.partials.message')
			  <div class="form-group">
			    <label for="exampleInputEmail1">Product Id</label>
			    <input type="text" class="form-control" id= "" placeholder="" name="id">
			  </div>
			  <div class="form-group">
			    <label for="">Product Name</label>
			    <input type="text" class="form-control" id="" name="name">
			  </div>
			  <div class="form-group">
			    <label for="">launch Date</label>
			    <input type="date" class="form-control" id="" name="launch_date" >
			  </div>
			  <div class="form-group">
			    <label for="">Product Image</label>
			    <input type="file" class="form-control" id="" name="myfile" >
			  </div>			  
			  <button type="submit" class="btn btn-primary">Insert</button>
			</form>
  		</div>
  </div>
  @include('seller.partials.footer')
  @include('seller.partials.scripts')

</div>
</div>