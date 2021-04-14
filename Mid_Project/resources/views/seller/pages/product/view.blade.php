@extends('seller.layouts.main')

@section('title')
 Products Page
@endsection
  <!-- Main Content -->
  @section('main_content')
<br><br><br>
<div class="main-content card-body>
  <section class="section">
<div class="card-body">
  @include('seller.partials.message')
  <div class="table-responsive table-invoice">
  <table class="table table-hover table-striped">
		<tr align="center">
			<td>Id</td>
			<td>Category Id</td>
			<td>Brand Id</td>
			<td>Title</td>
			<td>Description</td>
			<td>Slug</td>
			<td>Price</td>
			<td>Type</td>
			<td>Status</td>
			<td>Quantity</td>
			<td>Review</td>
			<td>Offer Price</td>
			<td>Seller Id</td>
			<td>Action</td>
		</tr>
		 @foreach($products as  $value)
   		 <tr align="center">
        <td>{{ $value['id'] }}</td>
        <td>{{ $value['category_id'] }}</td>
        <td>{{ $value['brand_id'] }}</td>
        <td>{{ $value['title'] }}</td>
        <td>{{ $value['description'] }}</td>
        <td>{{ $value['slug'] }}</td>
        <td>{{ $value['price'] }}</td>
        <td>{{ $value['type'] }}</td>
        <td>{{ $value['status'] }}</td>
        <td>{{ $value['quantity'] }}</td>
        <td>{{ $value['review'] }}</td>
        <td>{{ $value['offer_price'] }}</td>
        <td>{{ $value['sellerId'] }}</td>
        <td>
            <a class="btn btn-success" href="{{ route('seller.products.edit', $value['id']) }}">Edit</a>
            <hr>
            <a class="btn btn-danger" href="#deleteModal{{ $value['id'] }}" data-toggle="modal">Delete</a>
            <hr>
           <!--  modal delete -->

           <div class="modal fade" id="deleteModal{{ $value['id'] }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form  action="{!! route('seller.products.delete', $value['id']) !!}" method ="post">
                    @csrf
                     <button type="submit" class="btn btn-danger">Permanent Delete</button>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                </div>
              </div>
            </div>
          </div>
            
        </td>
    </tr>
    @endforeach 
	</table>
                  </div>
                </div>
        </section>
      </div>

  @endsection