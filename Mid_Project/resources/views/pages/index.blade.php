@extends('layouts.main')


@section('content')
	<div class="container margin-top-20">
 		<div class="row">
 			<div class="col-md-4">
 			  @include('partials.product-sidebar')	
 			</div>

	<div class="col-md-8">
		<div class="widget">
			<h3>Featured Products</h3>
			<div class="row">
				<div class="col-md-3">
					<div class="card">
						<img alt="Card image" class="card-img-top feature-image" src="{{ asset('images/products/'.'phone1.jpg')}}">
						<div class="card-body">
							<h4 class="card-title">Samsung A50</h4>
							<p class="card-text">Price:200000</p><a class="btn btn-outline-primary" href="#">Add to chart</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card">
						<img alt="Card image" class="card-img-top feature-image" src="{{asset('images/products/'.'phone1.jpg')}}">
						<div class="card-body">
							<h4 class="card-title">Samsung A50</h4>
							<p class="card-text">Price:200000</p><a class="btn btn-outline-primary" href="#">Add to chart</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card">
						<img alt="Card image" class="card-img-top feature-image" src="{{asset('images/products/'.'phone1.jpg')}}">
						<div class="card-body">
							<h4 class="card-title">Samsung A50</h4>
							<p class="card-text">Price:200000</p><a class="btn btn-outline-primary" href="#">Add to chart</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card">
						<img alt="Card image" class="card-img-top feature-image" src="{{asset('images/products/'.'phone1.jpg')}}">
						<div class="card-body">
							<h4 class="card-title">Samsung A50</h4>
							<p class="card-text">Price:200000</p><a class="btn btn-outline-primary" href="#">Add to chart</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="widget">
			
		</div>
	</div>
	</div>
</div>
@endsection
	




