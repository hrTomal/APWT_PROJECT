@extends('layouts.main')


@section('content')
<div class="container margin-top-20">
 <div class="row">
	<div class="col-md-4">
		@include('partials.product-sidebar')
	</div>

	<div class="col-md-8">
		<div class="widget">
			<h3>Products</h3>
			<div class="row">
				@foreach($products as $value)
				<div class="col-md-3">
					<div class="card">
						@php $i=1; @endphp

						@foreach($value->images as $image)

						@if($i>0)
						<img alt="Card image" class="card-img-top feature-image" src="{{ asset('images/products/'. $image->image)}}">
						@endif
						
						@php $i-- @endphp
						@endforeach

						<div class="card-body">
							<h4 class="card-title">{{ $value->title }}</h4>
							<p class="card-text">Price:{{ $value->price }}</p><a class="btn btn-outline-primary" href="#">Add to chart</a>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
		<div class="widget">
			
		</div>
	</div>
	</div>
</div>
@endsection
	




